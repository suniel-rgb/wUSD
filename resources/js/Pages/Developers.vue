<template>
    <div class="pt-20">
        <!-- Hero Section -->
        <section class="section-sm bg-white relative overflow-hidden">
            <div class="absolute inset-0 bg-grid opacity-40" />
            <div class="absolute inset-0 bg-gradient-to-b from-blue-50/30 to-transparent" />
            <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-blue-100/50 rounded-full blur-3xl" />

            <div class="container-wide relative z-10">
                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8">
                    <div class="max-w-2xl">
                        <Badge variant="prex" class="mb-6">
                            <svg class="w-3 h-3 mr-1 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                            Developer Platform
                        </Badge>
                        <h1 class="heading-xl mb-4">
                            Build with <span class="text-gradient">wUSD</span>
                        </h1>
                        <p class="text-xl text-slate-600 leading-relaxed">
                            Integrate wUSD as a <strong class="text-slate-900">user-aligned reward layer</strong>.
                            Access treasury metrics, manage rewards, build utilities.
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="https://api.prex.markets/docs" target="_blank" rel="noopener noreferrer" class="btn-primary inline-flex items-center">
                            API Reference
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                        </a>
                        <a href="https://github.com/prex-markets/wusd-sdk" target="_blank" rel="noopener noreferrer" class="btn-secondary inline-flex items-center">
                            View on GitHub
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Concepts -->
        <section class="section-sm bg-slate-50 border-b border-slate-200">
            <div class="container-wide">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <Badge variant="pusd" class="mb-4">Core Concepts</Badge>
                    <h2 class="heading-lg mb-4">
                        How wUSD <span class="text-gradient-pusd">Works</span>
                    </h2>
                    <p class="text-lg text-slate-600">
                        Understand the fundamental mechanics before integrating.
                    </p>
                </div>

                <!-- Conceptual Flow -->
                <div class="max-w-5xl mx-auto mb-12">
                    <Card class="p-6">
                        <h3 class="text-lg font-semibold text-slate-900 mb-6 flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                            Reward Flow: Trade → Calculate → Credit → Use
                        </h3>
                        <div class="grid md:grid-cols-4 gap-4">
                            <div v-for="(step, index) in flowSteps" :key="index" class="relative">
                                <div :class="['p-4 rounded-xl border', step.bgColor, step.borderColor]">
                                    <div :class="['w-8 h-8 rounded-full border flex items-center justify-center font-bold text-sm mb-3', step.numBg, step.numBorder, step.numText]">{{ index + 1 }}</div>
                                    <h4 class="text-slate-900 font-medium mb-1">{{ step.title }}</h4>
                                    <p class="text-slate-600 text-xs">{{ step.description }}</p>
                                </div>
                                <div v-if="index < flowSteps.length - 1" class="hidden md:block absolute top-1/2 -right-2 transform -translate-y-1/2 z-10">
                                    <span class="text-slate-300">→</span>
                                </div>
                            </div>
                        </div>
                    </Card>
                </div>

                <!-- Key Concepts Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
                    <Card v-for="(concept, index) in concepts" :key="index" class="p-5">
                        <h4 class="text-slate-900 font-semibold mb-2">{{ concept.title }}</h4>
                        <p class="text-slate-600 text-sm">{{ concept.description }}</p>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Quick Start -->
        <section class="section bg-white">
            <div class="container-wide">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <Badge variant="pusd" class="mb-4">Quick Start</Badge>
                    <h2 class="heading-lg mb-4">
                        Get Started in <span class="text-gradient-pusd">Minutes</span>
                    </h2>
                    <p class="text-lg text-slate-600">
                        Fetch wUSD data with a simple API call. No authentication required for public endpoints.
                    </p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <Tabs variant="pills" :tabs="quickStartTabs">
                        <template #curl>
                            <CodeBlock filename="terminal" language="bash" :code="curlCode" />
                        </template>
                        <template #javascript>
                            <CodeBlock filename="index.js" language="javascript" :show-line-numbers="true" :code="jsCode" />
                        </template>
                        <template #python>
                            <CodeBlock filename="main.py" language="python" :show-line-numbers="true" :code="pythonCode" />
                        </template>
                    </Tabs>
                </div>
            </div>
        </section>

        <!-- API Endpoints -->
        <section class="section bg-slate-50">
            <div class="container-wide">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <Badge variant="prex" class="mb-4">REST API</Badge>
                    <h2 class="heading-lg mb-4">
                        API <span class="text-gradient">Endpoints</span>
                    </h2>
                    <p class="text-lg text-slate-600">
                        All endpoints return JSON. Base URL: <code class="code-inline">https://api.prex.markets</code>
                    </p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <Card class="overflow-hidden p-0">
                        <div class="divide-y divide-slate-200">
                            <div v-for="(endpoint, index) in apiEndpoints" :key="index" class="p-4 hover:bg-slate-50 transition-colors">
                                <div class="flex items-start justify-between gap-4">
                                    <div class="flex items-center gap-3">
                                        <span :class="['px-2 py-1 rounded text-xs font-mono font-bold', endpoint.method === 'GET' ? 'bg-emerald-100 text-emerald-700' : 'bg-blue-100 text-blue-700']">
                                            {{ endpoint.method }}
                                        </span>
                                        <code class="text-slate-700 font-mono text-sm">{{ endpoint.path }}</code>
                                    </div>
                                    <Badge v-if="endpoint.auth" variant="default" class="text-xs">
                                        <svg class="w-3 h-3 mr-1 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" /></svg>
                                        Auth Required
                                    </Badge>
                                </div>
                                <p class="text-slate-600 text-sm mt-2 ml-16">{{ endpoint.description }}</p>
                            </div>
                        </div>
                    </Card>

                    <div class="mt-6 text-center">
                        <a href="https://api.prex.markets/docs" target="_blank" rel="noopener noreferrer" class="btn-secondary inline-flex items-center">
                            View Full API Reference
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Authentication -->
        <section class="section bg-white">
            <div class="container-wide">
                <div class="max-w-4xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-8">
                        <div>
                            <Badge variant="pusd" class="mb-4">Authentication</Badge>
                            <h2 class="heading-md mb-4">API Keys</h2>
                            <p class="text-slate-600 mb-6">
                                Public endpoints (treasury, supply, redemption epochs) don't require authentication.
                                For user-specific data and actions, you'll need an API key.
                            </p>
                            <div class="space-y-4">
                                <div v-for="(item, index) in authFeatures" :key="index" class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-blue-50 border border-blue-200 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="item.iconPath" /></svg>
                                    </div>
                                    <div>
                                        <h4 class="text-slate-900 font-medium">{{ item.title }}</h4>
                                        <p class="text-slate-600 text-sm">{{ item.description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <CodeBlock filename="authenticated-request.js" language="javascript" :show-line-numbers="true" :code="authCode" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Webhooks -->
        <section class="section bg-slate-50">
            <div class="container-wide">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-12">
                        <Badge variant="prex" class="mb-4">
                            <svg class="w-3 h-3 mr-1 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" /></svg>
                            Webhooks
                        </Badge>
                        <h2 class="heading-lg mb-4">
                            Real-time <span class="text-gradient">Events</span>
                        </h2>
                        <p class="text-lg text-slate-600">
                            Subscribe to events and get notified when important things happen.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <Card v-for="(webhook, index) in webhooks" :key="index" class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <code class="text-blue-600 font-mono text-sm">{{ webhook.event }}</code>
                                <Badge v-if="webhook.status === 'available'" variant="success">
                                    <svg class="w-3 h-3 mr-1 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    Available
                                </Badge>
                                <Badge v-else variant="default">
                                    <svg class="w-3 h-3 mr-1 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    Coming Soon
                                </Badge>
                            </div>
                            <p class="text-slate-600 text-sm">{{ webhook.description }}</p>
                        </Card>
                    </div>

                    <CodeBlock filename="webhook-payload.json" language="json" :code="webhookPayload" />
                </div>
            </div>
        </section>

        <!-- SDKs -->
        <section class="section bg-white">
            <div class="container-wide">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <Badge variant="pusd" class="mb-4">SDKs &amp; Libraries</Badge>
                    <h2 class="heading-lg mb-4">
                        Official <span class="text-gradient-pusd">SDKs</span>
                    </h2>
                    <p class="text-lg text-slate-600">
                        Type-safe, well-documented libraries for popular languages.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                    <Card v-for="(sdk, index) in sdks" :key="index" class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-slate-900 font-semibold">{{ sdk.name }}</h3>
                            <Badge v-if="sdk.status === 'available'" variant="success">Available</Badge>
                            <Badge v-else variant="default">Coming Soon</Badge>
                        </div>
                        <code class="text-slate-600 font-mono text-sm block mb-4">{{ sdk.package }}</code>
                        <a v-if="sdk.link" :href="sdk.link" target="_blank" rel="noopener noreferrer" class="text-blue-600 text-sm flex items-center gap-1 hover:underline">
                            View package <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                        </a>
                        <span v-else class="text-slate-400 text-sm">Coming Q2 2026</span>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Resources -->
        <section class="section bg-slate-50">
            <div class="container-wide">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <h2 class="heading-lg mb-4">Additional Resources</h2>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
                    <a v-for="(resource, index) in resources" :key="index" :href="resource.link" target="_blank" rel="noopener noreferrer" class="group">
                        <Card variant="hover" class="p-6 h-full">
                            <div class="w-10 h-10 rounded-lg bg-blue-50 border border-blue-200 flex items-center justify-center mb-4 group-hover:bg-blue-100 transition-colors">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="resource.iconPath" /></svg>
                            </div>
                            <h3 class="text-slate-900 font-semibold mb-1 group-hover:text-blue-600 transition-colors">{{ resource.title }}</h3>
                            <p class="text-slate-600 text-sm">{{ resource.description }}</p>
                        </Card>
                    </a>
                </div>
            </div>
        </section>

        <!-- Support CTA -->
        <section class="section bg-white">
            <div class="container-wide">
                <Card class="p-8 max-w-3xl mx-auto text-center">
                    <h2 class="heading-md mb-4">Need Help Integrating?</h2>
                    <p class="text-lg text-slate-600 mb-8">Our developer relations team is here to help you build on Prex.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://discord.gg/prex-devs" target="_blank" rel="noopener noreferrer" class="btn-primary inline-flex items-center">
                            Join Developer Discord
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                        </a>
                        <a href="mailto:developers@prex.markets" class="btn-secondary">Email Dev Support</a>
                    </div>
                </Card>
            </div>
        </section>
    </div>
</template>

<script setup>
import Badge from '@/Components/Badge.vue';
import Card from '@/Components/Card.vue';
import CodeBlock from '@/Components/CodeBlock.vue';
import Tabs from '@/Components/Tabs.vue';

const flowSteps = [
    { title: 'Trade Event', description: 'User executes a trade on Prex Markets', bgColor: 'bg-blue-50', borderColor: 'border-blue-200', numBg: 'bg-blue-100', numBorder: 'border-blue-200', numText: 'text-blue-600' },
    { title: 'Reward Calc', description: 'System calculates wUSD based on volume + LossLess™', bgColor: 'bg-blue-50', borderColor: 'border-blue-200', numBg: 'bg-blue-100', numBorder: 'border-blue-200', numText: 'text-blue-600' },
    { title: 'wUSD Credit', description: 'wUSD credited to user account (subject to unlock)', bgColor: 'bg-blue-50', borderColor: 'border-blue-200', numBg: 'bg-blue-100', numBorder: 'border-blue-200', numText: 'text-blue-600' },
    { title: 'On-Platform Use', description: 'User can utilize, stake, or redeem wUSD', bgColor: 'bg-emerald-50', borderColor: 'border-emerald-200', numBg: 'bg-emerald-100', numBorder: 'border-emerald-200', numText: 'text-emerald-600' },
];

const concepts = [
    { title: 'Proof-of-Activity', description: 'wUSD is minted based on verified user activity: trading volume, referrals, and grants. Never purchased.' },
    { title: 'LossLess™ Rebates', description: '10% of realized trading losses automatically rebated as wUSD, up to caps. Softens downside.' },
    { title: 'Treasury Updates', description: '50% of protocol revenue flows to Solvency Pool continuously. Query real-time via API.' },
    { title: 'Redemption Epochs', description: 'Weekly redemption windows. Value calculated at epoch close: Pool ÷ Opting wUSD.' },
];

const quickStartTabs = [
    { id: 'curl', label: 'cURL' },
    { id: 'javascript', label: 'JavaScript' },
    { id: 'python', label: 'Python' },
];

const curlCode = `# Get current treasury status
curl https://api.prex.markets/v1/treasury/status

# Response
{
  "solvency_pool": {
    "usdt_balance": 847523.45,
    "last_updated": "2026-02-02T10:30:00Z"
  },
  "health_score": 199.4,
  "status": "healthy"
}`;

const jsCode = `// Using fetch
const response = await fetch('https://api.prex.markets/v1/treasury/status');
const data = await response.json();

console.log(\`Treasury: $\${data.solvency_pool.usdt_balance}\`);
console.log(\`Health Score: \${data.health_score}%\`);

// Using the SDK (recommended)
import { PrexAPI } from '@prex-markets/sdk';

const prex = new PrexAPI();
const treasury = await prex.treasury.getStatus();

console.log(treasury.solvencyPool.usdtBalance);`;

const pythonCode = `import requests

# Get treasury status
response = requests.get('https://api.prex.markets/v1/treasury/status')
data = response.json()

balance = data['solvency_pool']['usdt_balance']
score = data['health_score']
print(f"Treasury: $" + f"{balance:,.2f}")
print(f"Health Score: " + f"{score:.1f}%")

# Using the SDK (recommended)
from prex_markets import PrexAPI

prex = PrexAPI()
treasury = prex.treasury.get_status()

print(treasury.solvency_pool.usdt_balance)`;

const apiEndpoints = [
    { method: 'GET', path: '/v1/treasury/status', description: 'Get current treasury and solvency pool status', auth: false },
    { method: 'GET', path: '/v1/treasury/reserves', description: 'Get detailed reserve breakdown and historical data', auth: false },
    { method: 'GET', path: '/v1/wusd/supply', description: 'Get wUSD supply metrics (minted, burned, circulating)', auth: false },
    { method: 'GET', path: '/v1/wusd/redemption/value', description: 'Get current redemption value calculation', auth: false },
    { method: 'GET', path: '/v1/user/balance', description: 'Get user wUSD balance and unlock status', auth: true },
    { method: 'GET', path: '/v1/user/earnings', description: 'Get user earning history and sources', auth: true },
    { method: 'POST', path: '/v1/redemption/opt-in', description: 'Opt into the current redemption epoch', auth: true },
    { method: 'GET', path: '/v1/redemption/epochs', description: 'Get redemption epoch history and upcoming epochs', auth: false },
];

const authFeatures = [
    { iconPath: 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z', title: 'Secure by Default', description: 'All requests use HTTPS. API keys are scoped to specific permissions.' },
    { iconPath: 'M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z', title: 'Easy Key Management', description: 'Generate, rotate, and revoke keys from your dashboard.' },
    { iconPath: 'M13 10V3L4 14h7v7l9-11h-7z', title: 'Rate Limiting', description: 'Public: 100 req/min. Authenticated: 1000 req/min.' },
];

const authCode = `// Include your API key in the Authorization header
const response = await fetch(
  'https://api.prex.markets/v1/user/balance',
  {
    headers: {
      'Authorization': 'Bearer YOUR_API_KEY',
      'Content-Type': 'application/json'
    }
  }
);

const data = await response.json();

// Response
{
  "user_id": "usr_abc123",
  "wusd_balance": {
    "total": 5000.00,
    "unlocked": 2500.00,
    "locked": 2500.00,
    "eligible_for_redemption": 1250.00
  },
  "unlock_progress": {
    "percentage": 50,
    "next_milestone": "volume_tier",
    "next_unlock_amount": 1250.00
  }
}`;

const webhooks = [
    { event: 'treasury.updated', description: 'Fired when treasury balance changes significantly', status: 'available' },
    { event: 'redemption.epoch_started', description: 'Fired when a new redemption epoch opens', status: 'available' },
    { event: 'redemption.epoch_ended', description: 'Fired when redemption epoch closes with final values', status: 'available' },
    { event: 'wusd.large_burn', description: 'Fired when a significant burn event occurs', status: 'coming_soon' },
    { event: 'user.wusd_earned', description: 'Fired when a user earns wUSD (requires user auth)', status: 'coming_soon' },
    { event: 'user.unlock_milestone', description: 'Fired when a user hits an unlock milestone', status: 'coming_soon' },
];

const webhookPayload = `{
  "event": "redemption.epoch_ended",
  "timestamp": "2026-02-08T00:00:00Z",
  "data": {
    "epoch_id": "epoch_2026_06",
    "total_opted_in": 425000,
    "solvency_pool_at_close": 847523.45,
    "redemption_value": 1.9942,
    "total_redeemed_usdt": 847523.45
  }
}`;

const sdks = [
    { name: 'JavaScript/TypeScript', package: '@prex-markets/sdk', status: 'available', link: 'https://www.npmjs.com/package/@prex-markets/sdk' },
    { name: 'Python', package: 'prex-markets', status: 'available', link: 'https://pypi.org/project/prex-markets/' },
    { name: 'Go', package: 'github.com/prex-markets/go-sdk', status: 'coming_soon', link: null },
];

const resources = [
    { iconPath: 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', title: 'Documentation', description: 'Comprehensive guides and tutorials', link: 'https://docs.prex.markets' },
    { iconPath: 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4', title: 'API Playground', description: 'Interactive API explorer', link: 'https://api.prex.markets/playground' },
    { iconPath: 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', title: 'OpenAPI Spec', description: 'Download the full OpenAPI specification', link: 'https://api.prex.markets/openapi.json' },
    { iconPath: 'M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z', title: 'Example Apps', description: 'Sample integrations and use cases', link: 'https://github.com/prex-markets/examples' },
];
</script>

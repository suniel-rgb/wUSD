<template>
    <div class="pt-20">
        <!-- Hero Section -->
        <section class="section bg-white relative overflow-hidden">
            <div class="absolute inset-0 bg-grid opacity-40" />
            <div class="absolute inset-0 bg-gradient-to-b from-blue-50/30 to-transparent" />
            <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-blue-100/50 rounded-full blur-3xl" />

            <div class="container-wide relative z-10">
                <div class="max-w-4xl">
                    <Badge variant="pusd" class="mb-6">
                        <svg class="w-3 h-3 mr-1 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        Zero Cost Basis
                    </Badge>
                    <h1 class="heading-xl mb-6">
                        Earn <span class="text-gradient-pusd">wUSD</span>
                    </h1>
                    <p class="text-xl text-slate-600 mb-8 leading-relaxed">
                        Earned through activity, never purchased. Trader, referrer, or builder—there's a path for you. Zero cost basis.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#traders" class="btn-primary">I'm a Trader</a>
                        <a href="#referrers" class="btn-secondary">I'm a Referrer</a>
                        <a href="#builders" class="btn-ghost">I'm a Builder</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Overview -->
        <section class="section-sm bg-slate-50">
            <div class="container-wide">
                <div class="grid md:grid-cols-3 gap-6">
                    <a v-for="(persona, index) in personas" :key="index" :href="persona.anchor" class="group">
                        <Card variant="hover" class="p-6 h-full">
                            <div :class="['w-12 h-12 rounded-xl border flex items-center justify-center mb-4 group-hover:scale-110 transition-transform', persona.iconBg, persona.iconBorder]">
                                <svg class="w-6 h-6" :class="persona.iconColor" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="persona.iconPath" /></svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 mb-1">{{ persona.title }}</h3>
                            <p class="text-slate-600 text-sm mb-3">{{ persona.subtitle }}</p>
                            <div class="flex items-center gap-2 text-sm">
                                <span :class="persona.iconColor">Learn more</span>
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" :class="persona.iconColor" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </div>
                        </Card>
                    </a>
                </div>
            </div>
        </section>

        <!-- Traders Section -->
        <section id="traders" class="section bg-white">
            <div class="container-wide">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8 mb-12">
                    <div class="max-w-2xl">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-14 h-14 rounded-xl bg-blue-50 border border-blue-200 flex items-center justify-center">
                                <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                            </div>
                            <div>
                                <Badge variant="prex">Earn while you trade</Badge>
                                <h2 class="text-3xl font-bold text-slate-900 mt-1">For Traders</h2>
                            </div>
                        </div>
                        <p class="text-lg text-slate-600">
                            Active traders earn wUSD through trading volume and LossLess™ protection.
                            The more you trade, the more you earn—with built-in downside protection.
                        </p>
                    </div>
                    <div class="flex gap-4">
                        <div class="text-center px-6 py-4 bg-slate-50 border border-slate-200 rounded-xl">
                            <div class="text-2xl font-bold text-blue-600">100 wUSD</div>
                            <div class="text-xs text-slate-600 mt-1">Signup Allocation</div>
                        </div>
                        <div class="text-center px-6 py-4 bg-slate-50 border border-slate-200 rounded-xl">
                            <div class="text-2xl font-bold text-blue-600">Up to 10%</div>
                            <div class="text-xs text-slate-600 mt-1">LossLess™ Rebate</div>
                        </div>
                        <div class="text-center px-6 py-4 bg-slate-50 border border-slate-200 rounded-xl">
                            <div class="text-2xl font-bold text-blue-600">3 months</div>
                            <div class="text-xs text-slate-600 mt-1">Redemption Cliff</div>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-5 gap-4 mb-12">
                    <Card v-for="(step, index) in traderSteps" :key="index" class="p-5 relative">
                        <div class="absolute -top-3 -left-3 w-8 h-8 rounded-full bg-blue-100 border border-blue-200 flex items-center justify-center text-blue-600 text-sm font-bold">{{ index + 1 }}</div>
                        <div class="w-10 h-10 rounded-lg bg-blue-50 border border-blue-200 flex items-center justify-center mb-3 mt-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="step.iconPath" /></svg>
                        </div>
                        <h4 class="text-slate-900 font-semibold mb-2 text-sm">{{ step.title }}</h4>
                        <p class="text-slate-600 text-xs leading-relaxed">{{ step.description }}</p>
                        <div v-if="index < traderSteps.length - 1" class="hidden lg:block absolute top-1/2 -right-2 transform -translate-y-1/2">
                            <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </div>
                    </Card>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <Card class="p-6 border-blue-200">
                        <h4 class="text-slate-900 font-semibold mb-3 flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                            Best For
                        </h4>
                        <p class="text-slate-600 text-sm">Active traders who want to be rewarded for their activity while having downside protection.</p>
                    </Card>
                    <Card class="p-6 border-blue-200">
                        <h4 class="text-slate-900 font-semibold mb-3 flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" /></svg>
                            Redemption Strategy
                        </h4>
                        <p class="text-slate-600 text-sm">Most traders prefer the USDT redemption path for stable, predictable returns—especially if they need liquidity. Long-term believers may wait for PREX conversion for potential upside.</p>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Referrers Section -->
        <section id="referrers" class="section bg-slate-50">
            <div class="container-wide">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8 mb-12">
                    <div class="max-w-2xl">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-14 h-14 rounded-xl bg-blue-50 border border-blue-200 flex items-center justify-center">
                                <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                            </div>
                            <div>
                                <Badge variant="pusd">Build your network, earn passively</Badge>
                                <h2 class="text-3xl font-bold text-slate-900 mt-1">For Referrers</h2>
                            </div>
                        </div>
                        <p class="text-lg text-slate-600">
                            Community builders earn wUSD from their referral network's activity—up to 5 levels deep. Build once, earn continuously.
                        </p>
                    </div>
                    <div class="flex gap-4">
                        <div class="text-center px-6 py-4 bg-white border border-slate-200 rounded-xl shadow-sm">
                            <div class="text-2xl font-bold text-blue-600">5 Levels</div>
                            <div class="text-xs text-slate-600 mt-1">Referral Depth</div>
                        </div>
                        <div class="text-center px-6 py-4 bg-white border border-slate-200 rounded-xl shadow-sm">
                            <div class="text-2xl font-bold text-blue-600">10 wUSD</div>
                            <div class="text-xs text-slate-600 mt-1">Per L1 Signup</div>
                        </div>
                        <div class="text-center px-6 py-4 bg-white border border-slate-200 rounded-xl shadow-sm">
                            <div class="text-2xl font-bold text-blue-600">Unlimited</div>
                            <div class="text-xs text-slate-600 mt-1">No Referral Cap</div>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-5 gap-4 mb-12">
                    <Card v-for="(step, index) in referrerSteps" :key="index" class="p-5 relative">
                        <div class="absolute -top-3 -left-3 w-8 h-8 rounded-full bg-blue-100 border border-blue-200 flex items-center justify-center text-blue-600 text-sm font-bold">{{ index + 1 }}</div>
                        <div class="w-10 h-10 rounded-lg bg-blue-50 border border-blue-200 flex items-center justify-center mb-3 mt-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="step.iconPath" /></svg>
                        </div>
                        <h4 class="text-slate-900 font-semibold mb-2 text-sm">{{ step.title }}</h4>
                        <p class="text-slate-600 text-xs leading-relaxed">{{ step.description }}</p>
                        <div v-if="index < referrerSteps.length - 1" class="hidden lg:block absolute top-1/2 -right-2 transform -translate-y-1/2">
                            <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </div>
                    </Card>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <Card class="p-6 border-blue-200">
                        <h4 class="text-slate-900 font-semibold mb-3 flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                            Best For
                        </h4>
                        <p class="text-slate-600 text-sm">Content creators, community leaders, and anyone with an audience interested in prediction markets.</p>
                    </Card>
                    <Card class="p-6 border-blue-200">
                        <h4 class="text-slate-900 font-semibold mb-3 flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" /></svg>
                            Redemption Strategy
                        </h4>
                        <p class="text-slate-600 text-sm">Referrers often prefer PREX conversion for growth exposure—their zero cost basis means any appreciation is pure upside. Those needing liquidity use USDT path.</p>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Builders Section -->
        <section id="builders" class="section bg-white">
            <div class="container-wide">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8 mb-12">
                    <div class="max-w-2xl">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-14 h-14 rounded-xl bg-emerald-50 border border-emerald-200 flex items-center justify-center">
                                <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
                            </div>
                            <div>
                                <Badge variant="success">Get funded to build</Badge>
                                <h2 class="text-3xl font-bold text-slate-900 mt-1">For Builders</h2>
                            </div>
                        </div>
                        <p class="text-lg text-slate-600">
                            Developers, content creators, and community contributors can receive Ignite Grants—milestone-vested wUSD for building on Prex.
                        </p>
                    </div>
                    <div class="flex gap-4">
                        <div class="text-center px-6 py-4 bg-slate-50 border border-slate-200 rounded-xl">
                            <div class="text-2xl font-bold text-emerald-600">Milestone-based</div>
                            <div class="text-xs text-slate-600 mt-1">Vesting</div>
                        </div>
                        <div class="text-center px-6 py-4 bg-slate-50 border border-slate-200 rounded-xl">
                            <div class="text-2xl font-bold text-emerald-600">10K-100K wUSD</div>
                            <div class="text-xs text-slate-600 mt-1">Typical Grant</div>
                        </div>
                        <div class="text-center px-6 py-4 bg-slate-50 border border-slate-200 rounded-xl">
                            <div class="text-2xl font-bold text-emerald-600">Open to all</div>
                            <div class="text-xs text-slate-600 mt-1">Application</div>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-5 gap-4 mb-12">
                    <Card v-for="(step, index) in builderSteps" :key="index" class="p-5 relative">
                        <div class="absolute -top-3 -left-3 w-8 h-8 rounded-full bg-emerald-100 border border-emerald-200 flex items-center justify-center text-emerald-600 text-sm font-bold">{{ index + 1 }}</div>
                        <div class="w-10 h-10 rounded-lg bg-emerald-50 border border-emerald-200 flex items-center justify-center mb-3 mt-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="step.iconPath" /></svg>
                        </div>
                        <h4 class="text-slate-900 font-semibold mb-2 text-sm">{{ step.title }}</h4>
                        <p class="text-slate-600 text-xs leading-relaxed">{{ step.description }}</p>
                        <div v-if="index < builderSteps.length - 1" class="hidden lg:block absolute top-1/2 -right-2 transform -translate-y-1/2">
                            <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </div>
                    </Card>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <Card class="p-6 border-emerald-200">
                        <h4 class="text-slate-900 font-semibold mb-3 flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                            Best For
                        </h4>
                        <p class="text-slate-600 text-sm">Developers building tools, content creators, analysts, and community organizers who want to be compensated for their contributions.</p>
                    </Card>
                    <Card class="p-6 border-emerald-200">
                        <h4 class="text-slate-900 font-semibold mb-3 flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" /></svg>
                            Redemption Strategy
                        </h4>
                        <p class="text-slate-600 text-sm">Builders tend to prefer PREX conversion—their contributions directly impact Prex's success, so they benefit from aligned incentives. Those with immediate needs use USDT.</p>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Common Principles -->
        <section class="section bg-slate-50">
            <div class="container-wide">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <Badge variant="prex" class="mb-4">Universal</Badge>
                    <h2 class="heading-lg mb-4">
                        Principles That Apply to <span class="text-gradient">Everyone</span>
                    </h2>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
                    <Card v-for="(principle, index) in principles" :key="index" variant="hover" class="p-6 text-center">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 border border-blue-200 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="principle.iconPath" /></svg>
                        </div>
                        <h4 class="text-slate-900 font-semibold mb-2">{{ principle.title }}</h4>
                        <p class="text-slate-600 text-sm">{{ principle.description }}</p>
                    </Card>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="section bg-white">
            <div class="container-wide">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="heading-lg mb-4">
                        Start Earning <span class="text-gradient-pusd">Today</span>
                    </h2>
                    <p class="text-lg text-slate-600 mb-8">
                        Create your Prex account and start earning wUSD immediately.
                        Your first allocation unlocks the moment you sign up.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://app.prex.markets" class="btn-primary btn-lg group inline-flex items-center">
                            Create Account
                            <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </a>
                        <Link href="/how-it-works" class="btn-secondary btn-lg">Learn Mechanics</Link>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import Badge from '@/Components/Badge.vue';
import Card from '@/Components/Card.vue';

const personas = [
    { anchor: '#traders', title: 'For Traders', subtitle: 'Earn while you trade', iconPath: 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6', iconBg: 'bg-blue-50', iconBorder: 'border-blue-200', iconColor: 'text-blue-600' },
    { anchor: '#referrers', title: 'For Referrers', subtitle: 'Build your network, earn passively', iconPath: 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z', iconBg: 'bg-blue-50', iconBorder: 'border-blue-200', iconColor: 'text-blue-600' },
    { anchor: '#builders', title: 'For Builders', subtitle: 'Get funded to build', iconPath: 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z', iconBg: 'bg-emerald-50', iconBorder: 'border-emerald-200', iconColor: 'text-emerald-600' },
];

const traderSteps = [
    { iconPath: 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', title: 'Trade on Prex Markets', description: 'Execute trades on prediction markets. Every trade generates volume that earns you wUSD rewards.' },
    { iconPath: 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1', title: 'Unlock via Golden Ratio', description: 'Your 100 wUSD signup allocation unlocks 1:1 with trading volume. Trade $100 to unlock all 100 wUSD.' },
    { iconPath: 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z', title: 'LossLess™ Protection', description: 'If you close a position at a loss, automatically receive up to 10% back in wUSD (max 10 wUSD per event, 100 wUSD lifetime).' },
    { iconPath: 'M13 10V3L4 14h7v7l9-11h-7z', title: 'Unlock & Accumulate', description: 'Your wUSD unlocks progressively (10% → 25% → 50% → 100%) as you hit activity milestones.' },
    { iconPath: 'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z', title: 'Redeem or Utilize', description: 'After 3-month cliff: redeem for USDT, convert to PREX, or use in the wUSD ecosystem.' },
];

const referrerSteps = [
    { iconPath: 'M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7', title: 'Get Your Referral Link', description: 'Access your unique referral link from your Prex dashboard. Share it with friends, followers, or community.' },
    { iconPath: 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z', title: 'Build Your Network', description: 'When someone signs up through your link, they become your Level 1 referral. Their referrals become your Level 2, and so on.' },
    { iconPath: 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6', title: 'Earn on 5 Levels', description: 'L1: 10 wUSD • L2: 5 wUSD • L3: 3 wUSD • L4: 2 wUSD • L5: 1 wUSD per signup at each level.' },
    { iconPath: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', title: 'No Caps on Referrals', description: "Unlike LossLess™, there's no cap on referral earnings. The bigger your network, the more you earn." },
    { iconPath: 'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z', title: 'Stack Redemption Value', description: 'Your referral wUSD has the same redemption rights. Large networks can accumulate significant value.' },
];

const builderSteps = [
    { iconPath: 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z', title: 'Apply for Ignite Grant', description: 'Submit a proposal for your project: tools, integrations, content, community initiatives, or ecosystem contributions.' },
    { iconPath: 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', title: 'Get Approved & Funded', description: 'If approved, receive a wUSD grant allocation with milestone-based vesting (typically 25% per milestone).' },
    { iconPath: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', title: 'Deliver Milestones', description: 'Complete your deliverables. Each milestone unlocks a portion of your grant allocation.' },
    { iconPath: 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1', title: 'Stack with Other Earnings', description: 'Grant wUSD stacks with any trading or referral earnings. Build AND earn from your own usage.' },
    { iconPath: 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6', title: 'Long-term Alignment', description: "Most builders prefer PREX conversion—success of their project often correlates with PREX value." },
];

const principles = [
    { iconPath: 'M13 10V3L4 14h7v7l9-11h-7z', title: 'Zero Cost Basis', description: 'Every wUSD you earn costs you nothing. Any positive redemption value is pure gain.' },
    { iconPath: 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', title: '3-Month Cliff', description: 'All wUSD must mature 3 months before USDT redemption. Plan accordingly.' },
    { iconPath: 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z', title: 'Treasury-Backed', description: 'Your wUSD is backed by real protocol revenue, not inflationary emissions.' },
    { iconPath: 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6', title: 'Stack & Compound', description: 'Trading, referral, and grant earnings all stack. Multiple streams compound.' },
];
</script>

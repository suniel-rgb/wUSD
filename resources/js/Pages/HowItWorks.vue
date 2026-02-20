<template>
    <div class="pt-20">
        <!-- Hero Section -->
        <section class="section bg-white relative overflow-hidden">
            <div class="absolute inset-0 bg-grid opacity-40" />
            <div class="absolute inset-0 bg-gradient-to-b from-blue-50/30 to-transparent" />
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-100/40 rounded-full blur-3xl" />
            <div class="container-wide relative z-10">
                <div class="max-w-4xl">
                    <Badge variant="pusd" class="mb-6">Complete Guide</Badge>
                    <h1 class="heading-xl mb-6">How <span class="text-gradient-pusd">wUSD</span> Works</h1>
                    <p class="text-xl text-slate-600 mb-8 leading-relaxed">
                        An algorithmic reward asset earned through trading. Backed by protocol revenue. Redeemable for USDT or PREX.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#earning" class="btn-primary inline-flex items-center">How to Earn <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg></a>
                        <Link href="/transparency" class="btn-secondary">View Treasury</Link>
                    </div>
                </div>
            </div>
        </section>

        <!-- At a Glance -->
        <section class="section bg-slate-50">
            <div class="container-wide">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <Badge variant="prex" class="mb-4">At a Glance</Badge>
                    <h2 class="heading-lg mb-6">wUSD in <span class="text-gradient">30 Seconds</span></h2>
                </div>
                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <Card variant="hover" class="p-8 text-center">
                        <div class="w-16 h-16 rounded-2xl bg-blue-50 border border-blue-200 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Earned, Not Bought</h3>
                        <p class="text-slate-600">Minted through trading, referrals, and grants. Never sold. Zero cost basis.</p>
                    </Card>
                    <Card variant="hover" class="p-8 text-center">
                        <div class="w-16 h-16 rounded-2xl bg-blue-50 border border-blue-200 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /></svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Treasury-Backed</h3>
                        <p class="text-slate-600">50% of protocol fees flow to the Solvency Pool. Real revenue, not emissions.</p>
                    </Card>
                    <Card variant="hover" class="p-8 text-center">
                        <div class="w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <img src="/images/tether-logo-transparent.png" alt="USDT" class="w-14 h-14 object-contain" />
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Real Redemption</h3>
                        <p class="text-slate-600">Redeem for USDT (3-month cliff) or convert to PREX 1:1 at $1B FDV.</p>
                    </Card>
                </div>
                <Card class="p-6 border-amber-200 bg-amber-50 max-w-4xl mx-auto">
                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 text-amber-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" /></svg>
                        <div>
                            <h4 class="text-slate-900 font-semibold mb-2">wUSD is an Algorithmic Treasury-Backed Token</h4>
                            <p class="text-slate-600 text-sm">Unlike USDC or USDT, wUSD does not maintain a 1:1 USD peg. Its redemption value is <strong class="text-slate-900">dynamic</strong>, determined by treasury health and redemption demand. Since you earn it (not buy it), your risk is opportunity cost, not principal loss.</p>
                        </div>
                    </div>
                </Card>
            </div>
        </section>

        <!-- How You Earn -->
        <section id="earning" class="section bg-white">
            <div class="container-wide">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <Badge variant="pusd" class="mb-4">Proof-of-Activity</Badge>
                    <h2 class="heading-lg mb-6">How You <span class="text-gradient-pusd">Earn wUSD</span></h2>
                    <p class="text-lg text-slate-600">Minted through verified activity. Never purchased. Zero cost basis.</p>
                </div>
                <div class="grid lg:grid-cols-2 gap-8 mb-12">
                    <div class="space-y-4">
                        <Card v-for="(method, index) in earnMethods" :key="index" variant="hover" class="p-5">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-blue-50 border border-blue-200 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="method.iconPath" /></svg>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-1">
                                        <h3 class="text-slate-900 font-semibold">{{ method.title }}</h3>
                                        <Badge variant="pusd" size="sm">{{ method.badge }}</Badge>
                                    </div>
                                    <p class="text-slate-600 text-sm mb-2">{{ method.description }}</p>
                                    <p class="text-slate-600 text-xs font-mono bg-slate-100 px-2 py-1 rounded">{{ method.detail }}</p>
                                </div>
                            </div>
                        </Card>
                    </div>
                    <div>
                        <Card class="p-8">
                            <h3 class="text-xl font-semibold text-slate-900 mb-6 flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" /></svg>
                                Unlock Schedule
                            </h3>
                            <p class="text-slate-600 mb-6">Earned wUSD unlocks progressively as you demonstrate genuine engagement. This prevents gaming and aligns incentives.</p>
                            <div class="space-y-4 mb-8">
                                <div class="p-4 bg-blue-50 border border-blue-200 rounded-xl">
                                    <h4 class="text-slate-900 font-semibold mb-2">Golden Ratio Unlock</h4>
                                    <p class="text-slate-600 text-sm mb-3">Your 100 wUSD signup allocation unlocks 1:1 with your trading volume.</p>
                                    <div class="grid grid-cols-3 gap-3 text-center">
                                        <div class="p-2 bg-white rounded-lg"><div class="text-lg font-bold text-blue-600">100</div><div class="text-xs text-slate-600">wUSD credited</div></div>
                                        <div class="p-2 bg-white rounded-lg"><div class="text-lg font-bold text-blue-600">1:1</div><div class="text-xs text-slate-600">unlock ratio</div></div>
                                        <div class="p-2 bg-white rounded-lg"><div class="text-lg font-bold text-blue-600">$100</div><div class="text-xs text-slate-600">to fully unlock</div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 bg-blue-50 border border-blue-200 rounded-xl">
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-blue-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    <div>
                                        <h4 class="text-slate-900 font-semibold mb-1">3-Month Cliff for Redemption</h4>
                                        <p class="text-slate-600 text-sm">Even after 100% unlock, wUSD must be held 3 months from mint date before becoming eligible for USDT redemption (Path A).</p>
                                    </div>
                                </div>
                            </div>
                        </Card>
                    </div>
                </div>
            </div>
        </section>

        <!-- Where the Money Comes From -->
        <section class="section bg-slate-50">
            <div class="container-wide">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <Badge variant="prex" class="mb-4">Treasury</Badge>
                    <h2 class="heading-lg mb-6">Where the <span class="text-gradient">Money</span> Comes From</h2>
                    <p class="text-lg text-slate-600">Real protocol revenue, not inflation. Here's how fees flow.</p>
                </div>
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-6">Revenue Sources</h3>
                        <div class="space-y-4">
                            <div v-for="(item, index) in revenueSources" :key="index" class="flex items-center gap-4 p-4 bg-white border border-slate-200 rounded-xl shadow-sm">
                                <div class="w-10 h-10 rounded-lg bg-blue-50 border border-blue-200 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="item.iconPath" /></svg>
                                </div>
                                <div><div class="text-slate-900 font-medium">{{ item.source }}</div><div class="text-slate-600 text-sm">{{ item.desc }}</div></div>
                            </div>
                        </div>
                    </div>
                    <Card class="p-8">
                        <h3 class="text-xl font-semibold text-slate-900 mb-6">50/50 Revenue Split</h3>
                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <div class="w-20 h-20 rounded-2xl bg-blue-100 border border-blue-200 flex items-center justify-center"><span class="text-3xl font-bold text-blue-600">50%</span></div>
                                <div><div class="text-slate-900 font-semibold mb-1">Solvency Pool (Treasury)</div><p class="text-slate-600 text-sm">Backs wUSD redemptions. Grows continuously from protocol revenue.</p></div>
                            </div>
                            <div class="h-px bg-slate-200" />
                            <div class="flex items-center gap-4">
                                <div class="w-20 h-20 rounded-2xl bg-blue-100 border border-blue-200 flex items-center justify-center"><span class="text-3xl font-bold text-blue-600">50%</span></div>
                                <div><div class="text-slate-900 font-semibold mb-1">Affiliates & Community</div><p class="text-slate-600 text-sm">Distributed as wUSD rewards through Proof-of-Activity mechanisms.</p></div>
                            </div>
                        </div>
                        <div class="mt-6 p-4 bg-slate-50 border border-slate-200 rounded-xl">
                            <p class="text-slate-600 text-sm"><strong class="text-slate-900">No inflation.</strong> wUSD is only minted when backed by actual revenue—not printed from thin air.</p>
                        </div>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Redemption Paths -->
        <section id="redemption" class="section bg-white">
            <div class="container-wide">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <Badge variant="pusd" class="mb-4">Exit Options</Badge>
                    <h2 class="heading-lg mb-6">How You <span class="text-gradient-pusd">Redeem wUSD</span></h2>
                    <p class="text-lg text-slate-600">Two distinct paths: stable value via USDT redemption, or growth potential via PREX conversion.</p>
                </div>
                <div class="grid lg:grid-cols-2 gap-8">
                    <!-- Path A -->
                    <Card class="p-8 border-blue-200">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-14 h-14 flex items-center justify-center"><img src="/images/tether-logo-transparent.png" alt="USDT" class="w-12 h-12 object-contain" /></div>
                            <div><Badge variant="prex">Path A</Badge><h3 class="text-2xl font-bold text-slate-900 mt-1">USDT Redemption</h3></div>
                        </div>
                        <div class="space-y-4 mb-6">
                            <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl">
                                <div class="grid grid-cols-2 gap-4">
                                    <div><div class="text-slate-600 text-xs mb-1">Cliff Period</div><div class="text-slate-900 font-semibold">3 Months</div></div>
                                    <div><div class="text-slate-600 text-xs mb-1">Redemption Window</div><div class="text-slate-900 font-semibold">Weekly Epochs</div></div>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div v-for="(step, index) in pathASteps" :key="index" class="flex items-center gap-3">
                                    <div class="w-6 h-6 rounded-full bg-blue-100 border border-blue-200 flex items-center justify-center text-blue-600 text-xs font-bold">{{ index + 1 }}</div>
                                    <span class="text-slate-700 text-sm">{{ step }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-blue-50 border border-blue-200 rounded-xl mb-4">
                            <div class="text-sm text-slate-600 mb-1">Redemption Formula</div>
                            <div class="font-mono text-blue-600">Value = Pool USDT ÷ Redeeming wUSD</div>
                        </div>
                        <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl">
                            <div class="text-slate-600 text-sm"><strong class="text-slate-900">Game Theory:</strong> If treasury grows faster than redemptions, per-wUSD value increases. Early believers may benefit from patience.</div>
                        </div>
                    </Card>
                    <!-- Path B -->
                    <Card class="p-8 border-blue-200">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-14 h-14 flex items-center justify-center"><img src="/images/prex-logo-transparent.png" alt="PREX" class="w-12 h-12 object-contain" /></div>
                            <div><Badge variant="pusd">Path B</Badge><h3 class="text-2xl font-bold text-slate-900 mt-1">PREX Conversion</h3></div>
                        </div>
                        <div class="space-y-4 mb-6">
                            <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl">
                                <div class="grid grid-cols-2 gap-4">
                                    <div><div class="text-slate-600 text-xs mb-1">FDV Trigger</div><div class="text-slate-900 font-semibold">$1 Billion</div></div>
                                    <div><div class="text-slate-600 text-xs mb-1">Vesting Period</div><div class="text-slate-900 font-semibold">6 Months Linear</div></div>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div v-for="(step, index) in pathBSteps" :key="index" class="flex items-center gap-3">
                                    <div class="w-6 h-6 rounded-full bg-blue-100 border border-blue-200 flex items-center justify-center text-blue-600 text-xs font-bold">{{ index + 1 }}</div>
                                    <span class="text-slate-700 text-sm">{{ step }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-blue-50 border border-blue-200 rounded-xl mb-4">
                            <div class="text-sm text-slate-600 mb-1">Treasury Protection</div>
                            <div class="text-blue-600 font-medium">30% cap auto-suspends conversions • Re-enables as reserves replenish</div>
                        </div>
                        <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl">
                            <div class="text-slate-600 text-sm"><strong class="text-slate-900">Upside Potential:</strong> If PREX appreciates during the 6-month vest, your effective value increases. Zero cost basis + growth exposure.</div>
                        </div>
                    </Card>
                </div>
            </div>
        </section>

        <!-- LossLess -->
        <section id="lossless" class="section bg-slate-50">
            <div class="container-wide">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-12">
                        <Badge variant="success" class="mb-4">Safety Net</Badge>
                        <h2 class="heading-lg mb-4"><span class="text-gradient">LossLess™</span> Protection</h2>
                        <p class="text-lg text-slate-600">A unique mechanism that automatically rebates 10% of your trading losses in wUSD.</p>
                    </div>
                    <Card class="p-8">
                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-4">How It Works</h3>
                                <ol class="space-y-4">
                                    <li v-for="(step, index) in losslessSteps" :key="index" class="flex items-start gap-3">
                                        <div class="w-6 h-6 rounded-full bg-emerald-100 border border-emerald-200 flex items-center justify-center text-emerald-600 text-xs font-bold flex-shrink-0">{{ index + 1 }}</div>
                                        <span class="text-slate-700">{{ step }}</span>
                                    </li>
                                </ol>
                                <div class="mt-6 p-4 bg-slate-50 border border-slate-200 rounded-xl">
                                    <h4 class="text-slate-900 font-semibold mb-2">Cap Limits</h4>
                                    <ul class="text-slate-600 text-sm space-y-1">
                                        <li>• Per-event cap: <span class="text-slate-900">10 wUSD</span></li>
                                        <li>• Lifetime cap: <span class="text-slate-900">100 wUSD per user</span></li>
                                        <li>• Rebate rate: <span class="text-slate-900">1 wUSD per $1 loss</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-4">Example</h3>
                                <div class="space-y-4">
                                    <div class="p-4 bg-red-50 border border-red-200 rounded-xl"><div class="text-red-600 text-sm mb-1">Trading Loss</div><div class="text-2xl font-bold text-slate-900">-$500 USDT</div></div>
                                    <div class="flex justify-center"><svg class="w-5 h-5 text-slate-400 rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg></div>
                                    <div class="p-4 bg-emerald-50 border border-emerald-200 rounded-xl"><div class="text-emerald-600 text-sm mb-1">LossLess™ Rebate (10%)</div><div class="text-2xl font-bold text-slate-900">+50 wUSD</div></div>
                                </div>
                            </div>
                        </div>
                    </Card>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="section bg-slate-50">
            <div class="container-wide">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="heading-lg mb-4">Ready to Start Earning?</h2>
                    <p class="text-lg text-slate-600 mb-8">Trade on Prex Markets. Earn wUSD. Zero cost basis.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://app.prex.markets" class="btn-primary btn-lg group inline-flex items-center">Start Earning <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg></a>
                        <Link href="/transparency" class="btn-secondary btn-lg">View Treasury</Link>
                        <Link href="/faq" class="btn-ghost btn-lg">Read FAQ</Link>
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

const earnMethods = [
    { iconPath: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z', title: 'Account Creation Allocation', description: '100 wUSD credited on signup, unlocks via the Golden Ratio as you trade.', detail: '100 wUSD locked → 1 wUSD unlocked per $1 trading volume → Max 100 wUSD', badge: 'Auto-credited' },
    { iconPath: 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z', title: 'LossLess™ 10% Rebate', description: 'Automatically receive up to 10% of realized trading losses back in wUSD.', detail: '1 wUSD per $1 loss • Max 10 wUSD per event • 100 wUSD lifetime cap', badge: 'Protection' },
    { iconPath: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z', title: '5-Level Referral Network', description: 'Earn fixed wUSD for every signup across 5 levels.', detail: 'L1: 10 wUSD • L2: 5 wUSD • L3: 3 wUSD • L4: 2 wUSD • L5: 1 wUSD per signup', badge: 'Network' },
    { iconPath: 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z', title: 'Ignite Grants', description: 'Community builders and content creators receive milestone-vested wUSD grants.', detail: '25% on approval, 75% vests on milestone completion', badge: 'Builders' },
];

const revenueSources = [
    { iconPath: 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', source: 'Trading Fees', desc: 'Fees on every trade executed on Prex Markets' },
    { iconPath: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', source: 'Subscription Revenue', desc: 'Prex Pro and institutional subscriptions' },
    { iconPath: 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z', source: 'Marketplace Fees', desc: 'Fees from tools, signals, and premium features' },
];

const pathASteps = ['wUSD must be 3+ months from mint date', 'Opt into weekly redemption epoch', 'Value calculated: Pool USDT ÷ Opting wUSD', 'USDT sent within 48 hours of epoch close'];
const pathBSteps = ['PREX token reaches $1B FDV', 'Convert wUSD to PREX at 1:1 ratio', 'PREX vests linearly over 6 months', '30% treasury cap with auto-lock/reopen'];
const losslessSteps = ['You close a position with a realized loss', 'System calculates 10% of the loss amount', 'wUSD is automatically credited to your account', 'Subject to per-event, monthly, and lifetime caps'];
</script>

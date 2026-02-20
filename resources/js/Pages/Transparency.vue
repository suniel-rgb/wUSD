<template>
    <div class="pt-20">
        <!-- Hero -->
        <GeometricBackground variant="hero" color-scheme="blue">
            <section class="section relative overflow-hidden">
                <div class="container-wide relative z-10">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div class="max-w-xl">
                            <Badge variant="prex" class="mb-6">Full Transparency</Badge>
                            <h1 class="heading-xl mb-6">Reserves & <span class="text-gradient">Solvency</span></h1>
                            <p class="text-xl text-slate-600 mb-8 leading-relaxed">Real-time data on treasury, supply, and redemption value. No black boxes.</p>
                        </div>
                        <div class="hidden lg:flex justify-center">
                            <EcosystemOrbit variant="treasury" size="lg" animated />
                        </div>
                    </div>
                </div>
            </section>
        </GeometricBackground>

        <!-- Live Metrics -->
        <section class="section bg-slate-50">
            <div class="container-wide">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <h2 class="heading-lg mb-4">Live <span class="text-gradient">Metrics</span></h2>
                    <p class="text-lg text-slate-600">Updated in real-time from on-chain data.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <StatCard value="$2.5M" label="Solvency Pool (USDT)" variant="prex" size="large" />
                    <StatCard value="12.4M" label="wUSD in Circulation" variant="pusd" size="large" />
                    <StatCard value="$0.20" label="Implied Redemption Value" variant="default" size="large" />
                    <StatCard value="8.2M" label="wUSD Eligible for Redemption" variant="default" size="large" />
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <Card class="p-6 text-center"><div class="text-2xl font-bold text-slate-900 mb-1">50/50</div><div class="text-sm text-slate-600">Revenue Split (Treasury / Community)</div></Card>
                    <Card class="p-6 text-center"><div class="text-2xl font-bold text-slate-900 mb-1">3 Months</div><div class="text-sm text-slate-600">Redemption Cliff Period</div></Card>
                    <Card class="p-6 text-center"><div class="text-2xl font-bold text-slate-900 mb-1">Weekly</div><div class="text-sm text-slate-600">Redemption Epoch Frequency</div></Card>
                </div>
            </div>
        </section>

        <!-- How Solvency Works -->
        <section class="section bg-white">
            <div class="container-wide">
                <div class="grid lg:grid-cols-2 gap-12 items-start">
                    <div>
                        <Badge variant="prex" class="mb-4">Treasury Mechanics</Badge>
                        <h2 class="heading-lg mb-6">How the Solvency Pool Works</h2>
                        <p class="text-lg text-slate-600 mb-8">The Solvency Pool is the USDT reserve that backs wUSD redemptions. It grows through protocol revenue and is protected by the 3-month cliff and redemption epoch system.</p>
                        <div class="space-y-6">
                            <div v-for="(item, index) in solvencyFeatures" :key="index" class="flex gap-4">
                                <div class="w-10 h-10 rounded-lg bg-prex-50 border border-prex-200 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-prex-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="item.iconPath" /></svg>
                                </div>
                                <div><h3 class="text-slate-900 font-semibold mb-1">{{ item.title }}</h3><p class="text-slate-600 text-sm">{{ item.description }}</p></div>
                            </div>
                        </div>
                    </div>
                    <Card class="p-8">
                        <h3 class="text-xl font-semibold text-slate-900 mb-6 flex items-center gap-2">Revenue Allocation</h3>
                        <div class="space-y-4 mb-8">
                            <p class="text-slate-600 text-sm mb-4">All protocol revenue (trading fees + subscriptions) is split 50/50:</p>
                            <div class="flex items-center gap-4"><div class="w-3 h-3 rounded-full bg-prex-500" /><div class="flex-1 text-slate-700">Solvency Treasury (USDT)</div><div class="text-slate-900 font-semibold">50%</div></div>
                            <div class="flex items-center gap-4"><div class="w-3 h-3 rounded-full bg-pusd-500" /><div class="flex-1 text-slate-700">Community & Affiliates</div><div class="text-slate-900 font-semibold">50%</div></div>
                        </div>
                        <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl mb-6">
                            <div class="text-sm text-slate-600 mb-2">Redemption Value Formula</div>
                            <div class="font-mono text-lg text-prex-600">Value = Pool USDT ÷ Redeeming wUSD</div>
                        </div>
                        <div class="p-4 bg-prex-50 border border-prex-200 rounded-xl">
                            <div class="flex items-center gap-2 text-prex-600 mb-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /></svg><span class="font-semibold">Example Calculation</span></div>
                            <p class="text-slate-600 text-sm">Pool: <span class="text-slate-900 font-medium">$2,500,000 USDT</span><br />Opting to Redeem: <span class="text-slate-900 font-medium">8,200,000 wUSD</span><br />Value per wUSD: <span class="text-prex-600 font-semibold">$0.30</span></p>
                        </div>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Risk Disclosure -->
        <section class="section bg-slate-50">
            <div class="container-wide">
                <div class="max-w-4xl mx-auto">
                    <Card class="p-8 border-amber-200 bg-amber-50">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-amber-100 border border-amber-200 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /></svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-slate-900 mb-3">Important Risk Disclosure</h3>
                                <div class="space-y-3 text-slate-600">
                                    <p><strong class="text-slate-900">wUSD is an algorithmic treasury-backed token.</strong> Unlike USDC or USDT, wUSD does not maintain a 1:1 peg to USD. Its redemption value fluctuates based on treasury health and redemption demand.</p>
                                    <p><strong class="text-slate-900">Redemption value can be less than $1.</strong> If many users redeem simultaneously or treasury growth slows, the per-wUSD redemption value could decrease.</p>
                                    <p><strong class="text-slate-900">wUSD is earned, not purchased.</strong> Your risk is limited to opportunity cost—the time and activity you invest in earning it.</p>
                                </div>
                                <div class="mt-6">
                                    <Link href="/legal/risk" class="text-amber-700 hover:text-amber-800 text-sm flex items-center gap-1 font-medium">Read Full Risk Disclosure <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg></Link>
                                </div>
                            </div>
                        </div>
                    </Card>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="section bg-white">
            <div class="container-wide">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="heading-lg mb-4">Questions About Our Reserves?</h2>
                    <p class="text-lg text-slate-600 mb-8">We're committed to answering every question about how wUSD works.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <Link href="/faq" class="btn-primary btn-lg inline-flex items-center">Read FAQ <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg></Link>
                        <Link href="/how-it-works" class="btn-secondary btn-lg">How It Works</Link>
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
import StatCard from '@/Components/StatCard.vue';
import GeometricBackground from '@/Components/GeometricBackground.vue';
import EcosystemOrbit from '@/Components/EcosystemOrbit.vue';

const solvencyFeatures = [
    { iconPath: 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6', title: 'Revenue Inflows', description: '50% of all protocol revenue (trading fees + subscriptions) flows directly into the Solvency Pool.' },
    { iconPath: 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', title: '3-Month Cliff', description: 'wUSD must be held for 3 months from mint date before becoming eligible for USDT redemption. This prevents short-term extraction.' },
    { iconPath: 'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z', title: 'Dynamic Redemption Value', description: 'Redemption value = Pool USDT ÷ wUSD opting to redeem in that epoch. If the pool grows faster than redemptions, per-wUSD value increases.' },
];
</script>

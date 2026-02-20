<template>
    <section class="section bg-white">
        <div class="container-wide">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <Badge variant="prex" class="mb-4">Two Strategic Paths</Badge>
                <h2 class="heading-lg text-slate-900 mb-4">
                    Redeeming <span class="text-gradient">wUSD</span>
                </h2>
                <p class="text-lg text-slate-600">
                    wUSD gives users a choice: liquidity now or treasury later.
                </p>
            </div>

            <!-- Redemption Paths -->
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Path A: USDT -->
                <Card class="p-8 border-prex-200">
                    <div class="flex items-center gap-2 mb-6">
                        <Badge variant="prex">Path A</Badge>
                        <span class="text-slate-600 text-sm">USDT Liquidity</span>
                    </div>

                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 flex items-center justify-center">
                            <img
                                src="/images/tether-logo-transparent.png"
                                alt="USDT"
                                class="w-14 h-14 object-contain drop-shadow-lg"
                            />
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-slate-900">Redemption from Solvency Pool</h3>
                            <p class="text-slate-600">Best for users seeking an immediate wUSD value</p>
                        </div>
                    </div>

                    <div class="space-y-4 mb-6">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-prex-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <div class="text-slate-900 font-medium">3-Month Cliff</div>
                                <div class="text-slate-600 text-sm">wUSD must mature for 3 months before redemption eligibility</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-prex-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <div class="text-slate-900 font-medium">Redemption Value Formula</div>
                                <div class="text-slate-600 text-sm">Value = Solvency Pool USDT ÷ wUSD Opting to Redeem</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-prex-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                            <div>
                                <div class="text-slate-900 font-medium">Treasury-Backed</div>
                                <div class="text-slate-600 text-sm">Pool funded by trading fees, subscriptions, and capital reserves</div>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 rounded-xl bg-prex-50 border border-prex-200">
                        <div class="text-sm text-slate-600 mb-1">Example Scenario</div>
                        <div class="text-slate-900">
                            Pool: <span class="text-prex-600 font-semibold">$500,000 USDT</span> •
                            Redeeming: <span class="text-prex-600 font-semibold">400,000 wUSD</span>
                        </div>
                        <div class="text-slate-600 text-sm mt-1">
                            = <span class="text-slate-900 font-semibold">$1.25 per wUSD</span> redemption value
                        </div>
                    </div>
                </Card>

                <!-- Path B: PREX -->
                <Card class="p-8 border-pusd-300">
                    <div class="flex items-center gap-2 mb-6">
                        <Badge variant="pusd">Path B</Badge>
                        <span class="text-slate-600 text-sm">Long-term Value</span>
                    </div>

                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 flex items-center justify-center">
                            <img
                                src="/images/prex-logo-transparent.png"
                                alt="PREX"
                                class="w-14 h-14 object-contain drop-shadow-lg"
                            />
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-slate-900">Redemption from PREX Treasury</h3>
                            <p class="text-slate-600">Best for long-term believers in Prex Markets</p>
                        </div>
                    </div>

                    <div class="space-y-4 mb-6">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-pusd-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            <div>
                                <div class="text-slate-900 font-medium">FDV Trigger: $1 Billion</div>
                                <div class="text-slate-600 text-sm">Conversion unlocks when PREX reaches $1B fully diluted valuation</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-pusd-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <div class="text-slate-900 font-medium">6-Month Streaming Vest</div>
                                <div class="text-slate-600 text-sm">PREX tokens vest linearly over 6 months after conversion</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-pusd-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                            <div>
                                <div class="text-slate-900 font-medium">30% Treasury Cap</div>
                                <div class="text-slate-600 text-sm">Auto-suspends at 30% usage, re-enables as reserves replenish</div>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 rounded-xl bg-pusd-50 border border-pusd-200">
                        <div class="text-sm text-slate-600 mb-1">Conversion Benefit</div>
                        <div class="text-slate-900">
                            <span class="text-pusd-600 font-semibold">1:1 ratio</span> •
                            Potential upside if PREX appreciates during vest
                        </div>
                        <div class="text-slate-600 text-sm mt-1">
                            Zero cost basis + growth exposure = <span class="text-slate-900 font-semibold">pure alpha</span>
                        </div>
                    </div>
                </Card>
            </div>

            <!-- CTA -->
            <div class="mt-12 text-center">
                <Link href="/transparency" class="btn-secondary inline-flex items-center gap-2">
                    View Transparency Dashboard
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </Link>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import Badge from '@/Components/Badge.vue';
import Card from '@/Components/Card.vue';
</script>

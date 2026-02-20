<template>
    <div class="pt-20">
        <section class="section bg-white relative overflow-hidden">
            <div class="absolute inset-0 bg-grid opacity-40" />
            <div class="absolute inset-0 bg-gradient-to-b from-amber-50/30 to-transparent" />
            <div class="container-wide relative z-10">
                <div class="max-w-4xl">
                    <Badge variant="warning" class="mb-6">
                        <svg class="w-3 h-3 mr-1 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                        Important
                    </Badge>
                    <h1 class="heading-xl mb-6">Risk Disclosure</h1>
                    <p class="text-xl text-slate-600">
                        Please read this disclosure carefully before earning or holding wUSD.
                    </p>
                </div>
            </div>
        </section>

        <section class="section bg-slate-50">
            <div class="container-narrow">
                <!-- Key Warning -->
                <Card class="p-6 border-amber-200 bg-amber-50 mb-8">
                    <div class="flex items-start gap-4">
                        <svg class="w-8 h-8 text-amber-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                        <div>
                            <h2 class="text-xl font-semibold text-slate-900 mb-3">wUSD is an Algorithmic Treasury-Backed Token</h2>
                            <p class="text-slate-700">
                                wUSD is an <strong class="text-slate-900">algorithmic treasury-backed token</strong>, not a
                                1:1 fiat-backed asset like USDC or USDT. It does not maintain a fixed peg to the US Dollar.
                                Its redemption value is <strong class="text-slate-900">dynamic</strong> and depends on
                                treasury health and redemption behavior.
                            </p>
                        </div>
                    </div>
                </Card>

                <Card class="p-8">
                    <div class="prose prose-slate max-w-none">
                        <h2 class="text-xl font-semibold text-slate-900 mb-4">1. Redemption Value Risk</h2>
                        <p class="text-slate-600 mb-6">
                            The value you receive when redeeming wUSD for USDT is calculated as:
                            <code class="bg-slate-100 px-2 py-1 rounded mx-1 text-slate-800">Solvency Pool USDT ÷ wUSD Opting to Redeem</code>.
                            This means:
                        </p>
                        <ul class="list-disc list-inside text-slate-600 mb-6 space-y-2">
                            <li>If many users redeem simultaneously, per-wUSD value decreases</li>
                            <li>If treasury growth slows, redemption value may be lower than expected</li>
                            <li>Redemption value can be less than $1.00 per wUSD</li>
                            <li>Redemption value can potentially exceed $1.00 if treasury grows faster than redemptions</li>
                        </ul>

                        <h2 class="text-xl font-semibold text-slate-900 mb-4">2. Liquidity Risk</h2>
                        <p class="text-slate-600 mb-6">wUSD has specific liquidity constraints:</p>
                        <ul class="list-disc list-inside text-slate-600 mb-6 space-y-2">
                            <li><strong class="text-slate-900">3-Month Cliff:</strong> wUSD cannot be redeemed for USDT until 3 months after it was minted to your account</li>
                            <li><strong class="text-slate-900">Weekly Epochs:</strong> Redemptions are processed in weekly batches, not on-demand</li>
                            <li><strong class="text-slate-900">No Secondary Market:</strong> wUSD is not tradeable on external exchanges</li>
                            <li><strong class="text-slate-900">Unlock Schedule:</strong> Earned wUSD unlocks progressively based on activity milestones</li>
                        </ul>

                        <h2 class="text-xl font-semibold text-slate-900 mb-4">3. Protocol Risk</h2>
                        <p class="text-slate-600 mb-6">wUSD's value depends on the success of Prex Markets:</p>
                        <ul class="list-disc list-inside text-slate-600 mb-6 space-y-2">
                            <li>If trading volume declines, treasury inflows decrease</li>
                            <li>If Prex Markets fails, treasury may not be sufficient for all redemptions</li>
                            <li>Smart contract vulnerabilities could affect wUSD mechanics</li>
                            <li>Regulatory changes could impact Platform operations</li>
                        </ul>

                        <h2 class="text-xl font-semibold text-slate-900 mb-4">4. PREX Conversion Risk</h2>
                        <p class="text-slate-600 mb-6">Converting wUSD to PREX tokens (Path B) involves additional risks:</p>
                        <ul class="list-disc list-inside text-slate-600 mb-6 space-y-2">
                            <li><strong class="text-slate-900">FDV Threshold:</strong> Conversion only available when PREX reaches $1B FDV—this may never occur</li>
                            <li><strong class="text-slate-900">6-Month Vesting:</strong> Converted PREX vests linearly over 6 months; you cannot sell immediately</li>
                            <li><strong class="text-slate-900">30% Treasury Cap:</strong> Conversions may be suspended if they would exceed 30% of treasury</li>
                            <li><strong class="text-slate-900">PREX Volatility:</strong> PREX token value may fluctuate significantly during your vesting period</li>
                        </ul>

                        <h2 class="text-xl font-semibold text-slate-900 mb-4">5. Trading Risk</h2>
                        <p class="text-slate-600 mb-6">While wUSD provides LossLess™ protection, trading on Prex Markets still involves risk:</p>
                        <ul class="list-disc list-inside text-slate-600 mb-6 space-y-2">
                            <li>You can lose your deposited funds (USDT/USDC) through trading</li>
                            <li>LossLess™ only rebates up to 10% of losses (1 wUSD per $1), capped at 10 wUSD per event and 100 wUSD lifetime</li>
                            <li>Market outcomes are uncertain and you may be wrong</li>
                            <li>Past performance does not guarantee future results</li>
                        </ul>

                        <h2 class="text-xl font-semibold text-slate-900 mb-4">6. Zero Cost Basis ≠ Zero Risk</h2>
                        <p class="text-slate-600 mb-6">While wUSD has a zero cost basis (you earn it, not buy it), you still face:</p>
                        <ul class="list-disc list-inside text-slate-600 mb-6 space-y-2">
                            <li><strong class="text-slate-900">Opportunity Cost:</strong> Time and activity spent earning wUSD could be spent elsewhere</li>
                            <li><strong class="text-slate-900">Tax Implications:</strong> Earned wUSD may be taxable income in your jurisdiction</li>
                            <li><strong class="text-slate-900">Expectations Risk:</strong> Expecting high redemption value and receiving less can feel like a loss</li>
                        </ul>

                        <h2 class="text-xl font-semibold text-slate-900 mb-4">7. Regulatory Risk</h2>
                        <p class="text-slate-600 mb-6">Cryptocurrency and prediction market regulations are evolving:</p>
                        <ul class="list-disc list-inside text-slate-600 mb-6 space-y-2">
                            <li>wUSD's legal classification may change</li>
                            <li>Your jurisdiction may restrict access to Prex Markets</li>
                            <li>Tax treatment of wUSD earnings may vary or change</li>
                            <li>Regulatory enforcement actions could affect the Platform</li>
                        </ul>

                        <h2 class="text-xl font-semibold text-slate-900 mb-4">8. Technical Risk</h2>
                        <p class="text-slate-600 mb-6">As with any blockchain-based system:</p>
                        <ul class="list-disc list-inside text-slate-600 mb-6 space-y-2">
                            <li>Smart contracts may contain bugs or vulnerabilities</li>
                            <li>Blockchain network issues could affect transactions</li>
                            <li>Private key loss means loss of access to your assets</li>
                            <li>Third-party wallet or service failures could impact your holdings</li>
                        </ul>

                        <div class="p-6 bg-blue-50 border border-blue-200 rounded-xl mt-8">
                            <div class="flex items-start gap-4">
                                <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /></svg>
                                <div>
                                    <h3 class="text-slate-900 font-semibold mb-2">Your Responsibility</h3>
                                    <p class="text-slate-600 text-sm">
                                        You are responsible for understanding these risks before participating.
                                        Only earn wUSD if you can accept the possibility of lower-than-expected
                                        redemption value. Consider consulting financial and tax advisors in your jurisdiction.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </Card>

                <div class="mt-8 flex gap-4">
                    <Link href="/legal/terms" class="text-slate-600 hover:text-slate-900 text-sm transition-colors">Terms of Service →</Link>
                    <Link href="/legal/privacy" class="text-slate-600 hover:text-slate-900 text-sm transition-colors">Privacy Policy →</Link>
                    <Link href="/faq" class="text-slate-600 hover:text-slate-900 text-sm transition-colors">FAQ →</Link>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import Badge from '@/Components/Badge.vue';
import Card from '@/Components/Card.vue';
</script>

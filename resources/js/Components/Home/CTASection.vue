<template>
    <section class="py-20 md:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Headline -->
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight mb-6">
                    Start Earning wUSD Today
                </h2>
                <p class="text-lg text-slate-500 max-w-2xl mx-auto mb-8">
                    Trade on Prex Markets and earn treasury-backed rewards.
                    Zero cost basis. Real redemption value.
                </p>

                <!-- Feature Pills -->
                <div class="flex flex-wrap justify-center gap-3 mb-10">
                    <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-slate-200 text-sm text-slate-700 shadow-sm">
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Earned, Not Bought
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-slate-200 text-sm text-slate-700 shadow-sm">
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                        Treasury-Backed
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-slate-200 text-sm text-slate-700 shadow-sm">
                        <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        10% LossLess™ Rebate
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-slate-200 text-sm text-slate-700 shadow-sm">
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        USDT or PREX Redemption
                    </div>
                </div>

                <!-- CTAs -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://app.prex.markets" class="inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-medium transition-colors group">
                        Start Earning Now
                        <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <Link href="/how-it-works" class="inline-flex items-center justify-center border border-slate-300 hover:border-slate-400 text-slate-700 px-6 py-3 rounded-xl font-medium transition-colors">
                        Learn How It Works
                    </Link>
                </div>

                <!-- Disclaimer -->
                <p class="mt-8 text-xs text-slate-600 max-w-xl mx-auto">
                    wUSD is an algorithmic treasury-backed token, not an investment product. Redemption value depends
                    on treasury health and is not guaranteed to equal $1. Please read our
                    <Link href="/legal/risk" class="text-slate-600 hover:text-slate-900 underline">
                        risk disclosure
                    </Link>
                    before participating.
                </p>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

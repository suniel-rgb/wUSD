<template>
    <section class="section bg-slate-50 relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0 bg-gradient-to-b from-white via-slate-50 to-white" />
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-prex-100/40 rounded-full blur-3xl" />
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-pusd-100/40 rounded-full blur-3xl" />

        <div class="container-wide relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Headline -->
                <h2 class="heading-xl text-slate-900 mb-6">
                    Start Earning <span class="text-gradient-pusd">wUSD</span> Today
                </h2>
                <p class="text-xl text-slate-600 mb-8 max-w-2xl mx-auto">
                    Trade on Prex Markets and earn treasury-backed rewards.
                    Zero cost basis. Real redemption value.
                </p>

                <!-- Feature Pills -->
                <div class="flex flex-wrap justify-center gap-3 mb-10">
                    <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-slate-200 text-sm text-slate-700 shadow-sm">
                        <svg class="w-4 h-4 text-pusd-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Earned, Not Bought
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-slate-200 text-sm text-slate-700 shadow-sm">
                        <svg class="w-4 h-4 text-prex-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        <svg class="w-4 h-4 text-prex-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        USDT or PREX Redemption
                    </div>
                </div>

                <!-- CTAs -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://app.prex.markets" class="btn-primary btn-lg group inline-flex items-center">
                        Start Earning Now
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <Link href="/how-it-works" class="btn-secondary btn-lg">
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

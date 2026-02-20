<template>
    <section class="py-20 md:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight mb-6">
                    What Backs wUSD?
                </h2>
                <p class="text-lg text-slate-500 max-w-2xl mx-auto">
                    wUSD is not hype-backed. It is treasury-backed.
                </p>
            </div>

            <!-- Main Content Grid -->
            <div class="grid lg:grid-cols-2 gap-6 items-start mb-16">
                <!-- Left: Revenue Sources -->
                <div>
                    <div class="space-y-4 mb-8">
                        <h3 class="text-xl font-semibold text-slate-900 mb-4">Revenue Sources</h3>
                        <div class="flex items-center gap-3 p-4 rounded-2xl border border-slate-200 bg-white shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-300">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>
                            <span class="text-slate-700 font-medium">Trading fees generated on Prex Markets</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 rounded-2xl border border-slate-200 bg-white shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-300">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <span class="text-slate-700 font-medium">Platform subscriptions</span>
                        </div>
                    </div>

                    <!-- Smart Distribution Model -->
                    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-slate-900 mb-3">Smart Distribution Model</h3>
                        <p class="text-slate-600 mb-4 text-sm">All protocol revenue is split automatically:</p>
                        <div class="grid grid-cols-2 gap-3">
                            <div class="text-center p-4 bg-blue-50 border border-blue-200 rounded-xl group hover:bg-blue-100 transition-colors">
                                <div class="text-3xl font-bold text-blue-600 mb-1 group-hover:scale-110 transition-transform">50%</div>
                                <div class="text-slate-700 font-medium text-sm">Solvency Treasury</div>
                            </div>
                            <div class="text-center p-4 bg-blue-100 border border-blue-200 rounded-xl group hover:bg-blue-200 transition-colors">
                                <div class="text-3xl font-bold text-blue-600 mb-1 group-hover:scale-110 transition-transform">50%</div>
                                <div class="text-slate-700 font-medium text-sm">Community & Affiliates</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Summary / Visual -->
                <div class="flex flex-col items-center justify-center text-center p-8 rounded-2xl border border-slate-200 bg-white shadow-sm h-full">
                    <div class="w-16 h-16 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Treasury-Backed Model</h3>
                    <p class="text-slate-500 mb-4">Real revenue from platform fees flows directly into the Solvency Pool, backing every wUSD earned.</p>
                    <div class="flex items-center gap-2 text-blue-600 font-medium text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Verifiable on-chain
                    </div>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="text-center">
                <p class="text-lg text-slate-500 max-w-2xl mx-auto mb-8">
                    The more the platform is used, the stronger wUSD becomes.
                </p>

                <Link
                    href="/transparency"
                    class="inline-flex items-center gap-2 bg-prex-600 hover:bg-prex-700 text-white px-6 py-3 rounded-xl font-medium transition-colors"
                >
                    Go to Transparency Page
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </Link>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

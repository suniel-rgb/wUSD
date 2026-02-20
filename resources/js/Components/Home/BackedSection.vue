<template>
    <GeometricBackground variant="section" color-scheme="blue">
        <section class="py-24 md:py-32 relative">
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <!-- Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 tracking-tight mb-6">
                        What Backs wUSD?
                    </h2>
                    <p class="text-lg md:text-xl text-slate-700 font-semibold mb-4">
                        wUSD is not hype-backed. It is treasury-backed.
                    </p>
                </div>

                <!-- Main Content Grid -->
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-16">
                    <!-- Left: Ecosystem Orbit Graphic -->
                    <div class="flex justify-center order-2 lg:order-1">
                        <EcosystemOrbit variant="treasury" size="lg" animated />
                    </div>

                    <!-- Right: Content -->
                    <div class="order-1 lg:order-2">
                        <!-- Treasury Sources -->
                        <div class="space-y-4 mb-8">
                            <h3 class="text-xl font-semibold text-slate-900 mb-4">Revenue Sources</h3>
                            <div class="flex items-center gap-3 p-4 bg-white border border-slate-200 rounded-xl shadow-sm hover:border-prex-300 transition-colors">
                                <div class="w-10 h-10 rounded-lg bg-prex-50 border border-prex-200 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-prex-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-medium">Trading fees generated on Prex Markets</span>
                            </div>
                            <div class="flex items-center gap-3 p-4 bg-white border border-slate-200 rounded-xl shadow-sm hover:border-prex-300 transition-colors">
                                <div class="w-10 h-10 rounded-lg bg-prex-50 border border-prex-200 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-prex-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-medium">Platform subscriptions</span>
                            </div>
                        </div>

                        <!-- Smart Distribution Model -->
                        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                            <h3 class="text-lg font-semibold text-slate-900 mb-3">Smart Distribution Model</h3>
                            <p class="text-slate-600 mb-4 text-sm">All protocol revenue is split automatically:</p>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="text-center p-4 bg-prex-50 border border-prex-200 rounded-xl group hover:bg-prex-100 transition-colors">
                                    <div class="text-3xl font-bold text-prex-600 mb-1 group-hover:scale-110 transition-transform">50%</div>
                                    <div class="text-slate-700 font-medium text-sm">Solvency Treasury</div>
                                </div>
                                <div class="text-center p-4 bg-pusd-50 border border-pusd-200 rounded-xl group hover:bg-pusd-100 transition-colors">
                                    <div class="text-3xl font-bold text-pusd-600 mb-1 group-hover:scale-110 transition-transform">50%</div>
                                    <div class="text-slate-700 font-medium text-sm">Community & Affiliates</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Section with Segmented Graphic -->
                <div class="text-center">
                    <div class="flex justify-center mb-8">
                        <SegmentedGraphic variant="treasury" size="lg" animated />
                    </div>

                    <p class="text-lg md:text-xl text-slate-700 font-semibold mb-8 mt-16">
                        The more the platform is used, the stronger wUSD becomes.
                    </p>

                    <Link
                        href="/transparency"
                        class="inline-flex items-center gap-2 px-8 py-4 text-base font-medium text-white rounded-full transition-all duration-200 hover:scale-105"
                        style="background-color: #2563eb; box-shadow: 0 10px 25px -5px rgba(37, 99, 235, 0.4)"
                    >
                        Go to Transparency Page
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </Link>
                </div>
            </div>
        </section>
    </GeometricBackground>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import GeometricBackground from '@/Components/GeometricBackground.vue';
import EcosystemOrbit from '@/Components/EcosystemOrbit.vue';
import SegmentedGraphic from '@/Components/SegmentedGraphic.vue';
</script>

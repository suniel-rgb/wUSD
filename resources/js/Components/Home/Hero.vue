<template>
    <GeometricBackground variant="hero" color-scheme="mixed">
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
            <!-- Background Effects -->
            <div class="absolute inset-0">
                <div class="absolute top-1/4 left-1/4 w-[800px] h-[800px] bg-blue-100/50 rounded-full blur-[150px]" />
                <div class="absolute bottom-1/4 right-1/4 w-[600px] h-[600px] bg-amber-100/40 rounded-full blur-[120px]" />
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] opacity-20">
                    <div class="absolute inset-0 rounded-full border border-blue-300 animate-rotate-slower" />
                    <div class="absolute inset-8 rounded-full border border-dashed border-blue-200 animate-rotate-slow" style="animation-direction: reverse" />
                    <div class="absolute inset-16 rounded-full border border-blue-200 animate-rotate-slower" />
                </div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-6 pt-32 pb-24">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <!-- Content Side -->
                    <div :class="['text-center lg:text-left transition-all duration-1000', mounted ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                        <div class="flex items-center justify-center lg:justify-start gap-3 mb-6">
                            <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse" />
                            <span class="text-amber-600 font-mono text-sm tracking-wider">REWARD ASSET</span>
                        </div>

                        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-slate-900 tracking-tight mb-6">
                            wUSD is an algorithmic treasury-backed token
                        </h1>

                        <p class="text-lg md:text-xl text-slate-600 mb-8 max-w-2xl mx-auto lg:mx-0">
                            Its value is backed by the Prex Markets treasury. Earned through activity, never purchased.
                        </p>

                        <!-- CTAs -->
                        <div :class="['flex flex-col sm:flex-row gap-4 justify-center lg:justify-start transition-all duration-1000 delay-200', mounted ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                            <a
                                href="https://app.prex.markets/signup"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3.5 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl transition-all duration-300"
                            >
                                Create Account
                            </a>
                            <Link
                                href="/how-it-works"
                                class="border-2 border-slate-300 hover:border-blue-600 text-slate-700 hover:text-blue-600 px-8 py-3.5 rounded-xl font-semibold text-lg transition-all duration-300"
                            >
                                Learn How wUSD Works
                            </Link>
                        </div>

                        <!-- Stats row -->
                        <div :class="['mt-12 grid grid-cols-3 gap-6 max-w-md mx-auto lg:mx-0 transition-all duration-1000 delay-300', mounted ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                            <div class="text-center lg:text-left">
                                <div class="text-2xl font-bold text-blue-600">100</div>
                                <div class="text-sm text-slate-500">wUSD on signup</div>
                            </div>
                            <div class="text-center lg:text-left">
                                <div class="text-2xl font-bold text-blue-600">50/50</div>
                                <div class="text-sm text-slate-500">Revenue split</div>
                            </div>
                            <div class="text-center lg:text-left">
                                <div class="text-2xl font-bold text-blue-600">10%</div>
                                <div class="text-sm text-slate-500">LossLess™ rebate</div>
                            </div>
                        </div>
                    </div>

                    <!-- Logo Graphic Side -->
                    <div :class="['flex items-center justify-center transition-all duration-1000 delay-200', mounted ? 'opacity-100 scale-100' : 'opacity-0 scale-95']">
                        <div class="relative">
                            <LogoGraphic size="hero" animated glowing />
                            <div class="absolute -top-4 -right-8 px-3 py-1.5 bg-white rounded-full shadow-lg border border-slate-200 animate-float text-sm font-medium text-slate-700">
                                Treasury-Backed
                            </div>
                            <div class="absolute -bottom-4 -left-8 px-3 py-1.5 bg-white rounded-full shadow-lg border border-slate-200 animate-float-slow text-sm font-medium text-slate-700" style="animation-delay: -2s">
                                Proof-of-Activity
                            </div>
                            <div class="absolute top-1/2 -right-16 px-3 py-1.5 bg-emerald-50 rounded-full shadow-lg border border-emerald-200 animate-bob text-sm font-medium text-emerald-700" style="animation-delay: -1s">
                                Redeemable
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Protocol Flow - Below -->
                <div :class="['mt-20 transition-all duration-1000 delay-400', mounted ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                    <div class="max-w-3xl mx-auto">
                        <div class="flex items-center justify-center gap-4 md:gap-8">
                            <!-- Trade -->
                            <div class="flex flex-col items-center group">
                                <div class="w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-gradient-to-br from-blue-50 to-blue-100 border border-blue-200 flex items-center justify-center mb-2 group-hover:scale-110 transition-transform shadow-sm">
                                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                </div>
                                <span class="text-xs text-slate-600 font-medium">Trade</span>
                            </div>

                            <!-- Arrow -->
                            <div class="flex items-center">
                                <div class="w-8 md:w-16 h-0.5 bg-gradient-to-r from-blue-300 to-blue-400 rounded-full" />
                                <svg class="w-3 h-3 text-blue-400 -ml-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <!-- Earn wUSD -->
                            <div class="flex flex-col items-center group">
                                <div class="w-16 h-16 md:w-20 md:h-20 flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                    <img
                                        src="/logos/wusd-icon-transparent.png"
                                        alt="wUSD"
                                        class="w-full h-full object-contain"
                                        style="filter: drop-shadow(0 4px 8px rgba(59, 130, 246, 0.3))"
                                    />
                                </div>
                                <span class="text-xs text-slate-600 font-medium">Earn wUSD</span>
                            </div>

                            <!-- Arrow -->
                            <div class="flex items-center">
                                <div class="w-8 md:w-16 h-0.5 bg-gradient-to-r from-blue-400 to-emerald-400 rounded-full" />
                                <svg class="w-3 h-3 text-emerald-400 -ml-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <!-- Redeem -->
                            <div class="flex flex-col items-center group">
                                <div class="w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-gradient-to-br from-emerald-50 to-emerald-100 border border-emerald-200 flex items-center justify-center mb-2 group-hover:scale-110 transition-transform shadow-sm">
                                    <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <span class="text-xs text-slate-600 font-medium">Redeem</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </GeometricBackground>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { Link } from '@inertiajs/vue3';
import GeometricBackground from '@/Components/GeometricBackground.vue';
import LogoGraphic from '@/Components/LogoGraphic.vue';

const mounted = ref(false);

onMounted(() => {
    mounted.value = true;
});
</script>

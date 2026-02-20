<template>
    <section class="py-20 md:py-28 bg-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-slate-50/50 to-transparent" />

        <!-- Floating animated logos in background -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-20 left-[10%] w-16 h-16 opacity-20 animate-float-slow">
                <img src="/logos/wusd-icon-transparent.png" alt="" class="w-full h-full object-contain" />
            </div>
            <div class="absolute top-40 right-[15%] w-12 h-12 opacity-15 animate-float-slower" style="animation-delay: -2s">
                <img src="/logos/wusd-icon-transparent.png" alt="" class="w-full h-full object-contain" />
            </div>
            <div class="absolute bottom-32 left-[20%] w-10 h-10 opacity-10 animate-bob" style="animation-delay: -3s">
                <img src="/logos/wusd-icon-transparent.png" alt="" class="w-full h-full object-contain" />
            </div>
            <div class="absolute bottom-20 right-[10%] w-14 h-14 opacity-15 animate-float" style="animation-delay: -1s">
                <img src="/logos/wusd-icon-transparent.png" alt="" class="w-full h-full object-contain" />
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <!-- Animated logo above title -->
            <div class="flex justify-center mb-8">
                <div class="relative">
                    <div class="w-24 h-24 animate-float-slow">
                        <img
                            src="/logos/wusd-icon-transparent.png"
                            alt="wUSD"
                            class="w-full h-full object-contain drop-shadow-lg"
                        />
                    </div>
                    <div class="absolute inset-0 animate-orbit">
                        <div class="w-2 h-2 rounded-full bg-blue-500 shadow-lg" />
                    </div>
                </div>
            </div>

            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight mb-6">
                What is wUSD?
            </h2>

            <p class="text-lg text-slate-500 max-w-2xl mx-auto mb-6">
                wUSD is a Proof-of-Activity digital asset designed to reward real users, not speculators.
            </p>

            <p class="text-lg text-slate-700 font-medium max-w-2xl mx-auto mb-10">
                You don't buy wUSD. You earn it by participating in the Prex Markets ecosystem.
            </p>

            <!-- Feature cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto mb-10">
                <div
                    v-for="(feature, index) in features"
                    :key="index"
                    class="rounded-2xl border border-slate-200 bg-slate-50/50 p-6 flex items-start gap-3 text-left"
                >
                    <div class="w-2.5 h-2.5 rounded-full bg-amber-400 mt-2 flex-shrink-0" />
                    <span class="text-slate-700 text-sm">{{ feature }}</span>
                </div>
            </div>

            <p class="text-lg text-slate-700 font-medium max-w-2xl mx-auto mb-10">
                wUSD aligns the platform's success with its users' success.
            </p>

            <Link
                href="/how-it-works"
                class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-medium transition-colors group"
            >
                Learn How wUSD Works
                <svg
                    class="w-4 h-4 transition-transform group-hover:translate-x-1"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </Link>
        </div>
    </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

const features = [
    'wUSD cannot be bought on exchanges',
    'wUSD is minted only through real activity',
    'wUSD is backed by verifiable protocol revenue',
    'wUSD introduces downside protection for traders',
];
</script>

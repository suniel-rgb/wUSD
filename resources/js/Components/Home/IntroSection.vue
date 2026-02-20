<template>
    <section class="py-24 md:py-32 bg-white relative overflow-hidden">
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

        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
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
                        <div class="w-2 h-2 rounded-full bg-prex-500 shadow-lg" />
                    </div>
                </div>
            </div>

            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 tracking-tight mb-8">
                What is wUSD?
            </h2>

            <p class="text-lg md:text-xl text-slate-600 leading-relaxed mb-6 max-w-3xl mx-auto">
                wUSD is a Proof-of-Activity digital asset designed to reward real users, not speculators.
            </p>

            <p class="text-lg md:text-xl text-slate-700 font-medium mb-10 max-w-3xl mx-auto">
                You don't buy wUSD. You earn it by participating in the Prex Markets ecosystem.
            </p>

            <!-- Feature bullets -->
            <div class="grid sm:grid-cols-2 gap-4 max-w-2xl mx-auto mb-10">
                <div
                    v-for="(feature, index) in features"
                    :key="index"
                    class="relative p-6 bg-slate-50/80 border border-slate-200 rounded-2xl text-left min-h-[80px]"
                >
                    <div class="absolute top-4 left-4 w-2 h-2 rounded-full bg-amber-400" />
                    <span class="text-slate-700 pl-5 block">{{ feature }}</span>
                </div>
            </div>

            <p class="text-lg md:text-xl text-slate-700 font-semibold mb-10 max-w-3xl mx-auto">
                wUSD aligns the platform's success with its users' success.
            </p>

            <Link
                href="/how-it-works"
                class="inline-flex items-center gap-2 text-prex-600 hover:text-prex-500 font-medium transition-colors group"
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

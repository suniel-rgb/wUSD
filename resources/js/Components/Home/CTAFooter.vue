<template>
    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Animated central logo -->
            <div class="flex justify-center mb-10">
                <div class="relative">
                    <div class="w-32 h-32 animate-float-slow">
                        <img
                            src="/logos/wusd-icon-transparent.png"
                            alt="wUSD"
                            class="w-full h-full object-contain"
                            style="filter: drop-shadow(0 0 30px rgba(59, 130, 246, 0.3))"
                        />
                    </div>
                    <!-- Orbiting dots -->
                    <div class="absolute inset-0 animate-orbit">
                        <div class="w-3 h-3 rounded-full bg-blue-500 shadow-lg" />
                    </div>
                    <div class="absolute inset-0 animate-orbit-reverse" style="animation-delay: -3s">
                        <div class="w-2 h-2 rounded-full bg-blue-500 shadow-lg" />
                    </div>
                </div>
            </div>

            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight mb-8">
                Driving the Future of Rewards
            </h2>

            <p class="text-lg text-slate-500 max-w-2xl mx-auto leading-relaxed mb-10">
                wUSD supports and empowers growing traders throughout the Prex ecosystem
                as a reward token backed by real protocol revenue.
            </p>

            <a
                href="https://app.prex.markets"
                class="inline-flex items-center gap-2 bg-prex-600 hover:bg-prex-700 text-white px-8 py-4 rounded-xl font-medium transition-colors"
            >
                Start Earning wUSD
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </section>
</template>

<script setup>
</script>

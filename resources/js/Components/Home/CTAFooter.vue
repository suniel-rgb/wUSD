<template>
    <section class="py-24 md:py-32 bg-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-slate-50/50 to-transparent" />

        <!-- Floating logos in background -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-16 left-[5%] w-20 h-20 opacity-10 animate-float-slow">
                <img src="/logos/wusd-icon-transparent.png" alt="" class="w-full h-full object-contain" />
            </div>
            <div class="absolute top-32 right-[8%] w-16 h-16 opacity-15 animate-bob" style="animation-delay: -2s">
                <img src="/logos/wusd-icon-transparent.png" alt="" class="w-full h-full object-contain" />
            </div>
            <div class="absolute bottom-24 left-[12%] w-12 h-12 opacity-10 animate-float" style="animation-delay: -1s">
                <img src="/logos/wusd-icon-transparent.png" alt="" class="w-full h-full object-contain" />
            </div>
            <div class="absolute bottom-16 right-[15%] w-14 h-14 opacity-15 animate-float-slower" style="animation-delay: -3s">
                <img src="/logos/wusd-icon-transparent.png" alt="" class="w-full h-full object-contain" />
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
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
                        <div class="w-3 h-3 rounded-full bg-prex-500 shadow-lg" />
                    </div>
                    <div class="absolute inset-0 animate-orbit-reverse" style="animation-delay: -3s">
                        <div class="w-2 h-2 rounded-full bg-pusd-500 shadow-lg" />
                    </div>
                </div>
            </div>

            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 tracking-tight mb-8">
                Driving the Future of Rewards
            </h2>

            <p class="text-lg md:text-xl text-slate-600 leading-relaxed mb-10 max-w-2xl mx-auto">
                wUSD supports and empowers growing traders throughout the Prex ecosystem
                as a reward token backed by real protocol revenue.
            </p>

            <a
                href="https://app.prex.markets"
                class="inline-flex items-center gap-2 px-8 py-4 text-base font-medium text-white rounded-full transition-all duration-200 hover:scale-105"
                style="background-color: #2563eb; box-shadow: 0 10px 25px -5px rgba(37, 99, 235, 0.4)"
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

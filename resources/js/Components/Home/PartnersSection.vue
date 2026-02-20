<template>
    <section class="py-20 md:py-28 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <h3 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight mb-4">
                    Built on trusted infrastructure
                </h3>
                <p class="text-lg text-slate-500 max-w-2xl mx-auto">
                    wUSD is powered by industry-leading partners and integrated across the Solana ecosystem.
                </p>
            </div>

            <!-- Partners Marquee -->
            <div class="relative">
                <div class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-white to-transparent z-10" />
                <div class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-white to-transparent z-10" />

                <div class="partners-marquee flex gap-8">
                    <a
                        v-for="(partner, index) in doubledPartners"
                        :key="`${partner.name}-${index}`"
                        :href="partner.url"
                        class="flex-shrink-0 flex items-center justify-center px-8 py-4 bg-slate-50 border border-slate-200 rounded-xl hover:border-slate-300 transition-colors group min-w-[160px]"
                    >
                        <span class="text-slate-600 font-semibold text-lg group-hover:text-slate-700 transition-colors">
                            {{ partner.name }}
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { computed } from 'vue';

const partners = [
    { name: 'Solana', url: '#' },
    { name: 'Pyth', url: '#' },
    { name: 'Jupiter', url: '#' },
    { name: 'Drift', url: '#' },
    { name: 'Marinade', url: '#' },
    { name: 'Phantom', url: '#' },
    { name: 'Backpack', url: '#' },
    { name: 'Helius', url: '#' },
];

const doubledPartners = computed(() => [...partners, ...partners]);
</script>

<style scoped>
@keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
.partners-marquee {
    animation: scroll 30s linear infinite;
}
.partners-marquee:hover {
    animation-play-state: paused;
}
</style>

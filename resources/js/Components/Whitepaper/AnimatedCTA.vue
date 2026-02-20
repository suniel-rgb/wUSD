<template>
    <section class="section bg-white relative overflow-hidden">
        <!-- Animated orbs -->
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div v-for="(orb, i) in orbs" :key="'orb-'+i" class="absolute rounded-full animate-float-slow blur-3xl" :style="{ width: orb.size + 'px', height: orb.size + 'px', left: orb.left, top: orb.top, background: orb.color, animationDelay: orb.delay }" />
            <div v-for="(s, i) in sparkles" :key="'sparkle-'+i" class="absolute rounded-full bg-prex-400/30 animate-sparkle" :style="{ left: s.left, top: s.top, width: s.size + 'px', height: s.size + 'px', animationDelay: s.delay }" />
        </div>

        <div class="container-wide relative z-10">
            <div ref="target" :class="['max-w-3xl mx-auto text-center transition-all duration-700', isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                <h2 class="heading-lg mb-4">Ready to Earn wUSD?</h2>
                <p :class="['text-lg text-slate-600 mb-8 transition-all duration-700 delay-150', isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4']">
                    Now that you understand the mechanics, start earning treasury-backed
                    rewards through your trading activity on Prex Markets.
                </p>
                <div :class="['flex flex-col sm:flex-row gap-4 justify-center transition-all duration-700 delay-300', isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4']">
                    <a href="https://app.prex.markets" class="btn-primary btn-lg group relative overflow-hidden inline-flex items-center">
                        <span class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent animate-btn-shine" />
                        Start Earning
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </a>
                    <Link href="/transparency" class="btn-secondary btn-lg">View Transparency</Link>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import useScrollReveal from '@/Composables/useScrollReveal';

const { target, isVisible } = useScrollReveal({ threshold: 0.3 });

function seededRandom(seed) {
    const x = Math.sin(seed) * 10000;
    return x - Math.floor(x);
}

const orbs = [
    { size: 300, left: '10%', top: '20%', color: 'rgba(59, 130, 246, 0.08)', delay: '0s' },
    { size: 250, left: '75%', top: '30%', color: 'rgba(250, 204, 21, 0.06)', delay: '2s' },
    { size: 200, left: '50%', top: '60%', color: 'rgba(139, 92, 246, 0.05)', delay: '4s' },
];

const sparkles = Array.from({ length: 12 }, (_, i) => ({
    left: `${seededRandom(i * 5 + 1) * 100}%`,
    top: `${seededRandom(i * 5 + 2) * 100}%`,
    delay: `${seededRandom(i * 5 + 3) * 5}s`,
    size: 1 + seededRandom(i * 5 + 4) * 3,
}));
</script>

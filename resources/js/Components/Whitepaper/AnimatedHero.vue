<template>
    <section class="relative overflow-hidden min-h-[90vh] flex items-center">
        <!-- Animated gradient mesh background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-b from-blue-50/50 via-white to-slate-50" />
            <div class="absolute inset-0 opacity-40" :style="{ background: `radial-gradient(ellipse 600px 400px at 20% 30%, rgba(59, 130, 246, 0.12), transparent), radial-gradient(ellipse 500px 500px at 80% 60%, rgba(250, 204, 21, 0.08), transparent), radial-gradient(ellipse 800px 300px at 50% 10%, rgba(96, 165, 250, 0.1), transparent)` }" />
        </div>

        <!-- Animated dot grid -->
        <div class="absolute inset-0 opacity-30 animate-drift" :style="{ backgroundImage: `radial-gradient(circle at 1px 1px, rgba(59, 130, 246, 0.15) 1px, transparent 0)`, backgroundSize: '32px 32px' }" />

        <!-- Floating particles -->
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div v-for="(p, i) in particles" :key="i" class="absolute rounded-full bg-blue-400/20 animate-particle" :style="{ left: p.left, top: p.top, width: p.size + 'px', height: p.size + 'px', animationDelay: p.delay, animationDuration: p.duration }" />
        </div>

        <!-- Floating document pages -->
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div v-for="(page, i) in floatingPages" :key="i" :class="['absolute animate-float-page', page.size]" :style="{ left: page.left, top: page.top, animationDelay: page.delay }">
                <div class="w-full h-full bg-white/60 backdrop-blur-sm rounded-lg border border-slate-200/60 shadow-lg shadow-slate-200/30 flex flex-col p-2 gap-1" :style="{ transform: `rotate(${page.rotate}deg)` }">
                    <div class="w-3/4 h-1 bg-slate-200/60 rounded-full" />
                    <div class="w-full h-1 bg-slate-200/40 rounded-full" />
                    <div class="w-5/6 h-1 bg-slate-200/40 rounded-full" />
                    <div class="w-2/3 h-1 bg-blue-200/50 rounded-full mt-1" />
                    <div class="w-full h-1 bg-slate-200/40 rounded-full" />
                    <div class="w-4/5 h-1 bg-slate-200/40 rounded-full" />
                </div>
            </div>
        </div>

        <!-- Orbiting rings -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] md:w-[700px] md:h-[700px] pointer-events-none" aria-hidden="true">
            <svg class="w-full h-full animate-rotate-slow" viewBox="0 0 400 400">
                <circle cx="200" cy="200" r="190" fill="none" stroke="rgba(59, 130, 246, 0.08)" stroke-width="1" stroke-dasharray="8 12" />
            </svg>
        </div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] md:w-[850px] md:h-[850px] pointer-events-none" aria-hidden="true">
            <svg class="w-full h-full animate-rotate-slower" style="animation-direction: reverse" viewBox="0 0 400 400">
                <circle cx="200" cy="200" r="195" fill="none" stroke="rgba(250, 204, 21, 0.06)" stroke-width="1" stroke-dasharray="4 16" />
            </svg>
        </div>

        <!-- Content -->
        <div class="container-wide relative z-10 py-32 md:py-40">
            <div class="max-w-3xl mx-auto text-center">
                <div :class="['transition-all duration-700', mounted ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6']">
                    <Badge variant="prex" class="mb-6 animate-pulse-glow">
                        <svg class="w-3 h-3 mr-1 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        Official Document
                    </Badge>
                </div>

                <div :class="['transition-all duration-700 delay-150', mounted ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                    <h1 class="heading-xl mb-6">
                        wUSD <span class="text-gradient animate-shimmer-text">Whitepaper</span>
                    </h1>
                </div>

                <div :class="['transition-all duration-700 delay-300', mounted ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                    <p class="text-xl text-slate-600 mb-10 leading-relaxed">
                        The complete technical and economic design behind wUSD &mdash;
                        the treasury-backed reward token earned through activity on Prex Markets.
                    </p>
                </div>

                <div :class="['flex flex-col sm:flex-row gap-4 justify-center transition-all duration-700', mounted ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']" style="transition-delay: 450ms">
                    <a href="/wUSD_whitepaper_2026.pdf" target="_blank" rel="noopener noreferrer" class="btn-primary btn-lg group relative overflow-hidden inline-flex items-center">
                        <span class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent animate-btn-shine" />
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                        Read Whitepaper
                    </a>
                    <a href="/wUSD_whitepaper_2026.pdf" download="wUSD_whitepaper_2026.pdf" class="btn-secondary btn-lg group inline-flex items-center">
                        <svg class="w-5 h-5 mr-2 group-hover:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                        Download PDF
                    </a>
                </div>

                <div :class="['flex flex-wrap items-center justify-center gap-6 mt-8 text-sm text-slate-500 transition-all duration-700', mounted ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4']" style="transition-delay: 600ms">
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        16 Pages
                    </span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        Published 2026
                    </span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /></svg>
                        Version 1.0
                    </span>
                </div>
            </div>
        </div>

        <!-- Bottom scroll indicator -->
        <div :class="['absolute bottom-8 left-1/2 -translate-x-1/2 transition-all duration-700', mounted ? 'opacity-100' : 'opacity-0']" style="transition-delay: 800ms">
            <div class="w-6 h-10 rounded-full border-2 border-slate-300 flex items-start justify-center p-1.5">
                <div class="w-1.5 h-3 bg-slate-400 rounded-full animate-scroll-indicator" />
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import Badge from '@/Components/Badge.vue';

const mounted = ref(false);

onMounted(() => { mounted.value = true; });

function seededRandom(seed) {
    const x = Math.sin(seed) * 10000;
    return x - Math.floor(x);
}

const particles = Array.from({ length: 20 }, (_, i) => ({
    left: `${seededRandom(i * 3 + 1) * 100}%`,
    top: `${seededRandom(i * 3 + 2) * 100}%`,
    size: 2 + seededRandom(i * 3 + 3) * 4,
    delay: `${seededRandom(i * 7) * 8}s`,
    duration: `${4 + seededRandom(i * 11) * 6}s`,
}));

const floatingPages = [
    { left: '8%', top: '20%', rotate: -12, delay: '0s', size: 'w-16 h-20 md:w-20 md:h-24' },
    { left: '85%', top: '15%', rotate: 8, delay: '1s', size: 'w-14 h-18 md:w-18 md:h-22' },
    { left: '5%', top: '65%', rotate: -6, delay: '2s', size: 'w-12 h-16 md:w-16 md:h-20' },
    { left: '90%', top: '60%', rotate: 15, delay: '0.5s', size: 'w-14 h-18 md:w-18 md:h-22' },
    { left: '75%', top: '80%', rotate: -20, delay: '1.5s', size: 'w-10 h-14 md:w-14 md:h-18' },
];
</script>

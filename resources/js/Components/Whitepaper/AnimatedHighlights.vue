<template>
    <section class="section bg-slate-50 relative overflow-hidden">
        <!-- Animated background mesh -->
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute top-0 left-0 right-0 bottom-0 animate-mesh-shift" :style="{ background: `radial-gradient(ellipse 500px 400px at 20% 20%, rgba(59, 130, 246, 0.06), transparent), radial-gradient(ellipse 400px 400px at 80% 80%, rgba(250, 204, 21, 0.05), transparent), radial-gradient(ellipse 600px 300px at 60% 40%, rgba(139, 92, 246, 0.04), transparent)` }" />
            <!-- Floating hexagons -->
            <svg class="absolute top-10 right-10 w-20 h-20 text-blue-200/30 animate-rotate-slow" viewBox="0 0 100 100"><polygon points="50,5 93,25 93,75 50,95 7,75 7,25" fill="none" stroke="currentColor" stroke-width="2" /></svg>
            <svg class="absolute bottom-20 left-10 w-16 h-16 text-blue-300/25 animate-rotate-slower" style="animation-direction: reverse" viewBox="0 0 100 100"><polygon points="50,5 93,25 93,75 50,95 7,75 7,25" fill="none" stroke="currentColor" stroke-width="2" /></svg>
            <svg class="absolute top-1/2 right-[5%] w-12 h-12 text-emerald-200/20 animate-bob" viewBox="0 0 100 100"><polygon points="50,5 93,25 93,75 50,95 7,75 7,25" fill="none" stroke="currentColor" stroke-width="2" /></svg>
        </div>

        <div class="container-wide relative z-10">
            <!-- Header -->
            <div ref="headerRef" :class="['text-center max-w-3xl mx-auto mb-14 transition-all duration-700', headerVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                <Badge variant="pusd" class="mb-4">Key Takeaways</Badge>
                <h2 class="heading-lg mb-4">Core Design <span class="text-gradient">Principles</span></h2>
                <p class="text-lg text-slate-600">The fundamental pillars that make wUSD a sustainable reward system.</p>
            </div>

            <!-- Animated Cards Grid -->
            <div ref="gridRef" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div v-for="(highlight, index) in keyHighlights" :key="highlight.title" :class="['group relative bg-white border border-slate-200 rounded-2xl p-6 shadow-sm transition-all duration-500 hover:shadow-xl hover:border-slate-300 hover:-translate-y-1', gridVisible ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-10 scale-95']" :style="{ transitionDelay: `${index * 100 + 100}ms` }">
                    <!-- Gradient border glow on hover -->
                    <div :class="['absolute -inset-px rounded-2xl bg-gradient-to-br opacity-0 group-hover:opacity-10 transition-opacity duration-500 blur-sm', highlight.gradient]" />

                    <div class="relative">
                        <!-- Icon container -->
                        <div class="relative w-14 h-14 mb-5">
                            <div :class="['absolute inset-0 rounded-xl group-hover:animate-ping-slow transition-all duration-300', highlight.bgGlow]" />
                            <div class="relative w-full h-full rounded-xl bg-blue-50 border border-blue-200 flex items-center justify-center group-hover:border-transparent group-hover:bg-gradient-to-br group-hover:from-slate-50 group-hover:to-white transition-all duration-300">
                                <svg class="w-7 h-7 text-blue-600 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="highlight.iconPath" /></svg>
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold text-slate-900 mb-2 group-hover:text-blue-700 transition-colors">{{ highlight.title }}</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">{{ highlight.description }}</p>

                        <!-- Animated bottom line -->
                        <div class="mt-4 h-0.5 bg-slate-100 rounded-full overflow-hidden">
                            <div :class="['h-full bg-gradient-to-r rounded-full transition-all duration-700 group-hover:w-full', highlight.gradient, gridVisible ? 'w-1/3' : 'w-0']" :style="{ transitionDelay: `${index * 80}ms` }" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import Badge from '@/Components/Badge.vue';
import useScrollReveal from '@/Composables/useScrollReveal';

const { target: headerRef, isVisible: headerVisible } = useScrollReveal({ threshold: 0.3 });
const { target: gridRef, isVisible: gridVisible } = useScrollReveal({ threshold: 0.1 });

const keyHighlights = [
    { iconPath: 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z', title: 'Treasury-Backed', description: '50% of all protocol revenue flows into the Solvency Pool that backs wUSD redemptions.', gradient: 'from-blue-400 to-blue-500', bgGlow: 'bg-blue-400/10' },
    { iconPath: 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6', title: 'Zero Cost Basis', description: 'wUSD is earned through activity, never purchased. Every token represents pure upside for holders.', gradient: 'from-emerald-400 to-teal-500', bgGlow: 'bg-emerald-400/10' },
    { iconPath: 'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z', title: 'Dynamic Redemption', description: 'Redemption value is calculated per epoch based on pool size divided by redeeming supply.', gradient: 'from-violet-400 to-purple-500', bgGlow: 'bg-violet-400/10' },
    { iconPath: 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', title: '3-Month Cliff', description: 'Cliff period prevents short-term extraction and aligns incentives with long-term platform growth.', gradient: 'from-blue-400 to-amber-500', bgGlow: 'bg-blue-400/10' },
    { iconPath: 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1', title: 'Dual Redemption', description: 'Redeem for USDT through the Solvency Pool or convert to PREX tokens at favorable rates.', gradient: 'from-rose-400 to-pink-500', bgGlow: 'bg-rose-400/10' },
    { iconPath: 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', title: 'Full Transparency', description: 'Public treasury wallets, on-chain verification, and real-time metrics dashboard.', gradient: 'from-cyan-400 to-sky-500', bgGlow: 'bg-cyan-400/10' },
];
</script>

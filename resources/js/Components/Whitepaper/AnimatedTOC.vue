<template>
    <section class="section bg-white relative overflow-hidden">
        <!-- Animated background decoration -->
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute left-[10%] top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-blue-200/40 to-transparent" />
            <div class="absolute right-[10%] top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-blue-200/30 to-transparent" />
            <div class="absolute top-20 right-[15%] w-32 h-32 rounded-full bg-blue-100/30 animate-float-slow blur-2xl" />
            <div class="absolute bottom-20 left-[12%] w-24 h-24 rounded-full bg-blue-100/30 animate-float blur-2xl" />
        </div>

        <div class="container-wide relative z-10">
            <div class="max-w-4xl mx-auto">
                <!-- Header -->
                <div ref="headerRef" :class="['text-center mb-14 transition-all duration-700', headerVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                    <Badge variant="prex" class="mb-4">
                        <svg class="w-3 h-3 mr-1 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                        Contents
                    </Badge>
                    <h2 class="heading-lg mb-4">What's Inside</h2>
                    <p class="text-lg text-slate-600">A comprehensive overview of every section covered in the whitepaper.</p>
                </div>

                <!-- Animated TOC List -->
                <div ref="listRef" class="relative">
                    <!-- Vertical timeline line -->
                    <div class="absolute left-[23px] top-6 bottom-6 w-[2px] bg-slate-100 overflow-hidden rounded-full">
                        <div :class="['w-full bg-gradient-to-b from-blue-400 via-blue-400 to-emerald-400 rounded-full transition-all duration-[2000ms] ease-out', listVisible ? 'h-full' : 'h-0']" />
                    </div>

                    <div class="space-y-3">
                        <div v-for="(section, index) in tableOfContents" :key="section.number" :class="['flex items-start gap-5 p-5 bg-white border border-slate-200 rounded-xl transition-all duration-500 group hover:border-blue-200 hover:shadow-md hover:bg-blue-50/30', listVisible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-8']" :style="{ transitionDelay: `${index * 100 + 200}ms` }">
                            <div class="relative flex-shrink-0">
                                <div :class="['absolute inset-0 w-10 h-10 rounded-lg bg-blue-400/20 transition-all duration-500', listVisible ? 'animate-ping-slow' : 'opacity-0']" :style="{ animationDelay: `${index * 150}ms` }" />
                                <div class="relative w-10 h-10 rounded-lg bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-600 font-semibold text-sm group-hover:bg-blue-100 group-hover:border-blue-300 group-hover:scale-110 transition-all duration-300">{{ section.number }}</div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-slate-900 font-semibold mb-1 group-hover:text-blue-700 transition-colors">{{ section.title }}</h3>
                                <p class="text-slate-600 text-sm">{{ section.description }}</p>
                            </div>
                            <div class="hidden sm:flex items-center text-slate-300 group-hover:text-blue-500 group-hover:translate-x-1 transition-all duration-300 self-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                            </div>
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
const { target: listRef, isVisible: listVisible } = useScrollReveal({ threshold: 0.1 });

const tableOfContents = [
    { number: '1', title: 'Introduction', description: 'What wUSD is and why it exists' },
    { number: '2', title: 'Problem Statement', description: 'The broken state of DeFi incentives' },
    { number: '3', title: 'wUSD Token Design', description: 'How wUSD is earned and distributed' },
    { number: '4', title: 'Solvency Pool Mechanics', description: 'Treasury funding, revenue allocation, and backing model' },
    { number: '5', title: 'Redemption System', description: 'Epoch-based redemption, cliff periods, and value calculation' },
    { number: '6', title: 'LossLess Protection', description: 'How trading losses are partially rebated in wUSD' },
    { number: '7', title: 'Tokenomics', description: 'Supply mechanics, distribution, and anti-dilution measures' },
    { number: '8', title: 'Risk Framework', description: 'Transparent disclosure of risks and edge cases' },
    { number: '9', title: 'Governance & Roadmap', description: 'Future plans and community involvement' },
];
</script>

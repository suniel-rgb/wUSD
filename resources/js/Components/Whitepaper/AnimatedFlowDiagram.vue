<template>
    <section class="py-20 md:py-28 bg-white relative overflow-hidden">
        <!-- Subtle animated background lines -->
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <svg class="absolute w-full h-full opacity-[0.04]" viewBox="0 0 1200 400">
                <path d="M0 200 Q300 100 600 200 T1200 200" fill="none" stroke="currentColor" stroke-width="2" class="animate-draw-line" />
                <path d="M0 250 Q300 150 600 250 T1200 250" fill="none" stroke="currentColor" stroke-width="1" class="animate-draw-line" style="animation-delay: 0.5s" />
            </svg>
        </div>

        <div class="container-wide relative z-10">
            <!-- Flow Diagram -->
            <div ref="flowRef" class="max-w-4xl mx-auto mb-20">
                <div :class="['text-center mb-12 transition-all duration-700', flowVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                    <p class="text-sm font-semibold text-prex-600 uppercase tracking-wider mb-3">How wUSD Works</p>
                    <h2 class="heading-md">The Complete Lifecycle</h2>
                </div>

                <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-0">
                    <template v-for="(step, i) in steps" :key="step.label">
                        <div class="flex items-center">
                            <div :class="['relative transition-all duration-700', flowVisible ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-8 scale-95']" :style="{ transitionDelay: `${i * 200 + 200}ms` }">
                                <div :class="['relative group w-44 md:w-48 border-2 rounded-2xl p-6 text-center hover:shadow-lg transition-shadow duration-300', step.bgColor, step.borderColor]">
                                    <div class="relative w-16 h-16 mx-auto mb-4">
                                        <div :class="['absolute inset-0 rounded-full bg-gradient-to-br opacity-10 animate-ping-slow', step.color]" />
                                        <div :class="['relative w-full h-full rounded-full bg-white border-2 flex items-center justify-center shadow-sm', step.borderColor, step.textColor]">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" :d="step.iconPath" /></svg>
                                        </div>
                                    </div>
                                    <h3 :class="['text-lg font-bold', step.textColor]">{{ step.label }}</h3>
                                    <p class="text-sm text-slate-500 mt-1">{{ step.sublabel }}</p>
                                    <div :class="['absolute -top-3 -right-3 w-7 h-7 rounded-full bg-gradient-to-br text-white text-xs font-bold flex items-center justify-center shadow-md', step.color]">{{ i + 1 }}</div>
                                </div>
                            </div>

                            <!-- Desktop arrow -->
                            <div v-if="i < steps.length - 1" :class="['hidden md:flex items-center mx-3 transition-all duration-700', flowVisible ? 'opacity-100 scale-x-100' : 'opacity-0 scale-x-0']" :style="{ transitionDelay: `${i * 200 + 350}ms` }">
                                <div class="w-16 lg:w-24 h-[2px] bg-gradient-to-r from-slate-300 to-slate-200 relative">
                                    <div class="absolute inset-0 bg-gradient-to-r from-prex-400 to-pusd-400 animate-flow-right rounded-full" />
                                </div>
                                <svg class="w-4 h-4 text-slate-400 -ml-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                            </div>
                            <!-- Mobile arrow -->
                            <div v-if="i < steps.length - 1" :class="['flex md:hidden items-center justify-center my-2 transition-all duration-500', flowVisible ? 'opacity-100' : 'opacity-0']" :style="{ transitionDelay: `${i * 200 + 350}ms` }">
                                <svg class="w-5 h-5 text-slate-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Animated Stats -->
            <div ref="statsRef" class="grid grid-cols-3 gap-6 max-w-3xl mx-auto">
                <div v-for="(stat, i) in stats" :key="stat.label" :class="['text-center transition-all duration-700', statsVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6']" :style="{ transitionDelay: `${i * 150}ms` }">
                    <div class="text-3xl md:text-4xl font-bold text-slate-900 tabular-nums">{{ countValues[i] }}{{ stat.suffix }}</div>
                    <div class="text-sm font-medium text-slate-700 mt-1">{{ stat.label }}</div>
                    <div class="text-xs text-slate-500 mt-0.5">{{ stat.description }}</div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, computed, watch } from 'vue';
import useScrollReveal from '@/Composables/useScrollReveal';
import { useCountUp } from '@/Composables/useCountUp';

const { target: flowRef, isVisible: flowVisible } = useScrollReveal({ threshold: 0.2 });
const { target: statsRef, isVisible: statsVisible } = useScrollReveal({ threshold: 0.3 });

const statsVisibleRef = computed(() => statsVisible.value);
const count0 = useCountUp(50, 1500, statsVisibleRef);
const count1 = useCountUp(3, 1500, statsVisibleRef);
const count2 = useCountUp(16, 1500, statsVisibleRef);
const countValues = computed(() => [count0.value, count1.value, count2.value]);

const steps = [
    { label: 'Trade', sublabel: 'on Prex Markets', color: 'from-prex-400 to-prex-600', borderColor: 'border-prex-200', bgColor: 'bg-prex-50', textColor: 'text-prex-600', iconPath: 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6' },
    { label: 'Earn', sublabel: 'wUSD rewards', color: 'from-pusd-400 to-pusd-600', borderColor: 'border-pusd-200', bgColor: 'bg-pusd-50', textColor: 'text-pusd-600', iconPath: 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1' },
    { label: 'Redeem', sublabel: 'for USDT or PREX', color: 'from-emerald-400 to-emerald-600', borderColor: 'border-emerald-200', bgColor: 'bg-emerald-50', textColor: 'text-emerald-600', iconPath: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z' },
];

const stats = [
    { label: 'Treasury Revenue', value: 50, suffix: '%', description: 'of fees fund the pool' },
    { label: 'Redemption Cliff', value: 3, suffix: ' mo', description: 'holding period' },
    { label: 'Pages of Detail', value: 16, suffix: '', description: 'in the whitepaper' },
];
</script>

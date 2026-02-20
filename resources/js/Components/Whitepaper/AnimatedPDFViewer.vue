<template>
    <section class="section bg-slate-50 relative overflow-hidden">
        <!-- Animated background dots -->
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute inset-0 opacity-20 animate-drift-slow" :style="{ backgroundImage: `radial-gradient(circle at 1px 1px, rgba(59, 130, 246, 0.12) 1px, transparent 0)`, backgroundSize: '48px 48px' }" />
        </div>

        <div class="container-wide relative z-10">
            <div ref="target" class="max-w-5xl mx-auto">
                <div :class="['text-center mb-10 transition-all duration-700', isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']">
                    <h2 class="heading-md mb-3">Read Online</h2>
                    <p class="text-slate-600">View the full whitepaper directly in your browser.</p>
                </div>

                <div :class="['transition-all duration-1000 delay-200', isVisible ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-12 scale-[0.98]']">
                    <Card class="overflow-hidden p-0 group hover:shadow-xl transition-shadow duration-500">
                        <div class="bg-slate-100 border-b border-slate-200 px-6 py-3 flex items-center justify-between relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent animate-shimmer-bar opacity-0 group-hover:opacity-100" />
                            <div class="flex items-center gap-3 relative">
                                <div class="relative">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                </div>
                                <span class="text-sm font-medium text-slate-700">wUSD_whitepaper_2026.pdf</span>
                            </div>
                            <div class="flex items-center gap-2 relative">
                                <a href="/wUSD_whitepaper_2026.pdf" target="_blank" rel="noopener noreferrer" class="text-sm text-blue-600 hover:text-blue-500 flex items-center gap-1 font-medium hover:scale-105 transition-transform">
                                    Open <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                                </a>
                                <span class="text-slate-300 mx-1">|</span>
                                <a href="/wUSD_whitepaper_2026.pdf" download="wUSD_whitepaper_2026.pdf" class="text-sm text-blue-600 hover:text-blue-500 flex items-center gap-1 font-medium hover:scale-105 transition-transform">
                                    Download <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                                </a>
                            </div>
                        </div>
                        <div class="w-full" style="height: 80vh">
                            <iframe src="/wUSD_whitepaper_2026.pdf" class="w-full h-full border-0" title="wUSD Whitepaper" />
                        </div>
                    </Card>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import Card from '@/Components/Card.vue';
import useScrollReveal from '@/Composables/useScrollReveal';

const { target, isVisible } = useScrollReveal({ threshold: 0.1 });
</script>

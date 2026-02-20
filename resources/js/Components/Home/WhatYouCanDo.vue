<template>
    <section class="py-20 md:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight mb-4">
                    What Can You Do With wUSD?
                </h2>
                <p class="text-lg text-slate-500 max-w-2xl mx-auto">
                    wUSD is immediately usable inside the ecosystem.
                </p>
            </div>

            <!-- Utilities Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    v-for="(utility, index) in utilities"
                    :key="index"
                    class="rounded-2xl border border-slate-200 bg-white shadow-sm p-6 h-full hover:shadow-md hover:border-slate-300 transition-all duration-300 group"
                >
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="utility.iconPath" />
                            </svg>
                        </div>
                        <span
                            :class="[
                                'inline-flex items-center px-3 py-1 rounded-full text-xs font-medium',
                                utility.status === 'Live'
                                    ? 'bg-emerald-50 text-emerald-600'
                                    : 'bg-slate-100 text-slate-600',
                            ]"
                        >
                            {{ utility.status }}
                        </span>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">{{ utility.title }}</h3>
                    <p class="text-slate-600 text-sm">{{ utility.description }}</p>
                </div>
            </div>

            <!-- Spotlight: Attention Economy -->
            <div class="mt-12 p-6 rounded-2xl bg-blue-50 border border-blue-200">
                <div class="flex flex-col md:flex-row items-center gap-6">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                        </svg>
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">
                            Spotlight: Attention Economy
                        </h3>
                        <p class="text-slate-600">
                            wUSD is designed to become the universal currency for prediction markets and beyond,
                            facilitated by real user activity.
                        </p>
                    </div>
                    <Link href="/how-it-works" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-medium transition-colors whitespace-nowrap">
                        Learn More
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </Link>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import Badge from '@/Components/Badge.vue';
import Card from '@/Components/Card.vue';

const utilities = [
    {
        iconPath: 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
        title: 'Internal Prediction Activity',
        description: 'Trade on exclusive prediction markets with wUSD. Test strategies, earn more.',
        status: 'Live',
    },
    {
        iconPath: 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
        title: 'Risk-Free Strategy Testing',
        description: 'Practice risk-free. Learn strategies without real capital.',
        status: 'Live',
    },
    {
        iconPath: 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z',
        title: 'Premium Tools & AI Trading Features',
        description: 'Buy premium tools, analytics, and AI-powered trading signals from the Prex marketplace.',
        status: 'Coming Soon',
    },
    {
        iconPath: 'M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z',
        title: 'Market Visibility Bidding via Spotlight',
        description: 'Bid to feature your market. Winning bids are burned, reducing supply.',
        status: 'Coming Soon',
    },
];
</script>

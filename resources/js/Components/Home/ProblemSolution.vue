<template>
    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-50 text-blue-600 mb-4">
                    Why wUSD Exists
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight mb-4">
                    The problem with today's <span class="text-blue-600">reward tokens</span>
                </h2>
                <p class="text-lg text-slate-500">
                    Most DeFi platforms rely on inflationary reward tokens that:
                </p>
            </div>

            <!-- Problem vs Solution Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Problems (Left Column) -->
                <div>
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 rounded-lg bg-red-50 border border-red-200 flex items-center justify-center">
                            <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-600">Traditional Rewards</h3>
                    </div>
                    <div class="space-y-3">
                        <div
                            v-for="(problem, index) in problems"
                            :key="index"
                            class="rounded-2xl border border-slate-200 bg-white shadow-sm p-4"
                        >
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-xl bg-red-50 text-red-500 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="problem.iconPath" />
                                    </svg>
                                </div>
                                <p class="text-slate-700">{{ problem.description }}</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-slate-600 mt-6 text-center lg:text-left italic">
                        This creates extractive ecosystems where platforms win, and users churn.
                    </p>
                </div>

                <!-- Solutions (Right Column) -->
                <div>
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 rounded-lg bg-blue-50 border border-blue-200 flex items-center justify-center">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-blue-600">wUSD flips the model</h3>
                    </div>
                    <p class="text-slate-600 mb-4">With wUSD:</p>
                    <div class="space-y-3">
                        <div
                            v-for="(solution, index) in solutions"
                            :key="index"
                            class="rounded-2xl border border-blue-100 bg-blue-50/50 shadow-sm p-4"
                        >
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="solution.iconPath" />
                                    </svg>
                                </div>
                                <p class="text-slate-700">{{ solution.description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Key Difference Callout (Amber Warning Banner) -->
            <div class="mt-12 p-6 rounded-2xl bg-amber-50 border border-amber-200">
                <div class="flex flex-col md:flex-row items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-slate-900 font-semibold mb-2">Important: wUSD is an Algorithmic Treasury-Backed Token</h4>
                        <p class="text-slate-600 text-sm">
                            Unlike USDC and USDT which are 1:1 fiat-backed, wUSD is an
                            <strong class="text-slate-900">algorithmic treasury-backed token</strong> with dynamic redemption value
                            based on treasury health and redemption demand. You earn it through activity—you don't buy it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const problems = [
    {
        iconPath: 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
        title: 'Printed Without Backing',
        description: 'Are printed without a real backing',
    },
    {
        iconPath: 'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z',
        title: 'Upfront Capital Required',
        description: 'Require upfront capital to participate',
    },
    {
        iconPath: 'M13 17h8m0 0V9m0 8l-8-8-4 4-6-6',
        title: 'Collapse Under Pressure',
        description: 'Collapse under sell pressure',
    },
    {
        iconPath: 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z',
        title: 'No Loss Protection',
        description: 'Offer no protection when users lose money',
    },
];

const solutions = [
    {
        iconPath: 'M13 10V3L4 14h7v7l9-11h-7z',
        title: 'Earn Before Risking',
        description: 'Users earn value before risking capital',
    },
    {
        iconPath: 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z',
        title: 'Real Revenue Rewards',
        description: 'Rewards come from real revenue',
    },
    {
        iconPath: 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
        title: 'Automatic Refunds',
        description: 'Losses are partially refunded automatically',
    },
    {
        iconPath: 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V7m0 13v-1',
        title: 'Long-term Upside',
        description: 'Long-term users capture the upside',
    },
];
</script>

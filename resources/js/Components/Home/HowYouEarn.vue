<template>
    <section class="py-20 md:py-28 bg-slate-50 relative overflow-hidden">
        <!-- Background animated orbit -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-[0.07] pointer-events-none">
            <EcosystemOrbit size="xl" variant="earning" animated />
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-50 text-blue-600 mb-4">
                    Proof of Activity
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight mb-4">
                    How wUSD Is <span class="text-blue-600">Earned</span>
                </h2>
                <p class="text-lg text-slate-500">
                    wUSD is minted through four core activity channels.
                </p>
            </div>

            <!-- Earn Methods Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div
                    v-for="(method, index) in earnMethods"
                    :key="index"
                    class="rounded-2xl border border-slate-200 bg-white shadow-sm p-6 h-full transition-all duration-300 hover:shadow-md hover:border-slate-300"
                >
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-200 flex items-center justify-center">
                            <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="method.iconPath" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-amber-600 bg-amber-50 px-2.5 py-1 rounded-full">
                            {{ method.badge }}
                        </span>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-900 mt-4 mb-2">{{ method.title }}</h3>
                    <p class="text-sm text-slate-600 mb-4 leading-relaxed">{{ method.description }}</p>
                    <ul class="space-y-2">
                        <li v-for="(detail, i) in method.details" :key="i" class="flex items-center gap-2 text-sm text-slate-600">
                            <div class="w-1.5 h-1.5 rounded-full bg-amber-400 flex-shrink-0" />
                            {{ detail }}
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Golden Ratio Unlock -->
            <div class="mt-16 rounded-2xl border border-slate-200 bg-white shadow-sm p-6 transition-all duration-300 hover:shadow-md hover:border-slate-300">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-slate-900">Golden Ratio Unlock</h3>
                        <p class="text-sm text-slate-600">Your signup allocation unlocks 1:1 with trading volume</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-4 rounded-xl bg-blue-50 border border-blue-200">
                        <div class="text-2xl font-bold text-blue-600 mb-1">100 wUSD</div>
                        <div class="text-slate-900 font-medium text-sm mb-1">Initial Allocation</div>
                        <div class="text-slate-600 text-xs">Credited on signup (locked)</div>
                    </div>
                    <div class="p-4 rounded-xl bg-blue-50 border border-blue-200">
                        <div class="text-2xl font-bold text-blue-600 mb-1">1:1</div>
                        <div class="text-slate-900 font-medium text-sm mb-1">Golden Ratio</div>
                        <div class="text-slate-600 text-xs">1 wUSD unlocked per $1 volume</div>
                    </div>
                    <div class="p-4 rounded-xl bg-blue-50 border border-blue-200">
                        <div class="text-2xl font-bold text-blue-600 mb-1">$100</div>
                        <div class="text-slate-900 font-medium text-sm mb-1">Full Unlock</div>
                        <div class="text-slate-600 text-xs">Trade $100 to unlock all 100 wUSD</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import EcosystemOrbit from '@/Components/EcosystemOrbit.vue';

const earnMethods = [
    {
        iconPath: 'M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z',
        title: 'Account Creation Allocation',
        description: '100 wUSD credited on signup. Unlocks as you trade via the Golden Ratio.',
        badge: 'Instant',
        details: [
            '100 wUSD initially locked',
            '1 wUSD unlocked per $1 volume',
            'Max unlock: 100 wUSD',
            'Golden Ratio: 1:1 with activity',
        ],
    },
    {
        iconPath: 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
        title: 'LossLess\u2122 Trading Protection',
        description: 'Get up to 10% of realized trading losses back as wUSD automatically.',
        badge: 'Protection',
        details: [
            '1 wUSD per $1 of loss',
            'Up to 10 wUSD per loss event',
            '100 wUSD lifetime cap per user',
            'Automatic\u2014no action needed',
        ],
    },
    {
        iconPath: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
        title: 'Referral & Network Growth',
        description: 'Earn fixed wUSD for every signup across 5 levels.',
        badge: 'Passive',
        details: [
            'L1: 10 wUSD per signup',
            'L2: 5 wUSD \u2022 L3: 3 wUSD',
            'L4: 2 wUSD \u2022 L5: 1 wUSD',
            'No cap on referrals',
        ],
    },
    {
        iconPath: 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z',
        title: 'Grant Program',
        description: 'Builders and creators receive milestone-vested wUSD grants.',
        badge: 'Builders',
        details: [
            'Apply with your project',
            '25% on approval',
            '75% vests on milestones',
            'Stack with other earnings',
        ],
    },
];
</script>

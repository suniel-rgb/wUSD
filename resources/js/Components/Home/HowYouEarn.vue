<template>
    <section class="section bg-slate-50 relative overflow-hidden">
        <!-- Background animated orbit -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-[0.07] pointer-events-none">
            <EcosystemOrbit size="xl" variant="earning" animated />
        </div>

        <div class="container-wide relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <Badge variant="pusd" class="mb-4">Proof of Activity</Badge>
                <h2 class="heading-lg text-slate-900 mb-4">
                    How wUSD Is <span class="text-gradient-pusd">Earned</span>
                </h2>
                <p class="text-lg text-slate-600">
                    wUSD is minted through four core activity channels.
                </p>
            </div>

            <!-- Earn Methods Grid -->
            <div class="grid md:grid-cols-2 gap-6">
                <Card v-for="(method, index) in earnMethods" :key="index" variant="hover" class="p-8">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-14 h-14 rounded-xl bg-pusd-50 border border-pusd-200 flex items-center justify-center">
                            <svg class="w-7 h-7 text-pusd-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="method.iconPath" />
                            </svg>
                        </div>
                        <Badge variant="pusd">{{ method.badge }}</Badge>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-2">{{ method.title }}</h3>
                    <p class="text-slate-600 mb-4">{{ method.description }}</p>
                    <ul class="space-y-2">
                        <li v-for="(detail, i) in method.details" :key="i" class="flex items-center gap-2 text-sm text-slate-600">
                            <div class="w-1.5 h-1.5 rounded-full bg-pusd-500" />
                            {{ detail }}
                        </li>
                    </ul>
                </Card>
            </div>

            <!-- Golden Ratio Unlock -->
            <div class="mt-16 p-8 rounded-2xl bg-white border border-slate-200 shadow-sm">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-lg bg-prex-50 border border-prex-200 flex items-center justify-center">
                        <svg class="w-5 h-5 text-prex-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-slate-900">Golden Ratio Unlock</h3>
                        <p class="text-sm text-slate-600">Your signup allocation unlocks 1:1 with trading volume</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                        <div class="text-2xl font-bold text-pusd-600 mb-1">100 wUSD</div>
                        <div class="text-slate-900 font-medium text-sm mb-1">Initial Allocation</div>
                        <div class="text-slate-600 text-xs">Credited on signup (locked)</div>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                        <div class="text-2xl font-bold text-pusd-600 mb-1">1:1</div>
                        <div class="text-slate-900 font-medium text-sm mb-1">Golden Ratio</div>
                        <div class="text-slate-600 text-xs">1 wUSD unlocked per $1 volume</div>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                        <div class="text-2xl font-bold text-pusd-600 mb-1">$100</div>
                        <div class="text-slate-900 font-medium text-sm mb-1">Full Unlock</div>
                        <div class="text-slate-600 text-xs">Trade $100 to unlock all 100 wUSD</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import Badge from '@/Components/Badge.vue';
import Card from '@/Components/Card.vue';
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
        title: 'LossLess™ Trading Protection',
        description: 'Get up to 10% of realized trading losses back as wUSD automatically.',
        badge: 'Protection',
        details: [
            '1 wUSD per $1 of loss',
            'Up to 10 wUSD per loss event',
            '100 wUSD lifetime cap per user',
            'Automatic—no action needed',
        ],
    },
    {
        iconPath: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
        title: 'Referral & Network Growth',
        description: 'Earn fixed wUSD for every signup across 5 levels.',
        badge: 'Passive',
        details: [
            'L1: 10 wUSD per signup',
            'L2: 5 wUSD • L3: 3 wUSD',
            'L4: 2 wUSD • L5: 1 wUSD',
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

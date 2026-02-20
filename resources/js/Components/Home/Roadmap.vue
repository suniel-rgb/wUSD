<template>
    <section id="roadmap" class="section bg-white relative overflow-hidden">
        <!-- Floating background elements -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-20 left-[6%] w-14 h-14 opacity-10 animate-float" style="animation-delay: -1s">
                <img src="/logos/wusd-icon-transparent.png" alt="" class="w-full h-full object-contain" />
            </div>
            <div class="absolute top-40 right-[10%] w-10 h-10 opacity-15 animate-float-slower" style="animation-delay: -3s">
                <img src="/logos/wusd-icon-transparent.png" alt="" class="w-full h-full object-contain" />
            </div>
            <div class="absolute bottom-24 right-[5%] w-16 h-16 opacity-10 animate-bob" style="animation-delay: -2s">
                <img src="/logos/wusd-icon-transparent.png" alt="" class="w-full h-full object-contain" />
            </div>
        </div>

        <div class="container-wide relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <Badge variant="prex" class="mb-4">Roadmap</Badge>
                <h2 class="heading-lg text-slate-900 mb-4">
                    Roadmap to <span class="text-gradient">Full Maturity</span>
                </h2>
                <p class="text-lg text-slate-600">
                    Each phase strengthens backing before expanding utility.
                </p>
            </div>

            <!-- Timeline -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    v-for="(phase, index) in phases"
                    :key="index"
                    :class="[
                        'rounded-2xl border p-6',
                        getStyles(phase.status).border,
                        getStyles(phase.status).bg,
                    ]"
                >
                    <div class="flex items-center justify-between mb-4">
                        <Badge :variant="getStyles(phase.status).badge">{{ phase.phase }}</Badge>
                        <!-- CheckCircle for completed -->
                        <svg
                            v-if="phase.status === 'completed'"
                            class="w-5 h-5 text-emerald-500"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <!-- Pulsing circle for current -->
                        <svg
                            v-else-if="phase.status === 'current'"
                            class="w-5 h-5 text-prex-600 animate-pulse"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <circle cx="12" cy="12" r="10" stroke-width="2" />
                        </svg>
                        <!-- Empty circle for upcoming -->
                        <svg
                            v-else
                            class="w-5 h-5 text-slate-400"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <circle cx="12" cy="12" r="10" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-4">{{ phase.title }}</h3>
                    <ul class="space-y-2">
                        <li
                            v-for="(item, i) in phase.items"
                            :key="i"
                            class="flex items-start gap-2 text-sm"
                        >
                            <div
                                :class="[
                                    'w-1.5 h-1.5 rounded-full mt-1.5 flex-shrink-0',
                                    phase.status === 'completed' ? 'bg-emerald-500' :
                                    phase.status === 'current' ? 'bg-prex-600' : 'bg-slate-400',
                                ]"
                            />
                            <span class="text-slate-600">{{ item }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import Badge from '@/Components/Badge.vue';

const phases = [
    {
        phase: 'Phase 1',
        title: 'Platform Launch',
        status: 'completed',
        items: [
            'wUSD smart contract deployment',
            'Proof-of-Activity system live',
            'LossLess™ rebate mechanism',
            'Internal prediction markets',
            'Sandbox trading mode',
        ],
    },
    {
        phase: 'Phase 2',
        title: 'wUSD Allocation Begins',
        status: 'current',
        items: [
            'Account creation allocations',
            'Trading volume rewards active',
            'Referral network rewards',
            'Grant program launch',
            'Unlock schedule enforcement',
        ],
    },
    {
        phase: 'Phase 3',
        title: 'Solvency Pool Opens',
        status: 'upcoming',
        items: [
            'Solvency pool initialization',
            'USDT redemption path (Path A)',
            '3-month cliff enforcement',
            'Treasury transparency dashboard',
            'Redemption queue system',
        ],
    },
    {
        phase: 'Phase 4',
        title: 'Marketplace & PREX Utilities Go Live',
        status: 'upcoming',
        items: [
            'wUSD marketplace launch',
            'Spotlight auction system',
            'PREX token launch & Path B',
            'Premium tools & AI features',
            'Full ecosystem integration',
        ],
    },
];

const getStyles = (status) => {
    const map = {
        completed: { border: 'border-emerald-200', bg: 'bg-emerald-50', badge: 'success' },
        current: { border: 'border-prex-200', bg: 'bg-prex-50', badge: 'prex' },
        upcoming: { border: 'border-slate-200', bg: 'bg-slate-50', badge: 'default' },
    };
    return map[status];
};
</script>

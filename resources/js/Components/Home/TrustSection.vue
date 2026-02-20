<template>
    <section class="section relative bg-white">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-slate-50/50 to-transparent" />

        <div class="container-wide relative z-10">
            <!-- Stats Row -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-20">
                <StatCard value="$2.5M+" label="Solvency Pool" variant="prex" />
                <StatCard value="12.4M" label="wUSD Earned" variant="pusd" />
                <StatCard value="$0.20" label="Implied Value" variant="default" />
                <StatCard value="50K+" label="Active Earners" variant="default" />
            </div>

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <Badge variant="prex" class="mb-6">Trust & Transparency</Badge>
                <h2 class="heading-lg mb-6">
                    Built for <span class="text-gradient">Accountability</span>
                </h2>
                <p class="text-lg text-slate-600">
                    wUSD is backed by verifiable revenue, not promises. Transparent treasury,
                    public wallets, honest risk disclosure.
                </p>
            </div>

            <!-- Trust Features Grid -->
            <div class="grid md:grid-cols-2 gap-5 mb-14">
                <div
                    v-for="(feature, index) in trustFeatures"
                    :key="index"
                    class="card-hover flex gap-5 group"
                >
                    <div class="w-10 h-10 rounded-lg bg-prex-50 border border-prex-200 flex items-center justify-center flex-shrink-0 group-hover:border-prex-300 transition-colors">
                        <svg class="w-5 h-5 text-prex-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="feature.iconPath" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-base font-semibold text-slate-900 mb-2">{{ feature.title }}</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">{{ feature.description }}</p>
                    </div>
                </div>
            </div>

            <!-- Key Commitments -->
            <div class="grid md:grid-cols-3 gap-4 mb-14">
                <div
                    v-for="(commitment, index) in commitments"
                    :key="index"
                    class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-200"
                >
                    <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-slate-700 text-sm">{{ commitment }}</span>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center">
                <Link href="/transparency" class="btn-primary inline-flex items-center gap-2 group">
                    View Transparency Dashboard
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </Link>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import Badge from '@/Components/Badge.vue';
import StatCard from '@/Components/StatCard.vue';

const trustFeatures = [
    {
        iconPath: 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z',
        title: 'Revenue-Backed',
        description: '50% of all protocol fees flow directly to the Solvency Pool. Real revenue, not emissions.',
    },
    {
        iconPath: 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
        title: 'On-Chain Transparency',
        description: 'Treasury wallets are public. Verify balances anytime. Real-time dashboard shows pool size and redemption value.',
    },
    {
        iconPath: 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z',
        title: 'Protective Mechanisms',
        description: '3-month cliff, 30% treasury cap, weekly epochs—designed to prevent extraction and smooth demand.',
    },
    {
        iconPath: 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
        title: 'Honest Risk Disclosure',
        description: "wUSD is an algorithmic treasury-backed token. Redemption value is dynamic. No misleading claims—read our full risk docs.",
    },
];

const commitments = [
    'All treasury wallets publicly verifiable',
    'No hidden fees or undisclosed allocations',
    'Weekly redemption value calculations published',
];
</script>

<template>
    <section class="py-20 md:py-28 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight mb-4">
                    FAQs
                </h2>
            </div>

            <div class="space-y-4">
                <div
                    v-for="(faq, index) in faqs"
                    :key="index"
                    class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm"
                >
                    <button
                        class="w-full px-6 py-5 flex items-center justify-between text-left hover:bg-slate-50 transition-colors"
                        @click="openIndex = openIndex === index ? null : index"
                    >
                        <span class="font-semibold text-slate-900 pr-8">{{ faq.question }}</span>
                        <svg
                            :class="[
                                'w-5 h-5 text-slate-400 transition-transform duration-200 flex-shrink-0',
                                openIndex === index && 'rotate-180',
                            ]"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div
                        :class="[
                            'overflow-hidden transition-all duration-300',
                            openIndex === index ? 'max-h-96' : 'max-h-0',
                        ]"
                    >
                        <div class="px-6 pb-5 text-slate-600 leading-relaxed">
                            {{ faq.answer }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10">
                <Link
                    href="/faq"
                    class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-medium transition-colors group"
                >
                    Read all FAQs
                    <svg
                        class="w-4 h-4 transition-transform group-hover:translate-x-1"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </Link>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const openIndex = ref(0);

const faqs = [
    {
        question: 'Can I buy wUSD on an exchange?',
        answer: 'No. wUSD can only be earned through activity.',
    },
    {
        question: 'What type of token is wUSD?',
        answer: "wUSD is an algorithmic treasury-backed token. Its value is determined by Prex Markets' treasury and redemption dynamics.",
    },
    {
        question: 'What happens if I lose a trade?',
        answer: 'You automatically receive a wUSD rebate of up to 10% of the loss.',
    },
    {
        question: 'Why is there a vesting cliff?',
        answer: 'To ensure treasury solvency and prevent early extraction.',
    },
    {
        question: 'How is wUSD different from other reward tokens?',
        answer: "Most reward tokens are inflationary—they're minted from nothing and their value dilutes over time. wUSD is fundamentally different: it's backed by real protocol revenue flowing into the Solvency Pool. 50% of all trading fees go directly to backing wUSD redemptions. This creates sustainable value rather than extractive tokenomics.",
    },
];
</script>

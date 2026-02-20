<template>
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-lg border-b border-slate-200/60">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <Link href="/" class="flex items-center gap-3 group">
                    <img src="/logos/wusd-icon-transparent.png" alt="wUSD" class="w-10 h-10 object-contain" />
                    <span class="text-xl font-semibold text-slate-900 tracking-tight">wUSD</span>
                </Link>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center gap-1">
                    <Link
                        v-for="item in navigation"
                        :key="item.name"
                        :href="item.href"
                        class="px-4 py-2 text-sm text-slate-600 hover:text-slate-900 transition-colors font-medium"
                    >
                        {{ item.name }}
                    </Link>
                </div>

                <!-- CTA Buttons -->
                <div class="hidden md:flex items-center gap-3">
                    <a href="https://app.prex.markets" class="bg-prex-600 hover:bg-prex-700 text-white px-5 py-2.5 rounded-lg font-medium transition-colors">
                        Log In
                    </a>
                    <a href="https://app.prex.markets" class="bg-prex-600 hover:bg-prex-700 text-white px-5 py-2.5 rounded-xl text-sm font-medium transition-colors">
                        Start Earning
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button
                    class="md:hidden p-2 text-slate-600 hover:text-slate-900 transition-colors"
                    @click="mobileMenuOpen = !mobileMenuOpen"
                >
                    <svg v-if="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg v-else class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div
                :class="[
                    'md:hidden overflow-hidden transition-all duration-300',
                    mobileMenuOpen ? 'max-h-[400px] opacity-100' : 'max-h-0 opacity-0'
                ]"
            >
                <div class="py-4 border-t border-slate-200/80">
                    <Link
                        v-for="item in navigation"
                        :key="item.name"
                        :href="item.href"
                        class="block px-4 py-3 text-sm text-slate-600 hover:text-slate-900 transition-colors"
                        @click="mobileMenuOpen = false"
                    >
                        {{ item.name }}
                    </Link>
                    <div class="mt-4 px-4 flex flex-col gap-3">
                        <a href="https://app.prex.markets" class="w-full py-3 text-center text-sm font-medium text-slate-600 border border-slate-200 rounded-xl hover:border-slate-300 transition-colors">
                            Log In
                        </a>
                        <a href="https://app.prex.markets" class="w-full py-3 text-center text-sm font-medium text-white bg-prex-600 hover:bg-prex-700 rounded-xl transition-colors">
                            Start Earning
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const navigation = [
    { name: 'Why wUSD?', href: '/how-it-works' },
    { name: 'How It Works', href: '/how-it-works#mechanics' },
    { name: 'Earn', href: '/earn' },
    { name: 'Transparency', href: '/transparency' },
    { name: 'Whitepaper', href: '/whitepaper' },
];

const mobileMenuOpen = ref(false);
</script>

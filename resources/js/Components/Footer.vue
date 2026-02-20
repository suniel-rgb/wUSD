<template>
    <footer class="relative bg-slate-50 border-t border-slate-200">
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-prex-300/30 to-transparent"></div>

        <div class="container-wide py-16 md:py-20">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-2 md:grid-cols-6 gap-8 md:gap-12">
                <!-- Brand Column -->
                <div class="col-span-2">
                    <Link href="/" class="flex items-center gap-2.5 mb-5 group">
                        <img src="/logos/wusd-logo-transparent.png" alt="wUSD" class="w-9 h-9 object-contain" />
                        <span class="text-xl font-semibold text-slate-900 tracking-tight">wUSD</span>
                    </Link>
                    <p class="text-slate-700 font-medium text-sm mb-2">The User-First Algorithmic Token</p>
                    <p class="text-slate-600 text-sm mb-6 max-w-xs leading-relaxed">
                        Earned through activity. Backed by revenue. Built for real users.
                    </p>
                    <div class="flex gap-3">
                        <a
                            v-for="item in socialLinks"
                            :key="item.name"
                            :href="item.href"
                            class="w-10 h-10 rounded-xl bg-white border border-slate-200 flex items-center justify-center text-slate-400 hover:text-prex-600 hover:border-prex-200 hover:bg-prex-50 transition-all duration-200"
                            target="_blank"
                            rel="noopener noreferrer"
                            :aria-label="item.name"
                        >
                            <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" v-html="item.iconPath"></svg>
                        </a>
                    </div>
                </div>

                <!-- Product -->
                <div>
                    <h3 class="text-xs font-semibold text-slate-800 uppercase tracking-wider mb-4">Product</h3>
                    <ul class="space-y-3">
                        <li v-for="link in footerLinks.product" :key="link.name">
                            <Link :href="link.href" class="text-sm text-slate-600 hover:text-slate-900 transition-colors duration-200">
                                {{ link.name }}
                            </Link>
                        </li>
                    </ul>
                </div>

                <!-- Resources -->
                <div>
                    <h3 class="text-xs font-semibold text-slate-800 uppercase tracking-wider mb-4">Resources</h3>
                    <ul class="space-y-3">
                        <li v-for="link in footerLinks.resources" :key="link.name">
                            <Link :href="link.href" class="text-sm text-slate-600 hover:text-slate-900 transition-colors duration-200">
                                {{ link.name }}
                            </Link>
                        </li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h3 class="text-xs font-semibold text-slate-800 uppercase tracking-wider mb-4">Company</h3>
                    <ul class="space-y-3">
                        <li v-for="link in footerLinks.company" :key="link.name">
                            <a :href="link.href" class="text-sm text-slate-600 hover:text-slate-900 transition-colors duration-200">
                                {{ link.name }}
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h3 class="text-xs font-semibold text-slate-800 uppercase tracking-wider mb-4">Legal</h3>
                    <ul class="space-y-3">
                        <li v-for="link in footerLinks.legal" :key="link.name">
                            <Link :href="link.href" class="text-sm text-slate-600 hover:text-slate-900 transition-colors duration-200">
                                {{ link.name }}
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="mt-14 pt-8 border-t border-slate-200 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-slate-600">&copy; {{ new Date().getFullYear() }} Prex Markets. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium bg-prex-50 text-prex-600 border border-prex-200">
                        <span class="w-1.5 h-1.5 rounded-full bg-prex-500 mr-2 animate-pulse"></span>
                        wUSD Live
                    </span>
                    <span class="text-sm text-slate-700 font-bold">wUSD is an algorithmic treasury-backed token</span>
                </div>
            </div>

            <!-- Disclaimer -->
            <div class="mt-8 pt-6 border-t border-slate-200">
                <p class="text-xs text-slate-400 leading-relaxed max-w-4xl mx-auto text-center">
                    wUSD is an algorithmic treasury-backed token issued by Prex Markets. It is not a fiat currency or security.
                    wUSD cannot be purchased on secondary markets and is earned exclusively through platform activity.
                    Redemption value fluctuates based on protocol revenue, treasury solvency, and redemption demand.
                    Cryptocurrency trading involves significant risk. Users should only participate with funds they can afford to lose
                    and should conduct their own research before engaging with the platform.
                </p>
            </div>
        </div>
    </footer>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

const footerLinks = {
    product: [
        { name: 'How It Works', href: '/how-it-works' },
        { name: 'Earn wUSD', href: '/earn' },
        { name: 'Transparency', href: '/transparency' },
        { name: 'Roadmap', href: '/#roadmap' },
        { name: 'wUSD Whitepaper', href: '/whitepaper' },
    ],
    resources: [
        { name: 'Developers', href: '/developers' },
        { name: 'API Reference', href: '/developers#api' },
        { name: 'FAQ', href: '/faq' },
        { name: 'About Prex Markets', href: 'https://www.prex.markets' },
    ],
    company: [
        { name: 'Contact Us', href: 'mailto:social@wusd.finance' },
        { name: 'Careers', href: '/careers' },
        { name: 'Press', href: '/press' },
    ],
    legal: [
        { name: 'Terms of Service', href: '/legal/terms' },
        { name: 'Privacy Policy', href: '/legal/privacy' },
        { name: 'Risk Disclosure', href: '/legal/risk' },
    ],
};

const socialLinks = [
    { name: 'X (Twitter)', href: 'https://x.com/wUSDFi', iconPath: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />' },
    { name: 'LinkedIn', href: 'https://www.linkedin.com/company/wusdfi/', iconPath: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />' },
    { name: 'Email', href: 'mailto:social@wusd.finance', iconPath: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />' },
];
</script>

<template>
    <div class="pt-20">
        <!-- Hero Section -->
        <section class="section bg-white relative overflow-hidden">
            <div class="absolute inset-0 bg-grid opacity-40" />
            <div class="absolute inset-0 bg-gradient-to-b from-prex-50/30 to-transparent" />
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-prex-100/50 rounded-full blur-3xl" />
            <div class="container-wide relative z-10">
                <div class="max-w-4xl">
                    <Badge variant="prex" class="mb-6">Help Center</Badge>
                    <h1 class="heading-xl mb-6">Frequently Asked <span class="text-gradient">Questions</span></h1>
                    <p class="text-xl text-slate-600 mb-8 leading-relaxed">What wUSD is, how to earn it, how redemption works, and how this algorithmic treasury-backed token works.</p>
                </div>
            </div>
        </section>

        <!-- FAQ Categories -->
        <section class="section bg-slate-50">
            <div class="container-wide">
                <div class="max-w-4xl mx-auto">
                    <div v-for="(category, categoryIndex) in faqCategories" :key="categoryIndex" class="mb-12">
                        <h2 class="heading-md mb-6 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-lg bg-prex-50 border border-prex-200 flex items-center justify-center text-prex-600 text-sm font-bold">{{ categoryIndex + 1 }}</span>
                            {{ category.title }}
                        </h2>
                        <div class="space-y-4">
                            <Accordion
                                v-for="(item, questionIndex) in category.questions"
                                :key="questionIndex"
                                :title="item.question"
                                :default-open="categoryIndex === 0 && questionIndex === 0"
                            >
                                <div class="text-slate-600 whitespace-pre-line">{{ item.answer }}</div>
                            </Accordion>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Still Have Questions -->
        <section class="section bg-white">
            <div class="container-wide">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="heading-lg mb-4">Still Have Questions?</h2>
                    <p class="text-lg text-slate-600 mb-8">Can't find what you're looking for? Reach out to our team.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="mailto:support@prex.markets" class="btn-primary btn-lg inline-flex items-center">Contact Support <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg></a>
                        <a href="https://discord.gg/prex" class="btn-secondary btn-lg">Join Discord</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import Badge from '@/Components/Badge.vue';
import Accordion from '@/Components/Accordion.vue';

const faqCategories = [
    {
        title: 'What is wUSD?',
        questions: [
            { question: 'What is wUSD?', answer: "wUSD is an algorithmic reward asset earned through activity on Prex Markets. It's backed by protocol revenue (trading fees, subscriptions) and can be redeemed for USDT from the Solvency Pool or converted to PREX tokens. Unlike traditional reward tokens, wUSD has real backing and multiple redemption paths." },
            { question: 'What type of token is wUSD?', answer: "wUSD is an algorithmic treasury-backed token. Its value is determined by Prex Markets' treasury and redemption dynamics." },
            { question: 'How does wUSD differ from USDC/USDT?', answer: "Key differences:\n\n• USDC/USDT: Purchased on exchanges, 1:1 backed by fiat reserves, custodial, redeemable for $1\n• wUSD: Earned through activity, backed by protocol revenue, non-custodial, dynamic redemption value\n\nYou buy USDC/USDT. You earn wUSD. Your cost basis for wUSD is zero." },
            { question: 'Can wUSD be worth more than $1?', answer: "Yes, potentially. The redemption value is calculated as: Pool USDT ÷ wUSD Opting to Redeem. If the treasury grows faster than redemptions (or if fewer users redeem), the per-wUSD value could exceed $1. However, this is not guaranteed and depends on protocol performance and user behavior." },
            { question: 'Can wUSD be worth less than $1?', answer: "Yes. If many users redeem simultaneously or if treasury growth slows, the per-wUSD redemption value could be less than $1. This is a key aspect of algorithmic treasury-backed tokens. However, since your cost basis is $0 (you earned it), any positive redemption value is net gain." },
        ],
    },
    {
        title: 'Earning wUSD',
        questions: [
            { question: 'How do I earn wUSD?', answer: "You earn wUSD through Proof-of-Activity:\n\n1. Signup Allocation: New accounts receive a wUSD allocation that unlocks through activity milestones\n2. Trading Volume: Earn wUSD proportional to your trading volume\n3. LossLess™ Rebate: Automatically receive 10% of realized trading losses in wUSD\n4. Referrals: Earn from your referrals' trading activity (multi-level)\n5. Ignite Grants: Community builders can apply for wUSD grants" },
            { question: 'Can I buy wUSD on an exchange?', answer: 'No. wUSD can only be earned through activity.' },
            { question: 'What happens if I lose a trade?', answer: 'You automatically receive a wUSD rebate of up to 10% of the loss.' },
            { question: 'What is the LossLess™ mechanism?', answer: 'LossLess™ automatically rebates up to 10% of your realized trading losses in wUSD (1 wUSD per $1 of loss). For example, if you close a position with a $100 loss, you receive 10 wUSD. This is subject to caps: up to 10 wUSD per loss event, and 100 wUSD lifetime per user account.' },
            { question: 'How does the Golden Ratio unlock work?', answer: "When you sign up, you receive 100 wUSD (initially locked). This allocation unlocks via the Golden Ratio:\n\n• 1 wUSD unlocked per $1 of trading volume\n• Max unlock: 100 wUSD\n• Trade $100 total volume to unlock all 100 wUSD\n\nThis aligns your rewards with genuine platform engagement." },
            { question: 'Is there a cap on how much wUSD I can earn?', answer: "There's no hard cap on total wUSD you can earn from trading volume and referrals. However, LossLess™ rebates have monthly and lifetime caps, and signup allocations are fixed per account. The total wUSD supply is capped at 100M." },
        ],
    },
    {
        title: 'Redemption',
        questions: [
            { question: 'How do I redeem wUSD?', answer: "There are two redemption paths:\n\nPath A: USDT Redemption\n• After 3-month cliff, opt into weekly redemption epoch\n• Redemption value = Pool USDT ÷ Opting wUSD\n• USDT sent within 48 hours of epoch close\n\nPath B: PREX Conversion\n• Available when PREX reaches $1B FDV\n• Convert wUSD to PREX 1:1\n• PREX vests linearly over 6 months" },
            { question: 'Why is there a vesting cliff?', answer: 'To ensure treasury solvency and prevent early extraction.' },
            { question: 'What is the 3-month cliff?', answer: 'wUSD must be held for 3 months from its mint date before becoming eligible for USDT redemption (Path A). This cliff ensures treasury stability by preventing rapid extraction. The cliff does NOT apply to PREX conversion (Path B) once that path opens.' },
            { question: 'How is redemption value calculated?', answer: "Redemption Value = Solvency Pool USDT ÷ wUSD Opting to Redeem in Epoch\n\nExample:\n• Pool: $2,500,000 USDT\n• Opting to Redeem: 8,000,000 wUSD\n• Value per wUSD: $0.31\n\nThe value is calculated at the end of each weekly epoch based on actual opt-in amounts." },
            { question: 'When can I convert to PREX tokens?', answer: 'PREX conversion (Path B) unlocks when the PREX token reaches $1 billion fully diluted valuation (FDV). At that point, you can convert wUSD to PREX at a 1:1 ratio. The converted PREX vests linearly over 6 months to prevent dump pressure.' },
            { question: 'What is the 30% treasury cap?', answer: "For PREX conversion (Path B), there's a 30% treasury cap. If conversions would exceed 30% of treasury reserves, the conversion path auto-suspends and re-enables as reserves replenish. This protects treasury solvency during high-demand periods." },
        ],
    },
    {
        title: 'Treasury & Solvency',
        questions: [
            { question: 'What backs wUSD?', answer: "wUSD is backed by the Solvency Pool, which is funded by protocol revenue:\n\n• Trading fees generated on Prex Markets\n• Platform subscriptions\n• Venture/debt capital (as needed)\n\nAll protocol revenue is split 50/50:\n• 50% → Solvency Treasury (USDT)\n• 50% → Community & Affiliates\n\nThis is real protocol revenue, not inflationary token emissions." },
            { question: 'How can I verify treasury reserves?', answer: "All treasury wallet addresses are public and verifiable on-chain. Visit our Transparency page to see live balances, or independently verify by checking the wallet addresses on block explorers. We're also working toward third-party audits of our smart contracts." },
            { question: 'What happens if the treasury runs low?', answer: "The 3-month cliff, weekly redemption epochs, and 30% treasury cap are designed to prevent rapid depletion. If treasury health declines:\n\n1. Per-wUSD redemption value decreases (self-correcting)\n2. Users may choose to wait for treasury growth\n3. External capital can be injected if needed\n4. PREX conversion path may auto-suspend" },
            { question: 'Is there a minimum redemption amount?', answer: 'Yes. The minimum redemption amount is 100 wUSD per epoch. This reduces transaction overhead and ensures meaningful redemptions.' },
        ],
    },
    {
        title: 'Risks & Limitations',
        questions: [
            { question: 'What are the main risks of holding wUSD?', answer: "Key risks:\n\n1. Redemption value volatility: Value depends on treasury health and redemption demand\n2. Liquidity constraints: 3-month cliff means you can't immediately redeem\n3. Protocol risk: If Prex fails, treasury may not grow\n4. Smart contract risk: Potential vulnerabilities (mitigated by audits)\n5. Regulatory risk: Uncertain regulatory treatment\n\nHowever, since wUSD is earned (not bought), your risk is opportunity cost, not principal loss." },
            { question: 'Can I lose money with wUSD?', answer: 'Since wUSD has a zero cost basis (you earn it, not buy it), you cannot lose principal. Your risk is opportunity cost—the time and activity you invest in earning it. Any positive redemption value you receive is net gain.' },
            { question: 'Is wUSD regulated?', answer: 'wUSD is an algorithmic treasury-backed token, not a security. However, cryptocurrency regulations vary by jurisdiction and are evolving. Users should consult local regulations and tax advisors. Prex Markets operates under applicable laws and is committed to compliance.' },
            { question: 'What if Prex Markets shuts down?', answer: "If Prex Markets were to cease operations:\n\n1. Existing treasury assets would be distributed to wUSD holders according to smart contract terms\n2. On-chain wUSD would remain in your wallet\n3. Redemption mechanisms are encoded in smart contracts (not dependent on Prex servers)\n\nWe're building for longevity, but the decentralized design provides some protection." },
        ],
    },
    {
        title: 'Getting Started',
        questions: [
            { question: 'How do I start earning wUSD?', answer: "1. Create an account at app.prex.markets\n2. Complete identity verification (if required)\n3. Make your first deposit\n4. Start trading on prediction markets\n5. wUSD is automatically credited based on your activity\n\nYou'll receive an initial allocation that unlocks as you hit milestones." },
            { question: 'Is there a referral program?', answer: "Yes. You earn fixed wUSD for every signup across 5 levels:\n\n• Level 1 (Direct): 10 wUSD per signup\n• Level 2: 5 wUSD per signup\n• Level 3: 3 wUSD per signup\n• Level 4: 2 wUSD per signup\n• Level 5: 1 wUSD per signup\n\nThere's no cap on referrals. Share your referral link from your dashboard." },
            { question: 'Where can I see my wUSD balance?', answer: "Your wUSD balance is displayed in your Prex Markets dashboard. You'll see:\n\n• Total wUSD earned\n• Unlocked vs locked balance\n• Redemption eligibility status\n• Earning history and breakdown" },
        ],
    },
];
</script>

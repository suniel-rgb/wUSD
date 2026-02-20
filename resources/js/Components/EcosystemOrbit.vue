<template>
    <div :class="['relative', config.container]">
        <!-- Orbital path rings -->
        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 400 400">
            <!-- Outer dashed ring -->
            <circle
                cx="200"
                cy="200"
                :r="config.orbit + 20"
                fill="none"
                stroke="rgba(59, 130, 246, 0.15)"
                stroke-width="1"
                stroke-dasharray="6 6"
                :class="animated ? 'animate-rotate-slower' : ''"
                style="transform-origin: center"
            />
            <!-- Main orbit path -->
            <circle
                cx="200"
                cy="200"
                :r="config.orbit"
                fill="none"
                stroke="rgba(59, 130, 246, 0.2)"
                stroke-width="2"
            />
            <!-- Inner ring -->
            <circle
                cx="200"
                cy="200"
                :r="config.orbit - 30"
                fill="none"
                stroke="rgba(59, 130, 246, 0.1)"
                stroke-width="1"
                stroke-dasharray="4 8"
            />
        </svg>

        <!-- Connecting lines to center -->
        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 400 400">
            <line
                v-for="(item, index) in items"
                :key="'line-' + index"
                x1="200"
                y1="200"
                :x2="getLineEnd(index).x"
                :y2="getLineEnd(index).y"
                stroke="rgba(59, 130, 246, 0.1)"
                stroke-width="1"
                stroke-dasharray="4 4"
            />
        </svg>

        <!-- Center wUSD logo -->
        <div
            :class="[
                'absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2',
                config.center,
                'flex items-center justify-center z-10',
                animated && 'animate-pulse-slow',
            ]"
        >
            <img
                src="/logos/wusd-logo-transparent.png"
                alt="wUSD"
                class="w-full h-full object-contain"
                style="filter: drop-shadow(0 0 20px rgba(59, 130, 246, 0.25))"
            />
        </div>

        <!-- Orbiting items -->
        <div
            v-for="(item, index) in items"
            :key="item.label"
            :class="[
                'absolute',
                config.iconSize,
                animated && 'animate-float',
            ]"
            :style="{
                left: getPosition(index).x + '%',
                top: getPosition(index).y + '%',
                transform: 'translate(-50%, -50%)',
                animationDelay: item.delay,
            }"
        >
            <!-- Image-based icon -->
            <div v-if="item.image" class="w-full h-full transition-transform duration-300 hover:scale-110">
                <img
                    :src="item.image"
                    :alt="item.label"
                    class="w-full h-full object-contain drop-shadow-lg"
                />
            </div>
            <!-- SVG icon -->
            <div
                v-else
                :class="[
                    'w-full h-full rounded-full',
                    item.color,
                    'flex items-center justify-center',
                    'shadow-lg',
                    'border-2 border-white/20',
                    'transition-transform duration-300 hover:scale-110',
                ]"
            >
                <!-- TrendingUp -->
                <svg v-if="item.iconType === 'trending-up'" :class="[config.iconInner, 'text-white']" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg>
                <!-- Users -->
                <svg v-else-if="item.iconType === 'users'" :class="[config.iconInner, 'text-white']" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4-4v2m22-4a4 4 0 11-8 0 4 4 0 018 0zm-6 8a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <!-- Shield -->
                <svg v-else-if="item.iconType === 'shield'" :class="[config.iconInner, 'text-white']" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                </svg>
                <!-- Building -->
                <svg v-else-if="item.iconType === 'building'" :class="[config.iconInner, 'text-white']" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0H5m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                <!-- ArrowRightLeft -->
                <svg v-else-if="item.iconType === 'arrow-right-left'" :class="[config.iconInner, 'text-white']" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                </svg>
                <!-- Layers -->
                <svg v-else-if="item.iconType === 'layers'" :class="[config.iconInner, 'text-white']" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                </svg>
                <!-- Coins -->
                <svg v-else-if="item.iconType === 'coins'" :class="[config.iconInner, 'text-white']" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="8" cy="8" r="6" stroke-width="2" />
                    <path stroke-width="2" d="M18.09 10.37A6 6 0 1110.34 18M7 6h1v4H7zm8 8h1v4h-1z" />
                </svg>
            </div>
            <!-- Label -->
            <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs text-slate-600 whitespace-nowrap font-medium">
                {{ item.label }}
            </span>
        </div>
    </div>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
    size: { type: String, default: 'lg' },
    variant: { type: String, default: 'full' },
    animated: { type: Boolean, default: true },
});

const orbitItems = {
    full: [
        { image: '/images/tether-logo-transparent.png', label: 'USDT', color: 'bg-transparent', delay: '0s' },
        { image: '/images/prex-logo-transparent.png', label: 'PREX', color: 'bg-transparent', delay: '-3s' },
        { iconType: 'trending-up', label: 'Trading', color: 'bg-blue-500', delay: '-6s' },
        { iconType: 'users', label: 'Referrals', color: 'bg-purple-500', delay: '-9s' },
        { iconType: 'shield', label: 'Treasury', color: 'bg-pusd-500', delay: '-12s' },
        { iconType: 'building', label: 'Platform', color: 'bg-slate-600', delay: '-15s' },
    ],
    treasury: [
        { image: '/images/tether-logo-transparent.png', label: 'USDT Pool', color: 'bg-transparent', delay: '0s' },
        { iconType: 'arrow-right-left', label: 'Fees', color: 'bg-prex-500', delay: '-4s' },
        { iconType: 'shield', label: 'Solvency', color: 'bg-pusd-500', delay: '-8s' },
        { iconType: 'layers', label: 'Revenue', color: 'bg-blue-500', delay: '-12s' },
    ],
    earning: [
        { iconType: 'users', label: 'Signup', color: 'bg-prex-500', delay: '0s' },
        { iconType: 'trending-up', label: 'Trading', color: 'bg-blue-500', delay: '-5s' },
        { iconType: 'shield', label: 'LossLess', color: 'bg-emerald-500', delay: '-10s' },
        { image: '/images/prex-logo-transparent.png', label: 'Grants', color: 'bg-transparent', delay: '-15s' },
    ],
};

const sizeConfig = {
    md: { container: 'w-64 h-64', center: 'w-20 h-20', orbit: 90, iconSize: 'w-10 h-10', iconInner: 'w-5 h-5' },
    lg: { container: 'w-80 h-80 md:w-96 md:h-96', center: 'w-24 h-24 md:w-28 md:h-28', orbit: 120, iconSize: 'w-12 h-12', iconInner: 'w-6 h-6' },
    xl: { container: 'w-96 h-96 md:w-[28rem] md:h-[28rem]', center: 'w-28 h-28 md:w-32 md:h-32', orbit: 150, iconSize: 'w-14 h-14', iconInner: 'w-7 h-7' },
};

const config = computed(() => sizeConfig[props.size]);
const items = computed(() => orbitItems[props.variant]);
const angleStep = computed(() => 360 / items.value.length);

const getLineEnd = (index) => {
    const angle = (angleStep.value * index - 90) * (Math.PI / 180);
    return {
        x: 200 + config.value.orbit * Math.cos(angle),
        y: 200 + config.value.orbit * Math.sin(angle),
    };
};

const getPosition = (index) => {
    const angle = angleStep.value * index - 90;
    const radians = angle * (Math.PI / 180);
    return {
        x: 50 + (config.value.orbit / 2) * Math.cos(radians) * (100 / (config.value.orbit + 50)),
        y: 50 + (config.value.orbit / 2) * Math.sin(radians) * (100 / (config.value.orbit + 50)),
    };
};
</script>

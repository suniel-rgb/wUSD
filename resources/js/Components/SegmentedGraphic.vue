<template>
    <div class="relative inline-flex items-center justify-center">
        <svg
            :width="config.size"
            :height="config.size"
            :viewBox="`0 0 ${config.size} ${config.size}`"
            :class="animated && 'animate-rotate-slower'"
            style="transform: rotate(-90deg)"
        >
            <!-- Background circle -->
            <circle
                :cx="center"
                :cy="center"
                :r="radius"
                fill="none"
                stroke="rgba(0,0,0,0.05)"
                :stroke-width="config.stroke"
            />

            <!-- Segments -->
            <circle
                v-for="(seg, index) in segmentData"
                :key="seg.label"
                :cx="center"
                :cy="center"
                :r="radius"
                fill="none"
                :stroke="seg.color"
                :stroke-width="config.stroke"
                :stroke-dasharray="`${seg.length} ${circumference}`"
                :stroke-dashoffset="-seg.offset"
                class="transition-all duration-500"
                style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1))"
            />

            <!-- Gap separators -->
            <template v-if="items.length > 1">
                <line
                    v-for="(sep, index) in separators"
                    :key="'sep-' + index"
                    :x1="sep.x1"
                    :y1="sep.y1"
                    :x2="sep.x2"
                    :y2="sep.y2"
                    stroke="white"
                    stroke-width="3"
                />
            </template>
        </svg>

        <!-- Center logo -->
        <div
            :class="['absolute flex items-center justify-center', animated && 'animate-pulse-slow']"
            :style="{ width: config.center + 'px', height: config.center + 'px' }"
        >
            <img
                src="/logos/wusd-icon-transparent.png"
                alt="wUSD"
                class="w-full h-full object-contain"
                style="filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.1))"
            />
        </div>

        <!-- Legend -->
        <div class="absolute -bottom-16 left-1/2 -translate-x-1/2 flex gap-4">
            <div v-for="item in items" :key="item.label" class="flex items-center gap-2">
                <div class="w-3 h-3 rounded-full" :style="{ backgroundColor: item.color }" />
                <span class="text-xs text-slate-600 font-medium">
                    {{ item.label }} {{ item.percent }}%
                </span>
            </div>
        </div>
    </div>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
    variant: { type: String, default: 'treasury' },
    size: { type: String, default: 'lg' },
    animated: { type: Boolean, default: true },
});

const segments = {
    treasury: [
        { label: 'Treasury', color: '#3B82F6', percent: 50 },
        { label: 'Community', color: '#FACC15', percent: 50 },
    ],
    features: [
        { label: 'Redeem', color: '#10B981', percent: 25 },
        { label: 'Trade', color: '#3B82F6', percent: 25 },
        { label: 'Protect', color: '#8B5CF6', percent: 25 },
        { label: 'Earn', color: '#FACC15', percent: 25 },
    ],
    split: [
        { label: 'Revenue', color: '#3B82F6', percent: 100 },
    ],
};

const sizeConfig = {
    md: { size: 160, stroke: 20, center: 50 },
    lg: { size: 220, stroke: 28, center: 70 },
    xl: { size: 280, stroke: 36, center: 90 },
};

const config = computed(() => sizeConfig[props.size]);
const items = computed(() => segments[props.variant]);
const radius = computed(() => (config.value.size - config.value.stroke) / 2);
const circumference = computed(() => 2 * Math.PI * radius.value);
const center = computed(() => config.value.size / 2);

const segmentData = computed(() => {
    let offset = 0;
    return items.value.map((item) => {
        const length = (item.percent / 100) * circumference.value;
        const currentOffset = offset;
        offset += length;
        return { ...item, length, offset: currentOffset };
    });
});

const separators = computed(() => {
    return items.value.map((_, index) => {
        const angle = items.value.slice(0, index + 1).reduce((acc, item) => acc + (item.percent / 100) * 360, 0);
        const radians = (angle * Math.PI) / 180;
        return {
            x1: center.value + (radius.value - config.value.stroke / 2) * Math.cos(radians),
            y1: center.value + (radius.value - config.value.stroke / 2) * Math.sin(radians),
            x2: center.value + (radius.value + config.value.stroke / 2) * Math.cos(radians),
            y2: center.value + (radius.value + config.value.stroke / 2) * Math.sin(radians),
        };
    });
});
</script>

<template>
    <div class="relative">
        <!-- Outer glow ring -->
        <div
            v-if="glowing"
            :class="['absolute inset-0 rounded-full', animated && 'animate-pulse-glow']"
            :style="{ background: 'radial-gradient(circle, rgba(59, 130, 246, 0.2) 0%, transparent 70%)' }"
        />

        <!-- Rotating outer ring -->
        <div v-if="animated" class="absolute inset-0 animate-rotate-slower">
            <svg class="w-full h-full" viewBox="0 0 200 200">
                <circle
                    cx="100"
                    cy="100"
                    r="95"
                    fill="none"
                    stroke="rgba(59, 130, 246, 0.25)"
                    stroke-width="1"
                    stroke-dasharray="8 8"
                />
            </svg>
        </div>

        <!-- Main container -->
        <div :class="[config.container, 'relative flex items-center justify-center', animated && 'animate-float-slow']">
            <!-- Logo with transparent background -->
            <img
                src="/logos/wusd-logo-transparent.png"
                alt="wUSD Logo"
                :class="['relative z-10 object-contain', animated && 'hover:scale-105 transition-transform duration-300']"
                :style="{
                    width: '100%',
                    height: '100%',
                    filter: glowing ? 'drop-shadow(0 0 20px rgba(59, 130, 246, 0.4))' : undefined,
                }"
            />
        </div>

        <!-- Orbiting dots -->
        <template v-if="animated">
            <div class="absolute inset-0 animate-orbit">
                <div class="w-3 h-3 rounded-full bg-prex-500 shadow-lg" />
            </div>
            <div class="absolute inset-0 animate-orbit-reverse" style="animation-delay: -5s">
                <div class="w-2 h-2 rounded-full bg-prex-300 shadow-lg" />
            </div>
        </template>
    </div>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
    size: { type: String, default: 'lg' },
    animated: { type: Boolean, default: true },
    glowing: { type: Boolean, default: true },
});

const sizeConfig = {
    md: { container: 'w-24 h-24', logoSize: 60 },
    lg: { container: 'w-32 h-32', logoSize: 80 },
    xl: { container: 'w-48 h-48', logoSize: 120 },
    '2xl': { container: 'w-64 h-64', logoSize: 160 },
    hero: { container: 'w-72 h-72 md:w-96 md:h-96', logoSize: 220 },
};

const config = computed(() => sizeConfig[props.size]);
</script>

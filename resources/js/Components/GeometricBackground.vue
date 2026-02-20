<template>
    <div :class="['relative overflow-hidden', $attrs.class]">
        <!-- Geometric shapes container -->
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <!-- Top-left quarter circle -->
            <svg
                v-if="variant === 'hero' || variant === 'dense'"
                class="absolute -top-20 -left-20 w-80 h-80 opacity-60"
                viewBox="0 0 200 200"
            >
                <path d="M0 200 A200 200 0 0 1 200 0 L0 0 Z" :fill="c.primary" />
            </svg>

            <!-- Top-right circle -->
            <svg
                v-if="variant !== 'minimal'"
                class="absolute -top-10 -right-10 w-48 h-48 md:w-64 md:h-64 opacity-50 animate-float-slow"
                viewBox="0 0 100 100"
            >
                <circle cx="50" cy="50" r="50" :fill="c.secondary" />
            </svg>

            <!-- Bottom-left triangle -->
            <svg
                v-if="variant === 'hero' || variant === 'dense'"
                class="absolute bottom-10 left-10 w-32 h-32 opacity-40 animate-bob"
                viewBox="0 0 100 100"
            >
                <polygon points="50,0 100,100 0,100" :fill="c.accent" />
            </svg>

            <!-- Center-right quarter circle -->
            <svg
                v-if="variant === 'hero'"
                class="absolute top-1/2 -right-32 w-64 h-64 -translate-y-1/2 opacity-30"
                viewBox="0 0 200 200"
            >
                <path d="M200 0 A200 200 0 0 1 0 200 L200 200 Z" :fill="c.primary" />
            </svg>

            <!-- Bottom-right small circle -->
            <svg
                v-if="variant !== 'minimal'"
                class="absolute bottom-20 right-20 w-24 h-24 opacity-60 animate-float"
                viewBox="0 0 100 100"
            >
                <circle cx="50" cy="50" r="50" :fill="c.secondary" />
            </svg>

            <!-- Additional decorative circles for dense variant -->
            <template v-if="variant === 'dense'">
                <svg
                    class="absolute top-1/3 left-1/4 w-16 h-16 opacity-40 animate-float-slower"
                    viewBox="0 0 100 100"
                >
                    <circle cx="50" cy="50" r="50" :fill="c.accent" />
                </svg>
                <svg
                    class="absolute bottom-1/3 right-1/3 w-20 h-20 opacity-30 animate-bob"
                    viewBox="0 0 100 100"
                >
                    <circle cx="50" cy="50" r="50" :fill="c.primary" />
                </svg>
            </template>

            <!-- Dot pattern overlay -->
            <div
                class="absolute inset-0 opacity-30"
                :style="{
                    backgroundImage: `radial-gradient(circle at 1px 1px, ${c.secondary} 1px, transparent 0)`,
                    backgroundSize: '40px 40px',
                }"
            />
        </div>

        <!-- Content -->
        <div class="relative z-10">
            <slot />
        </div>
    </div>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
    variant: { type: String, default: 'section' },
    colorScheme: { type: String, default: 'blue' },
});

const colors = {
    blue: {
        primary: 'rgba(59, 130, 246, 0.08)',
        secondary: 'rgba(37, 99, 235, 0.06)',
        accent: 'rgba(96, 165, 250, 0.1)',
    },
    gold: {
        primary: 'rgba(250, 204, 21, 0.08)',
        secondary: 'rgba(234, 179, 8, 0.06)',
        accent: 'rgba(253, 224, 71, 0.1)',
    },
    mixed: {
        primary: 'rgba(59, 130, 246, 0.08)',
        secondary: 'rgba(250, 204, 21, 0.06)',
        accent: 'rgba(96, 165, 250, 0.1)',
    },
};

const c = computed(() => colors[props.colorScheme]);
</script>

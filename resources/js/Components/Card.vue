<template>
    <div :class="classes">
        <slot />
    </div>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
    variant: { type: String, default: 'default' },
    padding: { type: String, default: 'md' },
});

const variantMap = {
    default: 'shadow-sm',
    hover: 'shadow-sm transition-all duration-300 hover:border-slate-300 hover:shadow-md',
    glow: 'border-blue-200 shadow-[0_0_30px_-10px_rgba(37,99,235,0.15)]',
    pusd: 'border-blue-200 shadow-[0_0_30px_-10px_rgba(37,99,235,0.15)]',
    solid: 'bg-slate-50 border-slate-200 shadow-sm',
};

const paddingMap = {
    sm: 'p-4',
    md: 'p-6',
    lg: 'p-8',
};

const classes = computed(() => [
    'bg-white border border-slate-200 rounded-2xl',
    variantMap[props.variant] || variantMap.default,
    paddingMap[props.padding] || paddingMap.md,
]);
</script>

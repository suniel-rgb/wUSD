<template>
    <div :class="containerClasses">
        <div :class="['font-bold tracking-tight', sizeClass, valueColor]">{{ value }}</div>
        <div class="text-xs text-slate-600 uppercase tracking-widest mt-3 font-medium">{{ label }}</div>
    </div>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
    value: String,
    label: String,
    variant: { type: String, default: 'default' },
    size: { type: String, default: 'default' },
});

const variantBg = { default: 'border-slate-200 bg-white', prex: 'border-prex-200 bg-prex-50/30', pusd: 'border-pusd-200 bg-pusd-50/30' };
const variantGlow = { default: 'hover:shadow-md', prex: 'hover:shadow-md hover:border-prex-300', pusd: 'hover:shadow-md hover:border-pusd-300' };
const variantValue = { default: 'text-slate-900', prex: 'text-prex-600', pusd: 'text-pusd-600' };

const containerClasses = computed(() => [
    'border rounded-2xl text-center transition-all duration-300 shadow-sm',
    props.size === 'large' ? 'p-8 md:p-10' : 'p-6 md:p-8',
    variantBg[props.variant],
    variantGlow[props.variant],
]);
const sizeClass = computed(() => props.size === 'large' ? 'text-4xl md:text-5xl' : 'text-3xl md:text-4xl');
const valueColor = computed(() => variantValue[props.variant]);
</script>

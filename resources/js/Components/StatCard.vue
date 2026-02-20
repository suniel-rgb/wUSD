<template>
    <div :class="containerClasses">
        <div :class="['font-bold tracking-tight', sizeClass, valueColor]">{{ value }}</div>
        <div class="text-sm text-slate-500 mt-2 font-medium">{{ label }}</div>
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

const variantBg = { default: 'border-slate-200 bg-white', prex: 'border-blue-200 bg-blue-50/30', pusd: 'border-blue-200 bg-blue-50/30' };
const variantGlow = { default: 'hover:shadow-md hover:border-slate-300', prex: 'hover:shadow-md hover:border-blue-300', pusd: 'hover:shadow-md hover:border-blue-300' };
const variantValue = { default: 'text-slate-900', prex: 'text-blue-600', pusd: 'text-blue-600' };

const containerClasses = computed(() => [
    'border rounded-2xl text-center transition-all duration-300 shadow-sm',
    props.size === 'large' ? 'p-8 md:p-10' : 'p-6',
    variantBg[props.variant],
    variantGlow[props.variant],
]);
const sizeClass = computed(() => props.size === 'large' ? 'text-3xl md:text-4xl' : 'text-2xl font-bold');
const valueColor = computed(() => variantValue[props.variant]);
</script>

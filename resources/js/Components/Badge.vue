<template>
    <span :class="classes">
        <slot />
    </span>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
    variant: { type: String, default: 'default' },
    size: { type: String, default: 'md' },
});

const variants = {
    default: 'bg-slate-100 text-slate-600 border border-slate-200',
    prex: 'bg-prex-50 text-prex-600 border border-prex-200',
    pusd: 'bg-pusd-50 text-pusd-600 border border-pusd-300',
    success: 'bg-emerald-50 text-emerald-600 border border-emerald-200',
    warning: 'bg-amber-50 text-amber-600 border border-amber-200',
    error: 'bg-red-50 text-red-600 border border-red-200',
};

const sizes = {
    sm: 'px-2.5 py-1 text-[10px]',
    md: 'px-3.5 py-1.5 text-xs',
};

const classes = computed(() => [
    'inline-flex items-center rounded-full font-medium tracking-wide',
    variants[props.variant] || variants.default,
    sizes[props.size] || sizes.md,
]);
</script>

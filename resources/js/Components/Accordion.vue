<template>
    <div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm">
        <button
            class="w-full flex items-center justify-between p-5 text-left hover:bg-slate-50 transition-colors"
            @click="isOpen = !isOpen"
        >
            <span class="text-slate-900 font-semibold pr-4">{{ title }}</span>
            <svg
                :class="[
                    'w-5 h-5 text-slate-400 transition-transform duration-200 flex-shrink-0',
                    isOpen ? 'rotate-180' : ''
                ]"
                fill="none" stroke="currentColor" viewBox="0 0 24 24"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div
            :class="[
                'grid transition-all duration-200',
                isOpen ? 'grid-rows-[1fr]' : 'grid-rows-[0fr]'
            ]"
        >
            <div class="overflow-hidden">
                <div class="p-5 pt-0 leading-relaxed text-slate-600">
                    <slot />
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
    title: { type: String, required: true },
    defaultOpen: { type: Boolean, default: false },
});

const isOpen = ref(props.defaultOpen);
</script>

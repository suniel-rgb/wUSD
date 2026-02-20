<template>
    <div>
        <div :class="['flex', tabListClass]">
            <button
                v-for="tab in tabs"
                :key="tab.id"
                :class="[
                    tabBase,
                    activeTab === tab.id ? tabActive : tabInactive
                ]"
                @click="activeTab = tab.id"
            >
                <span class="flex items-center gap-2">
                    <component v-if="tab.icon" :is="tab.icon" />
                    {{ tab.label }}
                </span>
            </button>
        </div>
        <div class="mt-6">
            <slot :name="activeTab" />
        </div>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue';

const props = defineProps({
    tabs: { type: Array, required: true },
    defaultTab: String,
    variant: { type: String, default: 'default' },
});

const activeTab = ref(props.defaultTab || props.tabs[0]?.id);

const tabListVariants = {
    default: 'bg-slate-100 border border-slate-200 rounded-xl p-1',
    pills: 'flex gap-2',
    underline: 'border-b border-slate-200',
};

const tabStyles = {
    default: {
        base: 'px-4 py-2 rounded-lg text-sm font-medium transition-all',
        active: 'bg-white text-slate-900 shadow-sm',
        inactive: 'text-slate-600 hover:text-slate-700',
    },
    pills: {
        base: 'px-4 py-2 rounded-full text-sm font-medium transition-all border',
        active: 'bg-blue-600 text-white border-blue-600',
        inactive: 'bg-transparent text-slate-600 border-slate-300 hover:text-slate-900 hover:border-slate-400',
    },
    underline: {
        base: 'px-4 py-3 text-sm font-medium transition-all border-b-2 -mb-px',
        active: 'text-slate-900 border-blue-600',
        inactive: 'text-slate-600 border-transparent hover:text-slate-700 hover:border-slate-300',
    },
};

const tabListClass = computed(() => tabListVariants[props.variant]);
const tabBase = computed(() => tabStyles[props.variant].base);
const tabActive = computed(() => tabStyles[props.variant].active);
const tabInactive = computed(() => tabStyles[props.variant].inactive);
</script>

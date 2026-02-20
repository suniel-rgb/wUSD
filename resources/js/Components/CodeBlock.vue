<template>
    <div class="rounded-xl overflow-hidden border border-slate-200 shadow-sm">
        <!-- Header -->
        <div class="flex items-center justify-between px-4 py-3 bg-slate-100 border-b border-slate-200">
            <div class="flex items-center gap-3">
                <div class="flex gap-1.5">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                </div>
                <span v-if="filename" class="text-sm text-slate-600 font-mono">{{ filename }}</span>
            </div>
            <button
                class="p-2 rounded-lg hover:bg-slate-200 text-slate-600 hover:text-slate-700 transition-colors"
                @click="copyCode"
            >
                <svg v-if="!copied" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
                <svg v-else class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </button>
        </div>
        <!-- Code -->
        <div class="bg-slate-900 p-4 overflow-x-auto">
            <pre class="font-mono text-sm"><code v-if="showLineNumbers" class="flex"><span class="select-none pr-4 text-slate-600 text-right min-w-[2.5rem]"><div v-for="(_, i) in lines" :key="i">{{ i + 1 }}</div></span><span class="text-slate-200"><div v-for="(line, i) in lines" :key="i">{{ line || ' ' }}</div></span></code><code v-else class="text-slate-200">{{ code }}</code></pre>
        </div>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue';

const props = defineProps({
    code: { type: String, required: true },
    language: { type: String, default: 'javascript' },
    filename: String,
    showLineNumbers: { type: Boolean, default: false },
});

const copied = ref(false);
const lines = computed(() => props.code.split('\n'));

const copyCode = async () => {
    await navigator.clipboard.writeText(props.code);
    copied.value = true;
    setTimeout(() => { copied.value = false; }, 2000);
};
</script>

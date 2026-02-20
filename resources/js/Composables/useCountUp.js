import { ref, watch } from 'vue';

export function useCountUp(target, duration = 2000, isActive) {
    const count = ref(0);

    watch(isActive, (active) => {
        if (!active) return;

        let start = 0;
        const increment = target / (duration / 16);
        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                count.value = target;
                clearInterval(timer);
            } else {
                count.value = Math.floor(start);
            }
        }, 16);
    });

    return count;
}

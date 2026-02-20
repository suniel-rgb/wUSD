import { ref, onMounted, onUnmounted } from 'vue';

export function useScrollReveal(options = {}) {
    const {
        threshold = 0.1,
        rootMargin = '0px 0px -50px 0px',
    } = options;

    const elementRef = ref(null);
    const isVisible = ref(false);
    let observer = null;

    onMounted(() => {
        if (!elementRef.value) return;

        observer = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    isVisible.value = true;
                    observer.unobserve(entry.target);
                }
            },
            { threshold, rootMargin }
        );

        observer.observe(elementRef.value);
    });

    onUnmounted(() => {
        if (observer) observer.disconnect();
    });

    return { elementRef, target: elementRef, isVisible };
}

export default useScrollReveal;

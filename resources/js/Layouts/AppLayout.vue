<template>
    <div class="min-h-screen bg-white text-slate-700">
        <Navbar />
        <main>
            <slot />
        </main>
        <Footer />
    </div>
</template>

<script setup>
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';
</script>

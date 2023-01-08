<script setup>
import { onMounted, onUnmounted } from "vue";
import NavBar from "../Components/NavBar.vue";
onMounted(() => {
    console.log("Mount Layout");
});
onUnmounted(() => {
    console.log("UnMount Layout");
});
</script>
<template>
    <header>
        <h1 style="text-align: center">Game</h1>
        <NavBar />
    </header>
    <main>
        <slot />
    </main>
</template>
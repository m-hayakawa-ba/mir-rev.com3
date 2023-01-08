<script setup>
    import { onMounted } from "vue";
    import { Head } from "@inertiajs/inertia-vue3";
    defineProps({
        greeting: String,
    });
    onMounted(() => {
        console.log("Welcome Page mounted");
    });
</script>


<template>
    <Head>
        <title>Welcomeページ</title>
        <meta head-key="description" name="description" content="これはトップページです" />
        <meta head-key="keywords" name="keywords" content="Top" />
    </Head>
    <h1>{{ greeting }} Inertia.js</h1>
</template>
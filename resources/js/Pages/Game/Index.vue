<script setup>
    import { Head } from "@inertiajs/inertia-vue3";
    defineProps({
        games: Array,
    });
</script>

<script>
    import GameLayout from "../../Layouts/GameLayout";
    export default {
        layout: GameLayout,
    };
</script>

<template>
    <Head>
        <title>ゲーム一覧</title>
        <meta head-key="description" name="description" content="これはゲーム一覧ページです" />
        <meta head-key="keywords" name="keywords" content="Game" />
    </Head>
    <h1>ゲーム一覧</h1>
    <ul>
        <li v-for="game in games" :key="game.id">{{ game.title }}</li>
    </ul>
</template>
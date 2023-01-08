<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <nav>
        <ul
            style="
                    display: flex;
                    justify-content: space-around;
                    list-style-type: none;
                "
        >
            <!-- 
            <li>
                <Link
                    :href="route('about')"
                    :class="{ active: $page.url === route('about', [], false) }"    
                >About</Link>
            </li>
            <li>
                <Link
                    :href="route('game')"
                    :class="{ active: $page.url === route('game', [], false) }"    
                >Game</Link>
            </li> -->
        </ul>
    </nav>
</template>

<style scoped>
.active {
    font-weight: bold;
    color: navy;
    text-decoration: none;
}
</style>
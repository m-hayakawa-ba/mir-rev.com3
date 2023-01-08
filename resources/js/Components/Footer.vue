<template>
    <footer class="footer background-pattern">
        Copyright (C) 2004-{{ year }}  MIR_Revision
    </footer>
</template>


<script>
    import {usePage} from "@inertiajs/inertia-vue3";
    export default {
        setup() {
            const year = usePage().props.value.year;
            return {
                year,
            }
        }
    };
</script>


<style lang="scss" scoped>
    @import "../../sass/_variable";
    .footer {
        padding: 24px 0;
        width: 100%;
        box-sizing: border-box;
        height: 64px;
        color: #ffffff;
        text-align: center;
        font-size: 14px;
        @media screen and (min-width: $break_point) {
            font-size: 16px;
        }
    }
</style>
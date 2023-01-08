<template>
    <Link :href="route('index')" class="previous-button image-link mt60">
        ◀&nbsp;戻る
    </Link>
</template>


<script>
    import { Link } from "@inertiajs/inertia-vue3";
    export default{

        //ファイル内で使用するコンポーネント
        components: {
            Link,
        },
    }
</script>


<style lang="scss" scoped>
    @import "../../sass/_variable";
    .previous-button {
        display: block;
        margin-right: auto;
        margin-left: auto;
        width: 128px;
        padding: 20px 0 16px;
        background: linear-gradient(135deg, #d2bbab, #be968a);
        color: #271308;
        font-size: 18px;
        text-align: center;
        text-shadow: 0 0 1px #533221;
        outline: solid 2px #533221;
        outline-offset: -4px;
    }
</style>
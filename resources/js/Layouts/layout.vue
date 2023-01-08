<template>
    <Header />
    <main class="content">
        <slot />
    </main>
    <Footer />
</template>


<script>
import Header from "../Components/Header";
import Footer from "../Components/Footer";
export default {

    //ファイル内で使用するコンポーネント
    components: {
        Header,
        Footer,
    },
};
</script>
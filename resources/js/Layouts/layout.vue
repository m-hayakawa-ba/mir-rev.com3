<template>
    <Header />
    <main>
        <slot />
    </main>
    <Footer />
</template>


<script>
import Header from "../Components/Header";
import Footer from "../Components/Footer";
export default {
    components: {
        Header,
        Footer,
    },
};
</script>
<template>
    <div class="bg-success">
        <Header/>
        <Main/>

        <!-- <PostList/> -->
    </div>
</template>

<script>

/* import PostList from '../components/PostList.vue'; */
import Header from '../components/Header.vue';
import Main from '../components/Main.vue';

export default {
    name: "App",
    components: {
        Header,
        Main,
    }
}
</script>

<style lang="scss" scoped>
</style>
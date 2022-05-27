<template>
    <div class="container-fluid">
        <Header/>
        <Main/>

        <h1 class="text-center py-2">Posts</h1>

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

<style scoped>
</style>
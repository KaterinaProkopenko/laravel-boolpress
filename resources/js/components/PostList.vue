<template>
    <div class="row">
        <div class="col-12 text-center">
            <Post v-for="(post, index) in posts" :key="index" :post="post" />
        </div>
    </div>
</template>

<script>
import Post from './Post.vue'

export default {
    name: "PostList",
    components: {
        Post
    },
    data: function() {
        return {
            posts: []
        }
    },
    methods: { 
        getPosts(){
            axios.get('http://localhost:8000/api/posts').then((result)=>{
                console.log(result.data);
                this.posts = result.data;
            }).catch((error)=>{
                console.warn(error);
            });
        }
    },

    created() {
        this.getPosts();
    }
}
</script>

<style scoped>

</style>

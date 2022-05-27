<template>
    <main class="container bg-light rounded overflow-scroll">
        <router-view></router-view>
    </main>
</template>

<script>
export default {
    name: "Main",
    components: {
    }
}
</script>

<style lang="scss" scoped>
    main{
        height: 90vh;
    }
</style>
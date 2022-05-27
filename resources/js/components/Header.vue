<template>
  <header class="bg-success text-white">
      <div class="container h-100">
          <div class="row h-100">
              <div class="col-12 py-3 h-100 d-flex justify-content-between">
                    <div class="left-content">
                        <ul class="nav col-12 mb-2">
                            <li v-for="(navLink, index) in navLinks" :key="index">
                                <router-link class="nav-link px-2 text-light" :to="{ name: navLink.routeName }">
                                    {{ navLink.label }}
                                </router-link>
                            </li>
                        </ul>
                    </div>

                    <div class="right-content">
                        <a class="btn btn-outline-light me-2" href="/home">Login</a>
                    </div>
              </div>
              
              
          </div>
      </div>
  </header>
</template>

<script>
export default {
    name: "Header",
    components: {},
    data: function() {
        return {
            navLinks: [
                {
                    label: 'Home',
                    routeName: 'home'
                },
                {
                    label: 'Posts',
                    routeName: 'posts'
                },
                {
                    label: 'About us',
                    routeName: 'about-us'
                },
                {
                    label: 'Contact us',
                    routeName: 'contact-us'
                }
            ]
        }
    },
}
</script>

<style lang="scss" scoped>
    header{
        height: 10vh;
    }
</style>
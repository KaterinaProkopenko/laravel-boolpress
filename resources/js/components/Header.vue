<template>
  <header class="p-3 bg-dark text-white">
      <div class="container">
          <div class="row">
              <div class="col-12 d-flex justify-content-between">
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

<style>

</style>
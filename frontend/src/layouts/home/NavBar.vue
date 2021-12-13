<template>
    <div>
        <v-app-bar
            id="home-app-bar"
            color='primary'
            height= "90"
        >
            <v-list-item class="logo-laika">
                <router-link to="/" >
                    <!-- <img :src="require('@/assets/logo/Logo1.webp')" alt="logo Argolider" class="m-logo"> -->
                </router-link>
            </v-list-item>

            <v-spacer />
            
            <div class="navbar">
               <!--  <v-tabs
                    class="hidden-sm-and-down"
                    grow
                    background-color="transparent"
                >
                    <v-tab
                        v-for="(name, i) in items"
                        :key="i"
                        :to="{ name }"
                        :exact="name === 'Home'"
                        :ripple="false"
                        active-class="text-white"
                        class="font-weight-normal text-xl-subtitle-1 text-lg-subtitle-2"
                        text
                    >
                        {{ name }}
                    </v-tab>
                </v-tabs>
                <v-app-bar-nav-icon
                    class="hidden-md-and-up"
                    @click="drawer = !drawer"
                /> -->
            </div>
        </v-app-bar>

        <home-drawer
            v-model="drawer"
            :items="items"
        />
    </div>
</template>

<script>
export default {
    name: 'HomeAppBar',

    components: {
        HomeDrawer: () => import('./Drawer'),
    },

    data() {
        return {
            drawer: null,
            items: [
                /* 'Nosotros',
                'Proyectos',
                'Contacto' */
            ],
        }
    },
}
</script>

<style lang="scss">

</style>
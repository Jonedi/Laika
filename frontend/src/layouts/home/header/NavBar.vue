<template>
    <div>
        <v-app-bar
            id="home-app-bar"
            color='white'
            height= "70"
            width="100%"
            class="d-flex justify-center boxsh-none"
        >
            <div class="navbar">
                <v-tabs
                    class="hidden-sm-and-down"
                    centered
                    background-color="transparent"
                >
                    <v-tab
                        v-for="(name, i) in items"
                        :key="i"
                        :to="name.path"
                        :exact="name === 'Home'"
                        :ripple="false"
                        active-class="text-white"
                        class="font-weight-normal text-xl-subtitle-1 text-lg-subtitle-2"
                        text
                    >
                        {{ name.txt }}
                    </v-tab>
                </v-tabs>
                <v-app-bar-nav-icon
                    class="hidden-md-and-up"
                    @click="drawer = !drawer"
                />
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
                {path: 'perro', txt: 'Compra para Perro'},
                {path: 'gato', txt: 'Compra para Gato'},
                {path: 'ofertas', txt: 'Ofertas'},
                {path: 'servicios', txt: 'Servicios'},
                {path: 'blog', txt: 'Blog'},
            ],
        }
    },
}
</script>

<style lang="scss">
#home-app-bar {
    @include mq(max, 960px) {
        .v-toolbar__content { background-color: $cPrimary; }
        .mdi-menu::before { color: white; }
    }
}
.boxsh-none {
    box-shadow: none;
}
</style>
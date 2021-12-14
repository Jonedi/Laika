<template>
    <div>
        <v-app-bar
            id="home-app-bar"
            color='primary'
            height= "70"
        >
            <v-row align="center">
                <v-col cols="3" md="1">
                    <v-list-item class="logo-laika">
                        <router-link to="/" >
                            <v-img
                                :src="require('@/assets/logo/logo1.webp')"
                                alt="logo Laika"
                                class="m-logo"
                                max-width="70px"
                            />
                        </router-link>
                    </v-list-item>
                </v-col>
                <v-col cols="9" md="5">
                    <input type="text" id="browser" name="browser" placeholder="Conoce lo mejor para tu mascota" />
                </v-col>
                <v-col cols="2" class="d-movil"></v-col>
                <v-col cols="2" class="d-movil"></v-col>
                <v-col cols="2" class="d-movil"></v-col>
            </v-row>
        </v-app-bar>
    </div>
</template>

<script>
export default {
    name: 'HomeAppSearcher',
    data() {
        return {
            rules: [v => v.length <= 25 || 'Max 25 characters'],
        }
    },
}
</script>

<style lang="scss" scoped>
#browser {
    width: 100%;
    background-color: white;
    border-radius: 5px;
    height: 30px;
    &:focus-visible { border: none; }
}
</style>
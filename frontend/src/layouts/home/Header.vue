<template>
  <v-container fluid class="pa-0">
    <home-top-bar />
    <home-app-bar />

  </v-container>
</template>

<script>
export default {
    name:"homeHeader",

    components: {
        homeTopBar: () => import('@/layouts/home/TopBar'),
        HomeAppBar: () => import('@/layouts/home/NavBar'),
    }
}
</script>

<style>

</style>
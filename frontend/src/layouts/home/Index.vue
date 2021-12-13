<template>
  <v-app>
      <home-header />
      <home-view />
      <home-footer />
  </v-app>
</template>

<script>
export default {
  name: 'HomeLayout',

  components: {
    HomeHeader: () => import('@/layouts/home/Header'),
    HomeView: () => import('@/layouts/home/View'),
    HomeFooter: () => import('@/layouts/home/Footer')
  },
}
</script>

<style lang="scss">

</style>
<template>
  <v-container fluid class="pa-0">
    <home-top-bar class="d-movil" />
    <div class="pos--div">
      <home-app-searcher class="full-width" />
      <home-app-bar />
    </div>

  </v-container>
</template>

<script>
export default {
    name:"homeHeader",

    components: {
        homeTopBar: () => import('@/layouts/home/header/TopBar'),
        HomeAppSearcher: () => import('@/layouts/home/header/Searcher'),
        HomeAppBar: () => import('@/layouts/home/header/NavBar'),
    }
}
</script>

<style lang="scss">
.d-movil {
    display: none;
    @include mq(min,mg) { display: flex; }
}
.pos--div {
  @include mq(max,mg) {
    display: flex;
    flex-direction: row-reverse;
    .full-width { width: 100% }
  }
}
</style>
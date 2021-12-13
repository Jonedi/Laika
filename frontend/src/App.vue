<template>
  <v-app id="app">
    <router-view/>
  </v-app>
</template>

<script>
export default {
  name: 'app',
  metaInfo: {
    title: 'Argolider',
    titleTemplate: '%a | EAL by John TMarz',
    htmlAttrs: { lang: 'es' },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1'},
    ],
  },
}
</script>

<style lang="scss">

</style>

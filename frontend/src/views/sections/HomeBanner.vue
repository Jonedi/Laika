<template>
  <v-container>
    <v-carousel
      hide-delimiters
      cycle
      height="200"
      class="bg-size"
    >
      <v-carousel-item
        v-for="(item,i) in items"
        :key="i"
        :src="require(`@/assets/imgs/${item}.webp`)"
      ></v-carousel-item>
    </v-carousel>
  </v-container>
</template>

<script>
// import {mapState, actions, mapActions} from 'vuex'


export default {
  data () {
    return {
      items: [
        'banner1', 'banner2', 'banner3',
      ]
    }
  },
  
}
</script>

<style lang="scss" scoped>
.bg-size .v-image__image--cover {
  @include mq(max, mg) {
    background-size: contain ;
  }
}
</style>
<template>
  <section>
  <h1>Banner</h1>
  <p>{{info}}</p>
  </section>
</template>

<script>
import {mapState, actions, mapActions} from 'vuex'

export default {
  created() {
    this.products
  },
  computed: {
  },
  methods: {
  },
  mounted() {
    axios
    .get('http://laika.test/backend/public/products')
    .then(response => (this.info = response))
  }
}
</script>

<style>

</style>
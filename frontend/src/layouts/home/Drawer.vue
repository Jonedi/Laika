<template>
  <v-navigator-drawer>

  </v-navigator-drawer>
</template>

<script>
export default {
    name: 'HomeDrawer',
    props: {
      items: {
        type: Array,
        default: () => ([]),
      },
    },
}
</script>

<style lang="scss">

</style>
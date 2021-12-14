<template>
  <v-navigation-drawer
        top
        color="white"
        fixed
        height="auto"
        width="100%"
        temporary
        v-bind="$attrs"
        v-on="$listeners"
        class="style-drawer"
    >
        <v-list
            shaped
            class="nav-responsive"
        >
            <v-list-item
                v-for="(name, i) in items"
                :key="i"
                :to="name.path"
                :exact="name === 'Home'"
                color="white"
            >
                <v-list-item-content>
                    <v-list-item-title v-text="name.txt" />
                </v-list-item-content>
            </v-list-item>
        </v-list>
    </v-navigation-drawer>
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
.style-drawer {
    position: absolute !important;
    top: 65px !important;
}
</style>
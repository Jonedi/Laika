<template>
  <v-container fluid class="black white--text pa-0">
    <v-row>
        <v-col cols="6" class="pl-12 d-flex">
            <div
                v-for="(item,i) in textBar"
                :key="i"
                class="py-4 d-flex align-center"
            >
                <v-icon
                    small
                    color="white darken-2"
                    class="mx-1"
                >
                    {{item.icon}}
                </v-icon>
                <p class="title__bar mb-0 mx-1">{{item.txt}}</p>
            </div>
        </v-col>
        <v-col cols="3" class="pl-12 d-flex">
            <div class="py-4 d-flex align-center">
                <p class="title__bar mb-0">Llamanos | 3009108496</p>
            </div>
        </v-col>
        <v-col cols="3" class="d-flex justify-end">
            <div class="py-4 d-flex align-center pr-4">
                <p class="title__bar mb-0 pr-2">Escríbenos</p>
                <div
                    v-for="(icon, j) in icons"
                    :key="j"
                >
                    <v-icon
                        small
                        color="white darken-2"
                        class="mx-1"
                    >
                        {{icon}}
                    </v-icon>
                </div>
            </div>
        </v-col>
    </v-row>
</v-container>
</template>

<script>
export default {
    name: "homeTopBar",
    data() {
        return {
            textBar: [
                {
                    icon: 'mdi-shield-check',
                    txt: 'Compras seguras online | '
                },
                {
                    icon: 'mdi-cash-check',
                    txt: 'Compras seguras online | '
                },
                {
                    icon: 'mdi-truck-fast',
                    txt: 'Entregas el mismo día'
                },
            ],
            icons: [
                'mdi-youtube',
                'mdi-facebook',
                'mdi-instagram',
            ]
        }
    },
}
</script>

<style lang="scss">
@import '../../scss/_variables.scss';
.title__bar {
    font-family: $CustenBold;
    font-size: 0.75rem;
}
</style>
<template>
  <v-container>
      <v-row align="center">
          <v-col
            cols="12"
            md="3"
            v-for="(item, i) in info.data.products.stock"
            :key="i"
          >
              <v-card
                :loading="loading"
                class="mx-auto my-12"
                max-width="374"
            >

                <h3>{{item.name}}</h3>

                <v-card-text>
                    <v-row
                        align="center"
                        class="mx-0"
                    >
                        <v-col cols="12">
                            <v-rating
                                :value="item.stars"
                                color="amber"
                                dense
                                half-increments
                                readonly
                                size="14"
                            ></v-rating>
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col cols="6">
                            <p>{{item.price}}</p>
                            <p>{{item.price-(item.price*item.discount)}}</p>
                        </v-col>
                        <v-col cols="6"></v-col>
                    </v-row>
                </v-card-text>

                <v-card-actions>
                    <!-- <v-btn
                        color="primary"
                        block
                        depressed
                        @click="reserve"
                    >
                        Añadir al carrito
                    </v-btn> -->
                    <v-btn
                        class="btn-cart"
                        @click="reserve"
                    >
                        <v-icon
                            dark
                            right
                        >
                            mdi-cart-outline
                        </v-icon>
                        Añadir al carrito
                    </v-btn>
                </v-card-actions>
            </v-card>
          </v-col>
      </v-row>
  </v-container>
</template>

<script>
import axios from "axios";
import { global } from "@/mixins/global.js"

export default {
    data() {
        return {
            loading: false,
            selection: 1,
        }
    },
    mixins: [global],
    methods: {
      reserve () {
        this.loading = true

        setTimeout(() => (this.loading = false), 2000)
      },
    },
    mounted() {
        axios
        .get(`${this.url}/backend/public/products`)
        .then(response => (this.info = response))
    }
}
</script>

<style lang="scss">
.btn-cart {
    width: 100%;
    text-align: center;
    background-color: purple;
    color: white;
    padding: 5px;
    border-radius: 5px;
    cursor: pointer;
}
</style>
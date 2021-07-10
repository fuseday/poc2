<template>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="px-6 py-4 sm:block">
            <inertia-link :href="route('login')" class="app-link text-decoration-none primary--text font-weight-medium d-inline-block mr-4">
                Login
            </inertia-link>

            <inertia-link v-if="canRegister" :href="route('register')" class="app-link text-decoration-none primary--text font-weight-medium d-inline-block">
                Register
            </inertia-link>
        </div>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <v-card
                :loading="loading"
                class="mx-auto my-12"
                max-width="374"
            >
                <template slot="progress">
                    <v-progress-linear
                        color="deep-purple"
                        height="10"
                        indeterminate
                    ></v-progress-linear>
                </template>

                <v-img
                    height="250"
                    src="https://cdn.vuetifyjs.com/images/cards/cooking.png"
                ></v-img>

                <v-card-title>Cafe Badilico</v-card-title>

                <v-card-text>
                    <v-row
                        align="center"
                        class="mx-0"
                    >
                        <v-rating
                            :value="4.5"
                            color="amber"
                            dense
                            half-increments
                            readonly
                            size="14"
                        ></v-rating>

                        <div class="grey--text ms-4">
                            4.5 (413)
                        </div>
                    </v-row>

                    <div class="my-4 text-subtitle-1">
                        $ • Italian, Cafe
                    </div>

                    <div>Small plates, salads & sandwiches - an intimate setting with 12 indoor seats plus patio seating.</div>
                </v-card-text>

                <v-divider class="mx-4"></v-divider>

                <v-card-title>Tonight's availability</v-card-title>

                <v-card-text>
                    <v-chip-group
                        v-model="selection"
                        active-class="deep-purple accent-4 white--text"
                        column
                    >
                        <v-chip>5:30PM</v-chip>

                        <v-chip>7:30PM</v-chip>

                        <v-chip>8:00PM</v-chip>

                        <v-chip>9:00PM</v-chip>
                    </v-chip-group>
                </v-card-text>

                <v-card-actions>
                    <v-btn
                        color="deep-purple lighten-2"
                        text
                        @click="reserve"
                    >
                        Reserve
                    </v-btn>
                </v-card-actions>
            </v-card>

        </div>
    </div>
</template>

<script>
export default {
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
    data: () => ({
        loading: false,
        selection: 1,
    }),
    methods: {
        reserve() {
            this.loading = true

            setTimeout(() => (this.loading = false), 2000)
        },
    },
}
</script>

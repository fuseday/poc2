<template>
    <v-card class="mx-auto" max-width="400">
        <v-list-item two-line>
            <v-list-item-content>
                <v-list-item-title class="text-h5">
                    <slot name="city">
                        San Francisco
                    </slot>
                </v-list-item-title>
                <v-list-item-subtitle>
                    <slot name="time">
                        Mon, 12:30 PM, Mostly sunny
                    </slot>
                </v-list-item-subtitle>
            </v-list-item-content>
        </v-list-item>

        <v-card-text>
            <v-row align="center">
                <v-col
                    class="text-h2"
                    cols="6"
                >
                    <slot name="temperature" :temperatureUnit="this.temperatureUnit">
                        74 º F
                    </slot>
                </v-col>
                <v-col cols="6">
                    <v-img
                        src="https://cdn.vuetifyjs.com/images/cards/sun.png"
                        alt="Sunny image"
                        width="92"
                    ></v-img>
                </v-col>
            </v-row>
        </v-card-text>
    </v-card>
</template>

<script>
export default {
    data: () => ({
        temperatureUnit: 'º C',
    }),
}
</script>

<template>
    <v-card
        class="mx-auto"
        max-width="400"
    >
        <v-img
            class="white--text align-end"
            height="200px"
            src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
        >
            <v-card-title>Most recent joke</v-card-title>
        </v-img>

        <v-card-text class="text--primary">
            {{ joke }}
        </v-card-text>

        <v-card-actions>
            <v-btn
                @click="dd"
                color="orange"
                text
            >
                Explore
            </v-btn>
        </v-card-actions>
    </v-card>
</template>

<script>
export default {
    props: ['joke', 'entrypoint'],
    methods: {
        dd() {
            this.$backend(this.entrypoint, {
                joke: this.joke,
            })
        },
    },
}
</script>

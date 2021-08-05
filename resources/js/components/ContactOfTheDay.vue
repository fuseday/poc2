<template>
    <v-card
        class="mx-auto"
        max-width="344"
    >
        <v-card-text>
            <div>Contact of the day</div>

            <p class="text-h4 text--primary" v-text="contact.first_name + ' ' + contact.last_name"></p>
            <p v-text="contact.city" />
            <div class="text--primary">
                <div class="mb-2">
                    <v-icon>mdi-home</v-icon> {{ contact.address }}
                </div>
                <div>
                    <v-icon>mdi-phone</v-icon> {{ contact.phone }}
                </div>
            </div>
        </v-card-text>
        <v-card-actions>
            <v-btn
                text
                color="deep-purple accent-4"
                @click="findNext"
            >
                Find next
            </v-btn>
        </v-card-actions>
    </v-card>
</template>

<script>
export default {
    computed: {},
    data: () => ({
        contact: {}
    }),
    created() {
        this.findNext()
    },
    methods: {
        findNext() {
            this.$backend('ContactOfTheDay@findNext')
        },
    },
}
</script>

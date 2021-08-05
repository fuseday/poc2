<template>
    <div>
        <v-btn v-if="! clicked" outlined @click="deleteJoke">
            <v-icon> mdi-delete </v-icon>
            <span>{{ text }}</span>
        </v-btn>

        <div v-else> Now that's a joke. Chuck Norris <br> stuff can't be deleted! =) </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        clicked: false,
        text: 'Delete joke',
    }),
    methods: {
        deleteJoke() {
            this.clicked = true
        },
    },
}
</script>

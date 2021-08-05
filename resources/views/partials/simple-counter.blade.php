<x-renderless name="my-counter">

    <v-btn color="warning" fab small dark @click="scope.decrement(2)">
        <v-icon>mdi-minus-circle</v-icon>
    </v-btn>

    @{{ JSON.stringify(scope.count) }}

    <v-btn color="info" fab small dark @click="scope.increment(2)">
        <v-icon>mdi-plus-circle</v-icon>
    </v-btn>


    <v-btn
        class="ma-2"
        outlined
        fab
        color="indigo"
        @click="scope.getJoke"
    >
        <v-icon>mdi-pencil</v-icon>
    </v-btn>

    <div v-text="scope.joke" style="max-width: 500px"></div>

</x-renderless>

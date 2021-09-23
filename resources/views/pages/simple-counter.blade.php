<my-counter>
    <template v-slot="{ count, joke, increment, decrement, getJoke }">
        <div>
            <v-btn color="warning" fab small dark @click="decrement(2)">
                <v-icon>mdi-minus-circle</v-icon>
            </v-btn>

            <span class="mx-6" v-text="count"></span>

            <v-btn color="info" fab small dark @click="increment(10)">
                <v-icon>mdi-plus-circle</v-icon>
            </v-btn>

            <v-btn
                class="ma-2"
                outlined
                fab
                color="indigo"
                @click="getJoke"
            >
                <v-icon>mdi-pencil</v-icon>
            </v-btn>

            <div v-text="joke" style="max-width: 500px"></div>
        </div>
    </template>
</my-counter>

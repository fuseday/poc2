<div>
    <p>Dashboard rendering html and custom components from the backend</p>

    <contact-of-the-day />

    <v-card class="mx-auto" max-width="344">
        <contact-log />
    </v-card>

    <div>
        Whatever I want, <strong> even custom Vue Components </strong>
    </div>

    <reservation-card />


    <login-bar></login-bar>

    <div class="mb-8"> Counter next </div>

    <my-counter>
        <template slot-scope="scope">
            <div>
                <v-btn
                    color="primary"
                    fab
                    small
                    dark
                    @click="scope.increment(1)"
                >
                    <v-icon>mdi-plus-circle</v-icon>
                </v-btn>
                <v-btn @click="scope.increment(1)"> + </v-btn>
                <v-btn @click="scope.decrement(5)"> - </v-btn>
                <v-btn
                    color="warning"
                    fab
                    small
                    dark
                    @click="scope.decrement(2)"
                >
                    <v-icon>mdi-minus-circle</v-icon>
                </v-btn>
                @{{ JSON.stringify(scope.count) }}
            </div>
        </template>
    </my-counter>

</div>

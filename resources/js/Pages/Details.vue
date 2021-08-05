<template>
    <div class="d-flex justify-space-around my-12">

        <my-counter>
            <template slot-scope="scope">
                <div>
                    <v-btn @click="scope.increment(1)"> + </v-btn>

                    {{ JSON.stringify(scope.count) }}

                    <v-btn @click="scope.decrement(5)"> - </v-btn>
                </div>
            </template>
        </my-counter>

        <render-html :html="bladeCounter" />

    </div>
</template>

<script>
import RenderHtml from "../components/RenderHtml";
export default {
    components: {RenderHtml},
    props: ['bladeCounter'],
}
</script>

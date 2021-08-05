<template>
    <v-snackbars
        :objects.sync="messages"
        bottom
        right
    >
        <template v-slot="scope">
            <div class="d-flex flex-no-wrap">
                <div
                    class="d-flex align-items-center"
                >
                    <v-icon class="mr-3 pa-0">
                        {{ scope.message.icon }}
                    </v-icon>
                </div>
                <div
                    class="d-flex align-items-center"
                    v-html="scope.message.text">
                </div>
            </div>
        </template>
    </v-snackbars>
</template>
<script>
/**
 * var toastObject = { message: { icon: 'mdi-information', text: 'This is a sample text' }, color: 'blue' }
 * @see https://github.com/Aymkdn/v-snackbars
 */
import VSnackbars from "v-snackbars"
export default {
    components: {
        "v-snackbars": VSnackbars
    },
    data: () => ({
        messages: [],
    }),
    created() {
        // Listen for notify events
        window.EventBus.$on('notify', this.notify)
    },
    methods: {
        notify(payload) {
            this.messages.push(payload)
        },
    },
}
</script>

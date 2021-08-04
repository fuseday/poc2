<template>
    <v-container>
        <render-html :html="html"/>
    </v-container>
</template>

<script>
export default {
    props: {
        html: {type: String, default: ''}
    },
}
</script>

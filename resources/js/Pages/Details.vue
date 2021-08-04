<template>
    <div class="d-flex justify-space-around my-12">
        <div> Fooooo bar cb </div>
        <div> Fooooo bar cb </div>
        <div> Fooooo bar cb </div>
    </div>
</template>

<script>
export default {
    props: {
    },
    data: () => ({
        loading: false,
        selection: 1,
    }),
    mounted() {
        setTimeout(() => this.reserve(), 300)

    },
    methods: {
        reserve() {
            this.loading = true
            this.$torque.bff(this, 'Foo@bar', {
                foo: 'bar',
            }).then(() => this.loading = false)
        },
        reserve2() {
            this.loading = true
            this.$backend( 'Foo@bar', {
                foo: 'bar',
            }).then(() => this.loading = false)
        },
    },
}
</script>

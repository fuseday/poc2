<template>
    <v-list shaped>
        <v-subheader>MAIN MENU</v-subheader>
        <v-list-item-group
            v-model="selectedItem"
            color="primary"
        >
            <v-list-item v-for="(item, i) in items" :key="i" @click="navigateTo(item)">
                <v-list-item-icon>
                    <v-icon v-text="item.icon"></v-icon>
                </v-list-item-icon>
                <v-list-item-content>
                    <v-list-item-title v-text="item.text"></v-list-item-title>
                </v-list-item-content>
            </v-list-item>
        </v-list-item-group>

        <login-bar class="pt-16" />
    </v-list>
</template>

<script>
export default {
    data: () => ({
        selectedItem: null,
        items: [
            { href:'/', text: 'Home', icon: 'mdi-view-dashboard-variant-outline' },
            { href:'/dashboard', text: 'Dashboard', icon: 'mdi-view-dashboard-variant-outline' },
            { href:'/remote-components', text: 'Remote Components', icon: 'mdi-access-point' },
            { href:'/details', text: 'Details', icon: 'mdi-account-details' },
            { href:'/secret', text: 'Secret', icon: 'mdi-lock' },
            { href:'/html', text: 'Html', icon: 'mdi-language-html5' },
            { href:'/permission-manager', text: 'Permission Manager', icon: 'mdi-lock' },
        ],
    }),
    methods: {
        navigateTo(item) {
            this.$inertia.visit(item.href, {
                method: 'get',
            })
        },
    },
}
</script>

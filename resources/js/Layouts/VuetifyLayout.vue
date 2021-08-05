<template>
    <v-app>
        <v-navigation-drawer
            v-model="drawer"
            app
        >
            <sidebar-menu/>
        </v-navigation-drawer>

        <v-app-bar app>
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

            <v-toolbar-title>Application</v-toolbar-title>
        </v-app-bar>

        <v-main>
            <slot/>
        </v-main>
        <t-notifications></t-notifications>
    </v-app>
</template>

<script>
import TNotifications from "../components/TNotifications";

export default {
    components: {TNotifications},
    data: () => ({
        drawer: false,
    }),
}
</script>

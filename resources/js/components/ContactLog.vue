<template>
    <div>
        <ul>
            <li v-for="(contact, i) in contacts" :key="i"> There was a {{ contact.first_name }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    data: () => ({
        contacts: [],
    }),
    created() {
        window.EventBus.$on('new-contact', (contact) => this.contacts.push(contact))
    },
}
</script>

<template>
    <div class="d-flex justify-end py-4 pr-6">
        <inertia-link :href="route('login')" class="app-link text-decoration-none primary--text font-weight-medium d-inline-block mr-4">
            Login
        </inertia-link>

        <inertia-link :href="route('register')" class="app-link text-decoration-none primary--text font-weight-medium d-inline-block">
            Register
        </inertia-link>
    </div>
</template>

<script>
export default {
}
</script>

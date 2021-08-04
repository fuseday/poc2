<template>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <demo-card></demo-card>
        </div>
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
}
</script>

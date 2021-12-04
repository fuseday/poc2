<template>
    <div>
        <div class="d-flex justify-center">
            <my-card style="width: 320px"></my-card>
        </div>

        <ContactOfTheDay class="mt-16"/>

        <WelcomeJoke :joke="joke" :entrypoint="entrypoint" class="mt-16"/>
    </div>
</template>

<script>
export default {
    props: ['joke', 'entrypoint'],
}
</script>

<template>
    <div>
        <ContactOfTheDay class="mt-16"/>

        <WelcomeJoke :joke="joke" :entrypoint="entrypoint" class="mt-16"/>
    </div>
</template>

<script>
export default {
    props: ['joke', 'entrypoint'],
}
</script>

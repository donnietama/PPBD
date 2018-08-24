<template>
<section class="hero is-medium is-light is-bold">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                {{ title }}
            </h1>
            <h2 class="subtitle">
                {{ subtitle }}
            </h2>
        </div>
    </div>
</section>
</template>
<script>
export default {
    props: ['title', 'subtitle'],
}
</script>

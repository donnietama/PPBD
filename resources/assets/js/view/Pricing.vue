<template>
    <main>
        <hero-component-full :title="title" :subtitle="subtitle"></hero-component-full>
    </main>
</template>
<script>
export default {
    data() {
        return {
            title: `This is the pricing page's title`,
            subtitle: `This is the pricing page's subtitle`,
        }
    }
}
</script>

<template>
    <main>
        <hero-component :title="title" :subtitle="subtitle"></hero-component>
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-header-title">
                                    About Component
                                </div>
                            </div>

                            <div class="card-content">
                                I'm an about component.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>

<script>
    export default {
        data() {
            return {
                title: 'This is about page.',
                subtitle: 'This is a subtitle for about page.'
            }
        }
    }
</script>

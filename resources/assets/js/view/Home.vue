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
                                    Home Component
                                </div>
                            </div>

                            <div class="card-content">
                                I'm an home component.
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
                title: `This is a home component's title.`,
                subtitle: `This is a home component's subtitle.`
            }
        }
    }
</script>

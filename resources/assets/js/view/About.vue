<template>
    <main>
        <hero-component>
            <h1 class="title" slot="title">
                About's page title.
            </h1>
            <h2 class="subtitle" slot="subtitle">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, animi eius architecto dolor distinctio dolorem alias, consequuntur culpa aspernatur rerum recusandae sapiente dolores aperiam maiores cupiditate obcaecati beatae suscipit vero.
            </h2>
        </hero-component>
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

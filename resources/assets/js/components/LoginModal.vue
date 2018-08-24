<template>
    <div v-if="showLoginModal" :class="'modal is-active'">
    <div class="modal-background"></div>
        <div class="modal-content login-modal">
            <!-- Any other Bulma elements you want -->
            <div class="box">
                <header class="login-modal-head">
                    <div class="content">
                        <h1>Masuk</h1>
                    </div>
                </header>
                <div class="is-divider" data-content="Pemilik"></div>
                <section class="login-modal-body">
                    <div class="content">
                        <form action="#" method="post">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input" type="email" placeholder="Email">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-check"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="password" placeholder="Password">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field">
                                <p class="control">
                                    <button class="button is-primary is-fullwidth">Masuk</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </section>
                <div class="is-divider" data-content="Masuk Sebagai"></div>
                <footer class="login-modal-foot has-text-centered">
                    <div class="field">
                        <div class="control">
                            <button class="button is-info is-fullwidth">
                                Siswa
                            </button>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-danger is-fullwidth">
                                Pengajar
                            </button>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close" @click="$emit('close')"></button>
    </div>
</template>
<style lang="scss" scoped>
.login-modal {
    width: 400px;
    .login-modal-body, .login-modal-foot {
        padding: 5px 0px;
    }
}
</style>

<script>
export default {
    props: ['showLoginModal']
}
</script>


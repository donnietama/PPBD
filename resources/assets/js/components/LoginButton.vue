<template>
    <figure>
        <button type="button" class="button is-primary" @click="showLoginModal = true">
            <span class="icon is-small">
                <i class="fas fa-sign-in-alt"></i>
            </span>
            <span>Sign in</span>
        </button>
        <login-modal :showLoginModal="showLoginModal" @close="showLoginModal = false"></login-modal>
    </figure>
</template>
<script>
export default {
    data() {
        return {
            showLoginModal: false,
        }
    }
}
</script>


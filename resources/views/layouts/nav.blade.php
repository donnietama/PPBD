<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
        </a>
    </div>
    <div class="navbar-menu">
        <div class="navbar-start">
            <!-- Navigation bar using Vue Router -->
            <router-link class="navbar-item" tag="a" to="/" exact>
                Home
            </router-link>
            <router-link class="navbar-item" tag="a" to="/about" exact>
                About
            </router-link>
            <router-link class="navbar-item" to="/pricing" exact>
                Pricing
            </router-link>
            <!--END: Navigation bar using Vue Router -->
        </div>
        
        <!-- Login button -->
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field is-grouped">
                    <div class="control">
                        <login-button></login-button>
                    </div>
                    <div class="control">
                        <a class="button is-info is-outlined">
                            <span class="icon is-small">
                                <i class="fas fa-book"></i>
                            </span>
                            <span>Tutorials</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Login button -->
    </div>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
    </a>
</nav>
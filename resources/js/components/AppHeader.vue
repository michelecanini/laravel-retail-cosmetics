<script>
export default {
    name: 'AppHeader', 
    data() {
        return {
            menuItems: [
                {
                    label: 'Accedi',
                    routeName: 'login'
                },
                {
                    label: 'Registrati',
                    routeName: 'register'
                },
            ]
        }
    },
    created() {
        
    },
    methods: {
        
    },
}

</script>

<template>
    <nav class="navbar navbar-expand-lg bg-light border-bottom custom-navbar">
        <div class="container-md">
            <a class="navbar-brand" href="/"><h1 class="logo">RETAIL COSMETICS</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto mt-1">
                    <li class="nav-item" v-for="(item, index) in menuItems" :key="index">
                        <a class="nav-link" :href="item.routeName">{{ item.label }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<style scoped>

.custom-navbar {
    height: 80px;
    margin-bottom: none;
}

.navbar{
    margin-bottom: 0px;
}

a{
    margin-top: 20px;
}

.nav-link {
    font-size: 20px;
}

.navbar-nav > li > a {
    padding-top: 0px;
}

.logo {
    font-size: 24px; 
}

</style>
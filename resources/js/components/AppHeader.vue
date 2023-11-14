<script>
export default {
    name: 'AppHeader', 
    data() {
        return {
            isCollapsed: false,
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost:8000">RETAIL COSMETICS</a>
            <button class="navbar-toggler" type="button" @click="isCollapsed = !isCollapsed">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" :class="{ show: isCollapsed }">
                <ul class="navbar-nav ms-auto mt-3">
                    <li class="nav-item" v-for="(item, index) in menuItems" :key="index" :class="{active: item.routeName === 'home', disabled: item.disabled}">
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
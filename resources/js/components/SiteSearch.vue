<template>

    <div class="site-search">
        <i class="fas fa-search"></i>
        <input type="text" class="search-field">
    </div>

</template>

<script>

    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }

</script>

<style scoped>

    .site-search {
        z-index: 1500;
        position: fixed;
        top: 12px;
        right: 28px;
    }

    .search-field {
        height: 45px;
        width: 200px;
        border-radius: 12px;
        border-style: none;
        border: 1px solid rgba(0, 0, 0, 0.125);
        padding-left: 36px;
        font-size: 16px;
        color: #343a40;
    }

    i {
        position: relative;
        top: 3px;
        left: 35px;
        font-size: 21px;
    }

    @media only screen and (max-width: 1199px) {

        .site-search {
            top: 9px;
            right: 55px;
        }
    }

    @media only screen and (max-width: 520px) {

        .search-field {
            width: 180px;
        }
    }

</style>

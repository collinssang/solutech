
<template>

    <nav class="navbar">
    <ul>
    <li>
        <a class="navbar-brand" href="orders">Orders</a>
        </li>
        <li>
        <a class="navbar-brand" href="products">Products</a>
    	</li>
    	<li>
        <a class="navbar-brand" href="suppliers">Suppliers</a>
    	</li>
    	<li>
        <a class="navbar-brand" href="tokens">Get Tokens</a>
    	</li>
    	</ul>
    </nav>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

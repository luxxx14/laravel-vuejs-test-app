<template>
    <div>
        <h1>Vue Router Demo App</h1>

        <p>
            <router-link :to="{ name: 'documents' }">Documents list</router-link> |
            <router-link :to="{ name: 'document-create' }">Document create</router-link>

        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>
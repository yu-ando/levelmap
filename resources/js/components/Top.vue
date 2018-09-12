<template>
    <div class="container">
        Top Component.
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
        },
        created() {
            console.log('Component created.');
            this.test();
        },
        data() {
            return {
                articles: []
            }
        },
        methods: {
            test() {
                console.log('test method call.');
            }
        }
    }
</script>

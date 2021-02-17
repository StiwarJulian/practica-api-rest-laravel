<template>
    <div class="container">
        Hola
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            posts: null
        };
    },
    mounted() {
        this.getPosts();
    },
    methods: {
        getPosts: function() {
            axios.get("api/v1/posts").then(response => {
                this.posts = response.data;
            });
        }
    }
};
</script>

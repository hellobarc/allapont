<template>
    <div class="hello ">
        <h2 class="edTit">ERROR 404</h2>
        <img width="300" v-bind:src="image"/>
        <h2 class="edTit">SpongeGoose</h2>
    </div>
</template>

<script>
export default {
    data() {
        return {
        image: "/img/sp.png",
        }
    }
};
</script>

<style scoped>
.hello{
    margin: auto;
    margin-top: 2%;
    width: 80%;
    padding: 10px;
    text-align: center;
    background: #242526;
    border-radius: 10px;
}
</style>
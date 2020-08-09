<template>
    <div id="app">
        <tree :nodes="treeData"/>
    </div>
</template>

<script>
    import tree from "./tree";

    export default {
        props: ['items'], // 1. определяем переданный массив данных в jsone
        name: "App",
        components: {
            tree
        },
        data() {
            return {
                treeData: JSON.parse(this.items) //2.разбираем json и прокидываем далее в компоненты
            };
        },
    };
</script>

<style scoped>

    #app {
        /*font-family: "Avenir", Helvetica, Arial, sans-serif;*/
        /*-webkit-font-smoothing: antialiased;*/
        /*-moz-osx-font-smoothing: grayscale;*/
        /*text-align: center;*/
        /*color: #2c3e50;*/
        /*margin-top: 60px;*/
        /*display: flex;*/
    }


</style>
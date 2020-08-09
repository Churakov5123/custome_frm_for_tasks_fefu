<template>
    <ul class="tree-list">
        <node v-for="node in nodes" :key="node.name" :node="node"/>
    </ul>
</template>
<script>
    import node from "./node";
    export default {
        props: {
            nodes: Array
        },
        components: {
            node
        }
    };
</script>
<style>
    ul {
        padding: 0;
        margin-left: 20px;
        /*border: 1px solid black;*/
    }
</style>
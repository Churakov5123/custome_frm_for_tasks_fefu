<template>
    <li class="node-tree">
        <span class="label"> {{" "}}{{node.name}}{{" "}}{{"/"}}{{node.alias}}</span>
        <tree v-if="showChildren" :nodes="childrenNodes"/>
    </li>
</template>
<script>
    export default {
        name: "node",
        props: {
            node: Object
        },
        components: {
            tree: () => import("./tree")
        },
        computed: {
            showChildren() {
                return !!this.childrenNodes.length;
            },
            childrenNodes() {
                return this.node.children || [];
            }
        }
    };
</script>

<style >
</style>
<template>
    <li class="node-tree">
<!--        Выбор отрисвоки под каждый  вывод исход из задачи-->
        <span v-if="node.alias" class="label">{{" "}}{{node.name}}{{" "}}{{"/"}}{{node.alias}}</span>
        <span v-else class="label" >{{" "}}{{node.name}}</span>


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
<template>
    <div class="card" :class="{ 'no-padding': noPadding }">
        <div class="card-header">{{ heading }}</div>
        <div class="card-body inner"><slot></slot></div>
    </div>
</template>

<script>
    export default {
        props: {
            heading: {
                type: String,
                // default: function () {
                //     return 'Example Component'
                // }
            },
            noPadding:{
                type: Boolean,
                default: function () { 
                    return false
                }
            }
        }
    }
</script>
<style scoped>
.inner a{
    color: gray;
    text-decoration: none;
}
.inner ul li:hover{
     border-left: 2px solid black;
}
.no-padding > .card-body {
    padding: 0;
}
</style>
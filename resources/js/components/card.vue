<template>
    <div class="card">
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
            }
        }
    }
</script>
<style scoped>
.inner{
    padding-left: 0px;
}
.inner a{
    color: gray;
    text-decoration: none;
}
.inner ul li:hover{
     border-left: 2px solid black;
}
</style>
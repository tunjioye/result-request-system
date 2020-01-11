<template>
    <div class="card" :class="{ 'no-padding': noPadding }">
        <div class="card-header">{{ heading }}</div>
        <div class="card-body"><slot></slot></div>
    </div>
</template>

<script>
    export default {
        props: {
            heading: {
                type: String,
                default: function () {
                    return 'Card Title'
                }
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

<style lang="scss" scoped>
    .card {
        margin-bottom: 1.5rem;

        &.no-padding {
            .card-body {
                padding: 0;
            }
        }
    }
</style>

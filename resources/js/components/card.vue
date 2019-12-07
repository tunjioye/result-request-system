<template>
    <div class="card">
        <div class="card-header">{{ heading }}</div>

        <div class="card-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            heading: {
                type: String,
                default: function () {
                    return 'Example Component'
                }
            }
        }
    }
</script>

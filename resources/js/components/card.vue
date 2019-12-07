<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
            </div>
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

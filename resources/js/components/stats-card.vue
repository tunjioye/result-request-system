<template>
    <div class="stat-card">
        <h4>{{ title }}</h4>
        <div>{{ description }}</div>
        <div><slot></slot></div>
    </div>
</template>

<script>
    export default {
        props: {
            title: {
                type: String,
                default: function () {
                    return 'blah blah blah'
                }
            },
            description: {
                type: String,
                default: function () {
                    return 'stats description'
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    .stat-card {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 1.5rem;
        text-align: left;
        text-decoration: none;
        color: #090910;
        background: #fff;
        box-shadow: 0 20px 30px -16px rgba(9,9,16,.2);
        transition: all .3s ease;

        &:hover {
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
            box-shadow: 0 10px 20px 0 rgba(9,9,16,.15);
        }
    }
</style>

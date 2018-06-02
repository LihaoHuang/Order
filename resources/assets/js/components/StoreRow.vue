<template>
    <tr>
        <td>{{ info.name }}<span class="badge badge-primary">{{ info.classify }}</span></td>
        <td>{{ info.address }}</td>
        <td><a class="btn btn-primary" :href="'/store/'+info.id">我要訂購</a></td>
    </tr>
</template>

<script>
    export default {
        name: "StoreRow",
        props: {
            info: {
                type: Object,
                required: true
            }
        }

    }
</script>

<style scoped>

</style>
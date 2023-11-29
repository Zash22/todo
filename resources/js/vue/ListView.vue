<template>
        <div v-for="(item, index) in items" :key="index" >
            <list-task
                :item="item"
                class="item"
                v-on:taskcompleted="$emit('reloadList')"
                v-on:itemdeleted="$emit('reloadList')"
            />
        </div>
</template>
<script>
import listTask from "./ListTask.vue";
export default {
    props: ['items'],
    components: {
        listTask
    }
}
</script>
<style scoped>

.item {
    background: silver;
    padding: 5px;
    margin-top: 15px;
}

</style>

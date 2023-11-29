<template>
    <div class="todoContainer">
        <div class="heading">
            <h2 id="title">
                Todo List
            </h2>
        </div>
        <add-task-form v-on:reloadList="loadItems()" />
        <list-view :items="items" v-on:reloadList="loadItems()"/>
    </div>
</template>
<script>
import axios from 'axios';
import addTaskForm from './AddTaskForm.vue';
import listView from "./ListView.vue";
export default {
    components: {
      addTaskForm,
      listView
    },
    data: function() {
        return {
            items: []
        }
    },
    created() {
        this.loadItems();
    },
    methods: {
        loadItems: function() {
            axios.get('/api/items')
                .then((response) => {
                    this.items = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
}
</script>

<style scoped>
.todoContainer {
    width: 350px;
    margin: 20px;
}

.heading {
    background: cadetblue;
    padding: 5px;
}

#title {
    text-align: center;
}
</style>

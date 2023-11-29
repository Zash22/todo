<template>
    <div class="item">
        <input
            type="checkbox"
            @change="markAsComplete()"
            v-model="item.completed"
        />
        <span   :class="[item.completed ? 'completed' : '' , 'itemText']" > {{item.name}} </span>
        <button @click="deleteTask()" class="trashcan">
        <font-awesome-icon icon="trash"/>
        </button>
    </div>
</template>
<script>
import axios from "axios";
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

export default {
    components: {FontAwesomeIcon},
    props: ['item'],
    methods: {
            deleteTask: function() {
                axios.delete('/api/item/' + this.item.id, {
                    item: this.item
                })
                .then(response => {
                        if (response.status == '200') {
                            this.$emit('itemdeleted');
                        }
                        this.items = response.data.data;
                })
                .catch(function (error) {
                        console.log(error);
                });

            },
            markAsComplete: function () {
                axios.put('/api/item/' + this.item.id ,{
                    item: this.item,
                })
                .then( response => {
                    if (response.status == 200) {
                        this.$emit('taskcompleted');
                    }
                })
                .catch(function (error) {
                    console.log(error);
                })
            }

        }
}
</script>

<style>
.completed {
    text-decoration: line-through;
    color: red;
}

.itemText {
    width: 100%;
    margin-left: 10px
}
.item {
    display: flex;
    justify-content: center;
    align-items: center;
}
.trashcan {
    background: red;
}
</style>

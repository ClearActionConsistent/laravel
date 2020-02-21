<template>
   <button v-on:click="editTape">Edit</button>
</template>

<script>
    export default {
        name: 'create-button-component',
        props:['id'],
        data:{
          id: ''
        },
        methods:{
          editTape(){
            alert(this.id);
          }
        }
    }
</script>

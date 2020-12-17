<template>

    <div>
        <button v-if="tipo == 'adicionar'" type="button" 
        class="btn btn-dark" 
        data-toggle="modal" 
        v-bind:data-target="url"
        style="margin-top: 5px; margin-left: 590px; background-color:#55595c; color:white">
            Adicionar
        </button>

        <button v-if="tipo == 'consultar'" type="button" 
        class="btn btn-dark btn-acao" 
        data-toggle="modal" 
        v-bind:data-target="url" 
        style="margin-top: 10px; margin-left: 30px; background-color:#55595c; color:white">
            Consultar
        </button>

        <button v-if="tipo == 'editar'" type="button" 
        class="btn btn-dark btn-acao" 
        data-toggle="modal" 
        v-bind:data-target="url" 
        style="margin-top: 5px; margin-left: 30px; background-color:#061d33; color:white">
            Editar
        </button>

        <button v-if="tipo == 'deletar'" type="button" 
        class="btn btn-dark btn-acao" 
        data-toggle="modal" 
        v-bind:data-target="url" 
        style="margin-top: 5px; margin-left: 30px; background-color:#3f1616; color:white">
            Deletar
        </button>
        
    </div>

</template>

<script>
export default {
    props:['nome-modal', 'tipo'],
    computed:{
        url: function () {
      return '#' + this.nome-modal
    }
    }
}

</script>
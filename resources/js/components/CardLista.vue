<template>
<div>
    <div class="col-md-12" >
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <slot></slot>                         
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                    <title>Ações</title>
                    <rect width="100%" height="100%" fill="#55595c"/>
                <a v-bind:href="consultar"><text x="20%" y="25%" fill="#eceeef" dy=".3em">- Consultar </text></a>
                <a v-bind:href="editar"><text x="20%" y="50%" fill="#eceeef" dy=".3em">- Editar</text></a>
                <a v-if="deletar" v-bind:href="deletar"><text x="20%" y="75%" fill="#eceeef" dy=".3em">- Deletar</text></a>
                </svg>
            </div>
        </div>
    </div>    

</div>
</template>

<script>
export default {
    props:['consultar', 'editar', 'deletar']
}
</script>

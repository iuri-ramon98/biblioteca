<template>
<div class="group">
    <div class="col'-md-10 cartao" >
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <slot name="conteudo"></slot>                         
            </div>
        </div>
    </div>    
    <div class="acoes">
        <slot name="acoes"></slot>
    </div>
</div>
</template>

<script>
export default {
    
}
</script>

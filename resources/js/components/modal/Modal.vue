<template>
    <div class="modal fade" v-bind:id="nome-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <slot></slot>
            </div>
            </div>
          </div>
        </div>
      </div>
</template>

<script>
export default {
    props:['nome-modal']
}
</script>

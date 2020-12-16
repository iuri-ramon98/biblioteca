<template>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" v-bind:href="url"> {{ titulo }} </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <slot></slot>
      </div>
    </div>
  </nav>
</template>

<script>
    export default {
        props:['titulo', 'url']
    }
</script>
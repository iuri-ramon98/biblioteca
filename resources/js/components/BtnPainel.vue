<template>

    <button class="btn" style="margin-top: 5px; margin-left: 550px; background-color:#55595c; color:white"><a v-bind:href="url" style="color:white">{{ nome }}</a></button>

    
  </template>
  
  <script>
      export default {
          props:['nome', 'url']
      }
  </script>
<template>
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded" style="margin-right: 3px">
        <div class="lh-100">
        <h2 class="mb-0 text-white lh-100">{{ titulo }}</h2>     
        </div> 
        <slot></slot>
    </div>
    
  </template>
  
  <script>
      export default {
          props:['titulo']
      }
  </script>
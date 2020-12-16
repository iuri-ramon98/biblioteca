<template>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header bg-dark text-white-50">{{ titulo }}</div>
    
                    <div class="card-body">
                        <slot></slot>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:['titulo']
}
</script>

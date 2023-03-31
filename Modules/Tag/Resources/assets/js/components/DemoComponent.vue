<template>
    <div class="vue-demo-wrapper">
        <h1>Welcome to Vue with Vite in Tag Module!</h1>
        <p>
            To get started, edit
            <code>Modules/Tag/Resources/assets/js/registerVueComponents.js</code> and save to
            reload.
        </p>
        <div class="text-center">
            <p>Count: {{ count }}</p>
            <button class="btn btn-sm btn-primary" @click.prevent="increase">Increase</button>
            <button class="btn btn-sm btn-primary ms-2" @click.prevent="decrease">Decrease</button>
        </div>
    </div>
</template>

<script>
export default {
    name: "DemoComponent",
    data(){
        return {
            count: 0
        }
    },
    methods: {
        increase(){
            this.count++
        },
        decrease(){
            this.count--
        },
    }
}
</script>

<style scoped lang="scss">
.vue-demo-wrapper{
    background-color: rgba(0, 0, 255, 0.10);
    padding: 20px;
}
</style>

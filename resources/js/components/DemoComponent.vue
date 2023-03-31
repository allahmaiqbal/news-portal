<template>
    <!-- <div class="vue-demo-wrapper">
        <h1>Welcome to Vue with Vite!</h1>
        <p>
            To get started, edit
            <code>resources/js/registerVueComponents.js</code> and save to
            reload.
        </p>
        <div class="text-center">
            <p>Count: {{ count }}</p>
            <button class="btn btn-sm btn-primary" @click.prevent="increase">Increase</button>
            <button class="btn btn-sm btn-primary ms-2" @click.prevent="decrease">Decrease</button>
        </div>
    </div> -->
    <div>
      <label class="typo__label">Select with search</label>
      <multiselect v-model="value" :options="options" :custom-label="nameWithLang" placeholder="Select one" label="name" track-by="name"></multiselect>
      <pre class="language-json"><code>{{ value }}</code></pre>
    </div>
</template>

<script>

import Multiselect from 'vue-multiselect'

export default {
    components: {
        Multiselect
    },
    data() {
        return {
            value: { name: 'Vue.js', language: 'JavaScript' },
            options: [
                { name: 'Vue.js', language: 'JavaScript' },
                { name: 'Rails', language: 'Ruby' },
                { name: 'Sinatra', language: 'Ruby' },
                { name: 'Laravel', language: 'PHP' },
                { name: 'Phoenix', language: 'Elixir' }
            ]
        }
    },
    methods: {
        nameWithLang({ name, language }) {
            return `${name} — [${language}]`
        }
    }
}
// export default {
//     name: "DemoComponent",
//     data(){
//         return {
//             count: 0
//         }
//     },
//     methods: {
//         increase(){
//             this.count++
//         },
//         decrease(){
//             this.count--
//         },
//     }
// }
</script>

<style scoped lang="scss">
.vue-demo-wrapper{
    background-color: rgba(0, 0, 255, 0.10);
    padding: 20px;
}
</style>

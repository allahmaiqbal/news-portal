<template>
    <div class="row mb-3">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <label class="form-label mt-1" for="select" required >Select Category</label>

                    <select class="form-select custom" id="select" name="category_id" v-model="selectedCategory" @change="getSubcategories(selectedCategory)" required>
                        <option class="text-left" value="" selected disabled>--Select one--</option>
                        <option class="text-left" v-for="(item, index) in categories" :key="index" :value="item.id">{{ item.name }}</option>
                    </select>
                </div>

                <div class="col-6">
                    <label class="form-label mt-1" for="select" >Select Subcategory</label>

                    <select class="form-select custom" id="select" name="sub_category_id" v-model="selectedSubcategory" :disabled="!selectedCategory">
                        <option class="text-left" value="" selected disabled>--Select one--</option>
                        <option class="text-left" v-for="subcategory in subcategories"  :value="subcategory.id">{{ subcategory.name }}</option>
                    </select>
                       <!-- <select
            class="form-select custom"
            id="select"
            name="sub_category_id"
            v-model="selectedSubcategory"
            :disabled="!selectedCategory"
          >
            <option class="text-left" value="" selected disabled>
              --Select one--
            </option>
            <option
              class="text-left"
              v-for="subcategory in subcategories"
              :key="subcategory.id"
              :value="subcategory.id"
            >
              {{ subcategory.name }}
            </option>
          </select> -->
                </div>
           </div>

        </div>
    </div>
</template>

<script>
    export default {
        props: {
            categories: {
                type: Object,
                required: true
            },
            post: {
                type: Object,
                default: null,
            },

        },
    data() {

        return {
            selectedCategory: this.post ? this.post.category_id : "",
            selectedSubcategory: this.post ? this.post.sub_category_id : "",
            subcategories: [],
        }
    },
    mounted() {
        if (this.selectedCategory) {
            this.getSubcategories(this.selectedCategory);
        }
        console.log(this.selectedCategory);
    },
    methods: {
        getSubcategories(id) {
            axios
                .post(baseURL + "/backend/axios/getSubcategoriesById", {
                    category_id: id,
                })
               .then(response => {
                    this.subcategories = response.data;
                })
                .catch(error => {
                        console.log(error);
                  });
            //   console.log(this.selectedCategory);
        },

    }
}
</script>

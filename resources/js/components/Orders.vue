<template>
<form action="" @submit="CreateOrders(post)">
<input type="hidden" name="_token" :value="post.csrf">
    <h4 class="text-center font-weight-bold">Post orders</h4>
    <div class="form-group">
        <input type="text" placeholder="Paste your token here" v-model="post.api_token" class="form-control">

    </div>

    <div class="form-group">
        <input type="text" placeholder="Order no" v-model="post.title" class="form-control">
    </div>
    <div class="form-group">
        <button :disabled="!isValid" class="btn btn-block btn-primary" @click.prevent="CreateOrders(post)">Submit
        </button>
    </div>
</form>
</template>

<script>
;
export default {
    name: "CreateOrders",
     data() {
        return {
            post: {
                order_no: '',
                api_token: '',
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }
    },

           methods: {

            CreateOrders(e) {

                let currentObj = this;
                let api_token = 'Yn9shXSPY7lFGz6vMfFEgm2j84b9NiYJyHwMMG0HT9kqGgAV7vXcXk9QbJCq';
                axios.post("products", [], {headers: { 'Authorization' : 'Bearer '+ api_token}}).then(response => {
                        this.comments = response.data;
                        console.log(response.data)
                    })

                .then(function (response) {

                    currentObj.output = response.data;

                })

                .catch(function (error) {

                    currentObj.output = error;

                });

            }

        },
    computed: {
        isValid() {
            return this.post.title !== '' && this.post.content !== ''
        }
    }
}
</script>

<style scoped>

</style>
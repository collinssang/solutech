<template>
<form action="" @submit="SupplierPost(post)">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="supplier name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="api_token">Api_token</label>
                        <input type="text" name="api_token" placeholder="Your Api Key" class="form-control" />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Submt" class="btn btn-primary" />
                    </div>
                </form>

</template>

<script>
;
export default {
    name: "SupplierPost",
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

            SupplierPost(e) {

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
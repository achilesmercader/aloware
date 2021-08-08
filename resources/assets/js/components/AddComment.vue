<template>
    <div>
        <form @submit.prevent="onSubmit" >

            <img class="img-fluid img-circle img-sm" src="/dist/img/user.png" alt="Alt Text">
            <!-- .img-push is used to add margin to elements next to floating images -->
            <div class="img-push">
            <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment" v-model="form.body">
            <span class="is-danger" v-if="form.errors.has('body')" v-text="form.errors.get('body')"></span>
            </div>
        </form>
    </div>

</template>

<script>

    export default {

        data() {

            return {

                form: new Form({ body: '' })

            };

        },

        methods: {

            onSubmit() {

                this.form
                    .post('/comments')
                    .then(comment => this.$emit('completed', comment));

            }

        }

    }
</script>

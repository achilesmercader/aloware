<template>
    <div>
        <div class="card-footer card-comments">
            <div class="card-comment" v-for="comment in comments">
                <!-- User image -->
                <img class="img-circle img-sm" src="/dist/img/user.png" alt="User Image">

                <div class="comment-text">
                <span class="username">
                    {{ comment.user.name }}
                    <span class="text-muted float-right">{{ comment.created_at | ago }}</span>
                </span><!-- /.username -->
                {{ comment.body }}
                </div>
                <!-- /.comment-text -->
            </div>
            <!-- /.card-comment -->
        </div>
        <!-- /.card-footer -->

        <div class="card-footer card-comments">

        <add-comment @completed="pushComment"></add-comment>

        </div>
        <!-- /.card-footer -->
    </div>

</template>

<script>

    import moment from 'moment';
    import Comment from '../models/Comment';
    import AddComment from '../components/AddComment';

    export default {

        components: { AddComment },

        data(){

            return {

                comments: []


            }

        },

        filters: {

            /**
             * Filter date using moment
             */
            ago(date) {

                return moment(date).fromNow();

            },

            /**
             * Capitalize the value
             */
            capitalize(value) {
                return value.toUpperCase();
            }

        },

        created() {

            /**
             * Show all comments
             */
            Comment.all()
                .then(response => this.comments = response.data)    


        },

        methods: {

            pushComment(comment) {

                this.comments.unshift(comment); //push or unshift

            }


        }


    }
</script>

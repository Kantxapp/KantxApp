<template>
<section class="mbr-section mbr-parallax-background" style=" padding-top: 0px; padding-bottom: 120px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="panel panel-default card-block" v-for="post in posts" style="background-color: #DFDFE3; margin-bottom: 10px;">
                        <div class="panel-heading">
                            <img :src="post.user.avatar" alt="" width="40px" height="40px" class="avatar-feed">
                            {{ post.user.name }}
                            <span class="pull-right">
                                {{ post.created_at }}
                            </span>
                        </div>

                        <div class="panel-body">
                            <p class="text-center">
                                {{ post.content }}
                            </p>
                            
                            <like :id="post.id"></like>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
</template>

<script>
    import Like from './Like.vue'
    export default {
        mounted() {
            this.get_feed()
        },
        components: {
            Like
        },
        methods: {
            get_feed() {
                this.$http.get('/feed')
                    .then( (response) => {
                        response.body.forEach( (post) => {
                            this.$store.commit('add_post', post)
                        })
                    })
            }
        },
        computed: {
            posts() {
                return this.$store.getters.all_posts
            }
        }
    }
</script>



<style>
    .avatar-feed{
        border-radius: 50%;
    }
</style>
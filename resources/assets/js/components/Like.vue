<template>
      <div>
            <hr>
            <p class="text-center" v-for="like in post.likes">
                  <img :src="like.user.avatar" alt="" width="40px" height="40px" class="avatar-like">
            </p>
            <hr>
            <button class="btn btn-xs" style="background-color: #88B04B" v-if="!auth_user_likes_post" @click="like()">
                 <i class="fa fa-thumbs-o-up fa-2x" aria-hidden="true"></i> <i class="fa fa-futbol-o fa-2x" aria-hidden="true"></i>
            </button>
            <button class="btn btn-xs" style="background-color: #8A2232" v-else @click="unlike()">
                 <i class="fa fa-thumbs-down fa-2x" aria-hidden="true"></i> <i class="fa fa-bed fa-2x" aria-hidden="true"></i>
            </button>
      </div>
</template>

<script>
      export default {
            mounted() {
            },
            props: ['id'],
            computed: {
                  likers() {
                        var likers = []
                        
                        this.post.likes.forEach( (like) => {
                              likers.push(like.user.id)
                        })
                        return likers
                  },
                  auth_user_likes_post() {
                        var check_index = this.likers.indexOf( 
                              this.$store.state.auth_user.id
                         )
                         if (check_index === -1)
                              return false
                        else 
                              return true
                  },
                  post() {
                        return this.$store.state.posts.find( (post) => {
                              return post.id === this.id
                        })
                  }
            },
            methods: {
                  like() {
                        this.$http.get('/like/' + this.id)
                            .then( (resp) => {
                                  this.$store.commit('update_post_likes', {
                                        id: this.id,
                                        like: resp.body
                                  })
                                  
                                  noty({
                                          type: 'success',
                                          layout: 'bottomLeft',
                                          text: 'You successfully liked the post!'
                                  })
                            })
                  },
                  unlike() {
                        this.$http.get('/unlike/' + this.id)
                            .then( (response) => {
                                  this.$store.commit('unlike_post', {
                                        post_id: this.id,
                                        like_id: response.body
                                  })
                                  noty({
                                          type: 'success',
                                          layout: 'bottomLeft',
                                          text: 'You successfully unliked the post!'
                                  })
                            })
                  }
            }
      }
</script>


<style>
      .avatar-like{
            border-radius: 50%;
      }
</style>
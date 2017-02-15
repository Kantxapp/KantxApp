<template>

            <div class="row">
                  <div class="col-lg-6 col-lg-offset-3">
                  <div class="form-group">
                        <div class="col-lg-11">
                        <input type="text" class="form-control" placeholder="Buscar..." v-model="query" @keyup.enter="search()">
                        </div>
                        <div class="col-lg-1 hidden-xs">
                        <img src="/assets/images/algolia.jpg" class="img-responsive" alt="Algolia">
                        </div>
                        <br>
                        <div class="row" v-if="results.length">
                              <div class="text-center col-lg-12" v-for="user in results">
                                    <img v-if="user.avatar!=null" :src="user.avatar" alt="" width="50px" height="50px" class="searched-user">
                                    
                                    <a :href='"/profile/" + user.slug '>
                                          <h4 class="text-center">{{ user.name }}</h4>
                                    </a>
                              </div>
                        </div>
                  </div>    
                  </div>
            </div>

</template>

<script>
      var algoliasearch = require('algoliasearch')
      var client = algoliasearch('CG7VFAN8MT', 'a33c9c632c691aa360294c6cafe03ace')
      var index = client.initIndex('users')
      export default {
            mounted() {
                  
            },
            data() {
                  return {
                        query: '',
                        results: []
                  }
            },
            methods: {
                  search() {
                        index.search(this.query, (err, content) => {
                              this.results = content.hits
                        })
                  }
            },
             computed: {
                   profile_url(slug) {
                         const url = "https://kantxapp-izayer.c9users.io/"
                         return this.href = url + slug
                         
                   }
             }
      }
</script>

<style>
      .searched-user{
            border-radius: 50%;
      }
</style>
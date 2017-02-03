<template>
      <section class="mbr-section" id="testimonials3-3" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">

          <div class="mbr-testimonials mbr-section mbr-section-nopadding">
              <div class="container">
                  <div class="row">
      
                      <div class="col-xs-12 col-md-8 col-md-offset-2">
      
                          <div class="mbr-testimonial card">
                              <div class="card-block">
                              <textarea rows="3" class="form-control" v-model="content"></textarea>
                              <br>
                              <button class="btn btn-success pull-right" :disabled="not_working" @click="create_post()">
                                    PUBLICAR <i class="fa fa-pencil" aria-hidden="true"></i>
                              </button>
                              </div>
                          </div>
                      </div>
      
                  </div>
      
              </div>
      
          </div>

      </section>
</template>

<script>
      export default {
            mounted() {

            },
            data() {
                  return {
                        content: '',
                        not_working: true
                  }
            },
            methods: {
                  create_post() {
                        this.$http.post('/create/post', { content: this.content })
                            .then((resp) => {
                                  this.content = ''
                                  noty({
                                          type: 'success',
                                          layout: 'bottomLeft',
                                          text: 'Publicado!'
                                  })
                                  console.log(resp)
                            })
                  }
            },
            watch: {
                  content() {
                        if(this.content.length > 0)
                              this.not_working = false
                        else
                              this.not_working = true
                  }
            }

      }
</script>
<template>
        <div>
            <p class="text-center" v-if="loading">
                Loading...
            </p>
            <p class="text-center" v-if="!loading">
                <button class="btn btn-success" v-if="status == 0" @click="add_friend">Solicitud de Amistad <i class="fa fa-user-plus" aria-hidden="true"></i></button>
                <button class="btn btn-success" v-if="status == 'pending'" @click="accept_friend">Aceptar Solicitud <i class="fa fa-check-circle" aria-hidden="true"></i></button>
                <span class="text-success" v-if="status == 'waiting'">Esperando la respuesta...<i class="fa fa-circle-o-notch fa-spin fa-1x fa-fw"></i>
<span class="sr-only">Loading...</span></span>
                <span class="text-success" v-if="status == 'friends'">Amig@s <i class="fa fa-handshake-o" aria-hidden="true"></i></span>
            </p>
        </div>
</template>

<script>
    export default {
        mounted() {
            this.$http.get('/check_relationship_status/' + this.profile_user_id )
                .then( (resp) => {
                    console.log(resp)
                    this.status = resp.body.status
                    this.loading = false
                })
        },
        props: ['profile_user_id'],
        data() {
            return {
                status: '',
                loading: true
            }
        },
        methods: {
            add_friend() {
                this.loading = true
                this.$http.get('/add_friend/' + this.profile_user_id )
                    .then( (r) => {
                        if(r.body == 1)
                            this.status = 'waiting'
                            noty({
                                type: 'success',
                                layout: 'bottomLeft',
                                text: 'Petición de Amistad enviada.'
                            })
                            this.loading = false
                    })
            },
            accept_friend() {
                this.loading = true
                this.$http.get('/accept_friend/' + this.profile_user_id )
                    .then( (r) => {
                        if(r.body == 1)
                            this.status = 'friends'
                            noty({
                                type: 'success',
                                layout: 'bottomLeft',
                                text: 'Ya sois amigos. Ahora a disfrutar del deporte.'
                            })
                            this.loading = false
                    })
            }
        }
    }
</script>

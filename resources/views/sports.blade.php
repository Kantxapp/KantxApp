@extends('layouts.sports')

@section('head')
<style type="text/css">
  .grey {
    background-color: #2E2E2E;
  }
</style>
<script
src="https://code.jquery.com/jquery-3.1.1.min.js"
integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
crossorigin="anonymous"></script>
<script type="text/javascript">
  $(function() {

      $(".sport").click(function() {    

          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({ url: '/sports/user/insert',
                   data: {id: this.id},
                   type: 'post',
                   success: function(output) {
                                console.log(output);
                                
                            }
          });
          $(this).children().toggleClass('grey');

      });
  
      
      
  });

</script>
@ensection

@section('content')

<div class="container" style="margin-top: 90px;">
  <h1 class="text-center">¡Bienvenido a KantxApp!</h1><br/>
  <h3>Por favor, selecciona los deportes que te interesan a continuación</h3>
  <div class="row">
    @foreach($sports as $sport)
      <div id="userId={{$user_id}}_sportId={{$sport->id}}" class="col-md-3 col-xs-3 col-lg-3 sport">
      <img src='{{$sport->img_path}}'><br>
      {{$sport->name}}
      </div>
    @endforeach
    </div>
</div>
@endsection


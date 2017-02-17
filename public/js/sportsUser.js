
  $(function() {


          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({ url: '/sports/user/get',
                   type: 'post',
                   success: function(output) {

                                $.each(output.sports, function( index, value ) {
                                 $('#userId_' + output.id +'_sportId_'+value.id).children().addClass('grey');
                                });
                            }
          });



  
      
      
  });
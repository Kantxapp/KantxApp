
  $(function() {
  
          var kantxaId = document.getElementById('id');
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({ url: '/sports/kantxa/get',
                  data: {id: kantxaId},
                   type: 'post',
                   success: function(output) {
                    console.log(output);
                                // $.each(output.sports, function( index, value ) {
                                // $('#userId_' + output.id +'_sportId_'+value.id).children().addClass('grey');
                                // });
                            }
          });
  });
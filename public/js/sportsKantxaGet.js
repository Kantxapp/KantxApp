
  $(function() {
  
          // var kantxaId = document.getElementById('id');
          var kantxaId = $('#id').val();
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({ url: '/sports/kantxa/get',
                  data: {id: kantxaId},
                  type: 'post',
                  success: function(output) {
                                $.each(output.sports, function( index, value ) {
                                $('#kantxaId_' + output.id +'_sportId_'+value.id).children().addClass('grey');
                                });
                            }
          });

  });
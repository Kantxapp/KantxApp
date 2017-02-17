
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
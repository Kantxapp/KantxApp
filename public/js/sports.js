
    var div;
    
    $(document).ready(function() {
        
                var container = $("#sports-wrapper").find("#box1");                   
                container.addClass("sport-checked");                   
        
                var container = $("#sports-wrapper").find("#box2");                   
                container.addClass("sport-checked");                   
        
                var container = $("#sports-wrapper").find("#box6");                   
                container.addClass("sport-checked");                   
        
                var container = $("#sports-wrapper").find("#box11");                   
                container.addClass("sport-checked");                   
        
        $('.deportesSort').sortElements(function(a, b){
            return $(a).attr("sort") > $(b).attr("sort") ? 1 : -1;
        });
        $(".sport-box").tipsy({gravity:"s"});
        
        
        
        var container;
        $(".sport-box").click(function(){                
            div = $(this);            
            if (div.hasClass("transparent")) return;                                
            div.addClass("transparent");
            var input = $(this).find("input");                
            if($(this).hasClass("sport-checked")){ // lo tienes añadido
                $(this).removeClass("sport-checked");                    
                $.post("/players?delSportProfile","deporte="+input.val(),function(){div.removeClass("transparent");});
            }else{ // no lo tienes añadido 
                if (input.val() === '7'){ //padel
                    //window.location = "/players?calculatePaddleLevelForm=1";
                    $.fancybox({
                        href            : '/players?calculatePaddleLevelForm=1',
                        type		: 'iframe',
                        height          : 550,
                        maxHeight       : 550,
                        afterClose : function(){
                            window.location = "/players?myprofile";
                        }
                    });
                } else {
                    $.fancybox({
                        type : 'ajax',
                        href  : '/players?addFullSportProfileForm&deporte='+input.val(),
                        afterClose : function(){
                            div.removeClass("transparent");
                        }
                    })
                }                    
            }
            return false;
        });
        My.List.Filter('#searchsport', '.namesport');
        
        $("#change-icons").click(function(){
            $.ajax({
                url : "players?changeIcons=1",
                success : function(){
                    window.location= "players?mySports";
                }
            });
        })
    }); 

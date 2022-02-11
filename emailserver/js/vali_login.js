 $(document).ready(function() {
var width_of_screen = screen.width;
var height_of_screen = screen.height;
alert(width_of_screen);
 
welcome_div_static_position();
//---------------------------------------------------
$(".span-validation-style").hide(); 

$("#one").click(function() {
  $(".span-validation-style").show(); 
});

$("#one").dblclick(function() {
  $(".span-validation-style").hide(); 
});
//---------------------------------------------------
// Invalid un PW
$("#iunpw").hide();
 
 $("#sign-in-button").click(function() {
     $("#iunpw").show(); 
   });
//---------------------------------------------------

$("#fn").css({  
       
        "border-color":"#dd4b39", 
        "border-width": ".5px",
        "border-type": "solid",    
  });

//-----------------------------------------------------
//WELCOME DIV COUNTER ANIMATION 
//START

function welcome_div_static_position(){

    $("#outside_welcome_div").css({          
                                    "margin-top": "80px",
                                  

                                                  
                          });
    $("#welcome_div").css({          
                                    
                                    "visibility":"hidden",                           
                          });
    $("#welcome_div").css({   
                               
                              "margin-left": "20%",
                              "height": "260px",
                              "width": "260px",
                                    "padding-top": "65px",
                                    
                                    "border-radius": "50%",    
                              "visibility":"visible", 
                              "transition":"1s",

                          });
  }
//END
//-----------------------------------------------------
    $(".cssload-container").click(function() {
     $(".cssload-container").hide(); 
   });
        $(".cssload-wrap").hide();
  
  $("#susi_div").hide(200);
  $(".cssload-container").hide();

  function susii(){
          $("#susi_div").fadeIn(300);
        }
            function welcome(){
                    $("#outside_welcome_div").show();
                    $("#welcome_div").fadeIn(1000);
                }
function sho(){
$("*").show(3000);
 $(document).ready();
}
$("#sisi_id").click(function() {
      $(".cssload-wrap").hide();
      $("#susi_div").fadeOut(100);
      // Function Show welcome div
     setTimeout(welcome, 100);
        
        });
        
$("#button2").click(function() {
  $("#welcome_div").fadeOut(1000);
  $("#susi_div").css({        "visibility":"visible",                           
                          });

// Function 
setTimeout(susii, 800);
$("#sign-in-button").show();
$("#register-span").show();

});

// The Loading Gif 
$("#sign-in-button").click(function() {
$("#sign-in-button").hide(200);
$("#register-span").hide(200);

$(".cssload-wrap").fadeIn();

// Function 
setTimeout(susii, 800);

$(".cssload-container").show();
});
setTimeout(explode, 4000);

  $("#footer1").hide();
    $("#footer_signin").css({
                         "height":"0px",
                         "width":"0px",

                          });
                     $("#button1").click(function() {
                      explode();
                       $("*").hide(3000);
                       setTimeout(sho, 1000);

                                        $("#footer1").show();
                                        $("#footer_signin").show(1000);
                                          $("#footer_signin").css({
                                                   "height":"400px",
                                                   "width":"250px",
                                                  "opacity":".9",
                                                });
                                                $("#layer").css({
                                                   "height":"400px",
                                                   "width":"250px",
                                                   "color": "red",
                                                  
                                                });
                                                        }).show(1000);

  $("#footer_close").click(function() {
    $("#footer1").hide();

});


});

//Registration From Validation Starts












  /*
 		

 		var uname;
 		var pass;
 	


$(".inputs").css({			  "border":"1px solid",
                             
                              "border-radius":"3px 3px 3px 3px",
                             
                          });

            	//validation starts
            	$("#usernamebt").focusout(function() {
            		var valu=$("#usernamebt").val();

            	if(valu=="")
            		{	$("#usernamesp").html ("*&nbsp;Enter Username");

            			$("#usernamesp").css({
                         "transition":"all 1s",

                          });
            			$("#usernamebt").css({
                             "border-color":"red",
                          });
            			uname=false;
            		}
            		else{
            			$("#usernamebt").css({
                             "border-color":"grey",
                          });
						$("#usernamesp").hide();
						uname=true;
					}				

// validation Ends
});



$("#passwordbt").focusout(function() {
            		var valu=$("#passwordbt").val();
            	
            	if(valu=="")
            		{		$("#passwordsp").css({
                             
                              
                          });
            				
            			$("#passwordsp").html ("*&nbsp;Enter Your Password");
            			
            			$("#passwordbt").css({
                             "border-color":"red",
                          });


            			pass=false;
            		}
            		else{
            				$("#passwordbt").css({
                             "border-color":"grey",
                          });
						$("#passwordsp").hide();
						pass=true;
					}				

// validation Ends
});





$("#login").submit(function() {

	

if(uname==true && pass==true  ){


return true;
}
else{

	alert("Enter Username/Password ");
	return false;
}
});










        });

        */


                 function Captcha(){
                     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
                     var i;
                     for (i=0;i<6;i++){
			

                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
			var h = Math.random(2) * 10;
                      }
                    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
			// Apply JS to put value in mainCaptcha SPAN 
                    document.getElementById("mainCaptcha").innerText = code;
		
                  }
			

                  function ValidCaptcha(){
		
                      var string1 = removeSpaces(document.getElementById("mainCaptcha").innerText);
                      var string2 = removeSpaces(document.getElementById('txtInput').value);
                      	alert(string1);
			alert(string2);
			if (string1 == string2){
			
			alert("TRUE");    
                        return true;
                      }
                      else{  
			alert("FALSE");
      			Captcha();
                        return false;
                      }
                  }
                  function removeSpaces(string){
                    return string.split(' ').join('');
                  }

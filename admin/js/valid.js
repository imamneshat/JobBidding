
function reg(){
    if(window.value==0){
        alert ("Please fullfill the all fields");
         return false;
        } else {
            document.getElementById("demo").style.display = "block";
        }
    }

    function bdy(){
      window.value=0;
      window.value1=0;
    }





    function emailValidate(){
        var e=document.getElementById('email');
        var x =e.value.indexOf('@');
        var y =e.value.lastIndexOf('.');

        if(x==-1 || y==-1 || (x+2)>=y || e==""){
            alert("email is not valid");
             
        }
    }



        function valid(){
            var a=document.getElementById("password").value;
            var b=document.getElementById("confirmpassword").value;


            if(a==""){
            
                alert("please fill the password");
            
            } else if(a.length<5){
            
                    alert("password length must be greater than 5 character");
            
                } else if(a.length>20){
            
                        alert("password length must be less than 20 character");
            
                    } else if(a!=b){
                            alert("passwords are not match");
                    }
        
        }

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                            .attr('src', e.target.result)
                            .width(100)
                            .height(100);
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }


            
      
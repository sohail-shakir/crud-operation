//  Validation continue 

    // Paste your validation script here
    function validateForm() {
        var name = document.getElementById("fname").value;
        var age = document.getElementById("age").value;
        var gender = document.getElementById("gender").value;
        var city = document.getElementById("city").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var password = document.getElementById("password").value;
        var worktype = document.getElementById("work").value;
        var address = document.getElementById("address").value;

    var nameerror = document.getElementById("nameerror");
    var ageerror = document.getElementById("ageerror");
    var gendererror = document.getElementById("gendererror");
    var cityerror = document.getElementById("cityerror");
    var emailerror = document.getElementById("emailerror");
    var phoneerror = document.getElementById("phoneerror");
    var workerror = document.getElementById("workerror");
    var addresserror = document.getElementById("addresserror");

        var ret = true;

        // Reset error classes and messages
        // resetErrors();

        // Validation for each field
        if (name === '') {
            document.getElementById("nameerror").innerHTML ="Please Enter  Your name";
            // alert("name is required"); 
      
            ret = false;
        }

        if (age === '') {
            document.getElementById("ageerror").innerHTML="Please Enter  Your Age";
            // alert("name is required"); 
            
            ret = false;
        }

        if (gender === '') {
            document.getElementById("gendererror").innerHTML="Please Enter  Your Gender";
            
            ret = false;
        }

        if (city === '') {
            document.getElementById("cityerror").innerHTML ="Please Enter  Your City";
            // alert("name is required"); 
            ret = false;
        }

        if (email === '') {
            document.getElementById("emailerror").innerHTML ="Please Enter  Your Email";
            // alert("email is required"); 
            ret = false;
        } else if (!validateEmail(email)) {
            document.getElementById("emailerror").innerHTML ="Please Enter  Your  Correct email";
            ret = false;
        }

        if (phone === '') {
            document.getElementById("phoneerror").innerHTML="Please Enter  Your Phone Number";
            // alert("name is required"); 
            ret = false;
        }
        else if (phone.length < 11) {
            document.getElementById("phonerror").innerHTML ="The Lenght of Phone Number Must be 11";
            // alert("name is required");
            ret = false;
        }


        if (password === '') {
            document.getElementById("passworderror").innerHTML ="Please Enter  Your Password";
            // alert("name is required"); 
            ret = false;
        } else if (password.length < 6) {
            document.getElementById("passworderror").innerHTML =" The Lenght of Password Must be 6";
            // alert("name is required");
            ret = false;
        }

        if (worktype === '') {
            document.getElementById("workerror").innerHTML ="Please Enter  Your Department";
            // alert("name is required"); 
            ret = false;
        }

        if (address === '') {
            document.getElementById("addresserror").innerHTML ="Please Enter  Your Address";
            // alert("name is required"); 
            ret = false;
        }

        return ret;
   

    function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    
}
// <script>

// function validateform(){
//      var name = document.getElementById("fname").value;
//      var age = document.getElementById("age").value;
//      var gender = document.getElementById("email").value;
//      var city = document.getElementById("gender").value;
//      var email = document.getElementById("email").value;
//      var phone = document.getElementById("phone").value;
//      var password = document.getElementById("password").value;
//      var worktype = document.getElementById("work").value;
//      var address = document.getElementById("address").value;
    
//     var nameerror = document.getElementById("nameerror");
//     var ageerror = document.getElementById("ageerror");
//     var gendererror = document.getElementById("gendererror");
//     var cityerror = document.getElementById("cityerror");
//     var emailerror = document.getElementById("emailerror");
//     var phoneerror = document.getElementById("phoneerror");
//     var workerror = document.getElementById("workerror");
//     var addresserror = document.getElementById("addresserror");


  
//     var ret = true;

//     if (name === '') {
//         alert("error");
//         document.getElementById("nameerror").innerHTML ="Plz Enter name";
  
//         ret = false;
//     }
//     if (age === '') {
//         document.getElementById("ageerror").innerHTML ="Plz Enter age";
  
//         ret = false;
//     }
//     if (name === '') {
//         document.getElementById("emailerror").innerHTML ="Plz Enter Email";
  
//         ret = false;
//     }
//     if (name === '') {
//         document.getElementById("emailerror").innerHTML ="Plz Enter Email";
  
//         ret = false;
//     }
//     if (name === '') {
//         document.getElementById("emailerror").innerHTML ="Plz Enter Email";
  
//         ret = false;
//     }

//     if(email === ''){
       
//         document.getElementById("emailerror").innerHTML ="Plz Enter Email";
        
//         // document.getElementById("email").classList.add("error-input"); 
//         ret = false;
//     } else if (!validateEmail(email)) {
//         // emailerror.innerHTML = "Plz Enter Correct Email Format";
//         document.getElementById("emailerror").innerHTML ="Plz Enter Correct Email Format";
//         // document.getElementById("email").classList.add("error-input"); 
//         ret = false;
//     } else {
//       document.getElementById("emailerror").innerHTML = "";
//         // document.getElementById("email").classList.add("correct-input"); 
//     }

//     if(password === ''){
//         passworderror.innerHTML = "Password is Required";
//         // document.getElementById("password").classList.add("error-input"); 
//         ret = false;
//     } else if(password.length < 6){
        
//         document.getElementById("passworderror").innerHTML = "Password is too Short";

//         // document.getElementById("password").classList.add("error-input"); 
//         ret = false;
//     } else {
//         passworderror.innerHTML = "";
//         // document.getElementById("password").classList.add("correct-input"); 
//     }

//     return ret;
// }

// function validateEmail(email) {
//     const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     return regex.test(email);
// }


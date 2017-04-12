$(document).ready(function() {
	Home();
});
function Home() {
	$('#home').show();
	$('#contact').hide();
	$('#pictures').hide();
  return false;
}
function Gallery(){
	$('#home').hide();
	$('#contact').hide();
	$('#pictures').show();
	return false;
}
function Contact() {
	$('#home').hide();
	$('#contact').show();
	$('#pictures').hide();
	$('.messagesent').hide();
	$('.text').show();
	$('.submit').show();
  return false;
}

	var FNameVar = document.getElementById("firstname");
	FNameVar.addEventListener("change", validateFName, false);
	var LNameVar = document.getElementById("lastname");
	LNameVar.addEventListener("change", validateLName, false);
	var EmailVar = document.getElementById("email");
	EmailVar.addEventListener("change", validateEmail, false);
	var PhoneVar = document.getElementById("phone");
	PhoneVar.addEventListener("change", validatePhone, false);
	var SubmitVar = document.getElementById("Submit");
	SubmitVar.addEventListener("click", finishIt , false);


      function validateFName(event){
        var regex = /^[-a-zA-Z_.][-a-zA-Z_.]*$/;
        var Name = event.currentTarget;
          if (!regex.test(Name.value)) {
          alert(Name.value + " is not in the correct format. \n "+
                " Correct format: Only letters\n" );
         }
      }
      function validateLName(event){
        var regex = /^[-a-zA-Z_.][-a-zA-Z_.]*$/;
        var lname = event.currentTarget;
        if (!regex.test(lname.value)) {
          alert(lname.value + " is not in the correct format. \n "+
                " Correct format: Only letters\n" );
         }
      }	
      function validateEmail(event){
        var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var Email = event.currentTarget;
          if (!regex.test(Email.value)) {
          alert(Email.value + " is not in the correct format. \n"+
		"Correct Format: username@pitt.edu\n" );
        }
      }
      function validatePhone(event) {
        var regex = /^\d{3}\-\d{3}\-\d{4}$/
        var Phone = event.currentTarget;
        if (!regex.test(Phone.value)) {
          alert(Phone.value + " is not in the correct format. \n"+
		"Correct Format: ###-###-####\n" );
        }
      }
      function submitForm(){
        var name1 = /^[-a-zA-Z_.][-a-zA-Z_.]*$/.test(document.getElementById("firstname").value);
        var lname1 = /^[-a-zA-Z_.][-a-zA-Z_.]*$/.test(document.getElementById("lastname").value);
        var email1 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("email").value);
        var phone1 = /^\d{3}\-\d{3}\-\d{4}$/.test(document.getElementById("phone").value);

        if(!name1){
         alert("First Name Error: Incorrect Format");
         return false;
        } else if(!lname1){
         alert("Last Name Error:Incorrect Format");
         return false;
        }else if(!email1){
          alert("Email Error: Incorrect Format");
          return false;
 	} else if(!phone1){
          alert("Phone Error: Incorrect Format");
          return false;
        }else{
	  $('#form').submit(function () {
	  if(document.getElementById('firstname').attributes)
	   $('.text').hide();
	   $('.messagesent').show();
           $('.submit').hide();
	  });
          alert("Comment Sent\n" );
          return false;
        }
      }

      function finishIt(event){
        var decide = submitForm();
        if(!decide){
          event.preventDefaullt();
        }else{
          document.getElementById("form").reset();
        }
      }

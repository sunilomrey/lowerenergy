$(document).ready(function() {
$("#ajaxform").submit(function(e)
{
	var postData = $(this).serializeArray();
	var formURL = $(this).attr("action");
	$.ajax(
	{
		url : formURL,
		type: "POST",
		data : postData,
		success:function(data, textStatus, jqXHR) 
		{
			var message = document.getElementById("message");
			message.style.backgroundColor = "#84bc51";
			message.innerHTML = "<span style='background-color: #84bc51;'>Your data inserted successfully</span>";
			$('#ajaxform')[0].reset();
		},
		error: function(jqXHR, textStatus, errorThrown) 
		{
		    var message = document.getElementById("message");
		    message.style.backgroundColor = "red";
			message.innerHTML = "<span>Something goes wrong, please try again latter.</span>";
		}
	});
    e.preventDefault();	//STOP default action
});
});
//$("#ajaxform").submit(); //SUBMIT FORM

function validateBusiness() {
   var status = validateCompany('#CompanyName');
   removeMessage('CompanyName');
   if(status !== true){
      printMessage(status,'CompanyName');
      return false;
   }
   var status = validateName('#FirstName');
   removeMessage('FirstName');
   if(status !== true){
      printMessage(status,'FirstName');
      return false;
  }
  var status = validateLastName('#LastName');
  removeMessage('LastName');
  if(status !== true){
      printMessage(status,'LastName');
      return false;
  }
  var status = requiredMobile($('#Phone').val());
  removeMessage('Phone');
  if(status !== true){
      printMessage(status,'Phone');
      return false;
  }
  var status = requiredEmail($('#Email').val());
  removeMessage('Email');
  if(status !== true){
      printMessage(status,'Email');
      return false;
  }
  
  var status = allnumeric('#ZipCode');
  removeMessage('ZipCode');
  if(status !== true){
      printMessage(status,"ZipCode");
      return false;
  }
  var status = validateLower('#LowerOurEnergy');
  removeMessage('LowerOurEnergy');
  if(status !== true){
      printMessage(status,'LowerOurEnergy');
      return false;
  }
   return true;
}

function removeMessage(id) {
    document.getElementById(id).style.borderColor = "#ccc";
    $("#"+id).next().remove();
}

function printMessage(message,id){
	document.getElementById(id).style.borderColor = "red";
	$("<p class='error_txt'>"+message+"</p>").insertAfter("#"+id);
    //alert(message);
}

function requiredEmail(emailId){
   var isEmptyValue   = isEmpty(emailId);
   var message        = "Please fill required field" ;
   if(!isEmptyValue){
       if(validateEmail(emailId)){
           message = true;
       }else{
           message = "please enter a valid email" ;
       }
   }
   return message;
}

function validateEmail(emailId){
    var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var matchedArray = emailId.match(emailRegex);
    if($.isEmptyObject(matchedArray)){
       return false; 
    }else {
       return true;
    }
}


function requiredMobile(mobileNumber){
   var isEmptyValue   = isEmpty(mobileNumber);
   var message        = "Please fill required field" ;
   if(!isEmptyValue){
       if(validateMobileNo(mobileNumber)){
           message = true;
       }else{
           message = "please enter a valid phone number" ;
       }
   }
   return message;
}

function validateMobileNo(mobileNumber){
    var phoneRegex   = /^(\()?(\d{3})([\)-\. ])?(\d{3})([-\. ])?(\d{4})$/;
    var matchedArray = mobileNumber.match(phoneRegex);
    if($.isEmptyObject(matchedArray)){
       return false; 
    }else {
       return true;
    }
}


function validateName(inputSelector){
   var isEmptyValue   = isEmpty($(inputSelector).val());
   var message        = "Please fill first name" ;
   if(!isEmptyValue){
       if(!isSingleWord($(inputSelector).val())){
           message = "Please use single word" ;
       }else{
           message = true;
       }
   }
   return message;
}

function allnumeric(uzip) {   
    var zip = $(uzip).val();
	var numbers = /^[0-9]+$/;  
	if(zip.match(numbers)) {  
		message = true;
	}  
	else {  
		message = 'ZIP code must have numeric characters only'; 
	}
	return message;  
}  


function validateLastName(inputSelector){
   var isEmptyValue   = isEmpty($(inputSelector).val());
   var message        = "Please fill Last Name" ;
   if(!isEmptyValue){
       if(!isSingleWord($(inputSelector).val())){
           message = "Please use single word" ;
       }else{
           message = true;
       }
   }
   return message;
}

function validateCompany(inputSelector) {
   var isEmptyValue   = isEmpty($(inputSelector).val());
   var message        = "Please fill company name" ;
   if(!isEmptyValue){
      message = true;
   }
   return message;
}
function validateLower(inputSelector) {
   var isEmptyValue   = isEmpty($(inputSelector).val());
   var message        = "Please select How did you hear about LowerOurEnergy" ;
   if(!isEmptyValue){
      message = true;
   }
   return message;
}

function isEmpty(inputValue){
  if($.trim(inputValue) == ''){
      return true;
  }else{
      return false;
  }
}

function isSingleWord(inputValue){
    var splitedArray = $.trim(inputValue).split(' ');
    if(splitedArray.length <= 1){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){

    $(document).on('click' , '#submitData', function(){
         // var fullAddress1 = '200 West 56th Street, New York, NY 10019';
         // validateAddress(fullAddress1);
         	  
          var status = validateName('#firstName');
          if(status !== true){
              printMessage(status);
              return;
          }
          var status = validateName('#lastName');
          if(status !== true){
              printMessage(status);
              return;
          }

          var status = requiredMobile($("#phoneNumber").val());
          if(status !== true){
              printMessage(status);
              return;
          }

          var status = requiredEmail($("#emailId").val());
          if(status !== true){
              printMessage(status);
              return;
          }
          
          var status = confirmEmail($("#emailId").val(), $('#confirmEmail').val());
          if(status !== true){
              printMessage(status);
              return;
          }

          var status = confirmAddress($("#address").val());
          if(status !== true){
              printMessage(status);
              return;
          }

          var status = validateCity($("#city").val());
          if(status !== true){
              printMessage(status);
              return;
          }
          
          var state   = $('#state').text();
          
          var zipCode = "";
          if($("#zipcode").attr('isEditable') === 'yes'){
              zipCode = $("#zipcode").val();
              var status = validateZipcode(zipCode);
			  if(status !== true){
				  printMessage(status);
				  return false;
			  }
          }else{
              zipCode = $("#zipcode").text();
          }
          var fullAddress = $("#address").val()+' , '+ $("#city").val() + " , " + state+" , "+zipCode;
          fullAddress = '200 West 56th Street, New York, NY 10019';
          validateAddress(fullAddress);
          $('#stateVal').val(state.trim());
          $('#zipcodeVal').val(zipCode.trim());
          $("#basicInfo").submit();	

    });

    $("#enterZipcode").click(function(){
       var zipParent = $('#zipcode').closest('.col-lt-3');
       $('#zipcode').remove();
       $(zipParent).append("<input type=\"text\" name=\"zipCode\" id = \"zipcode\" isEditable = \"yes\">");
    });
});

function validateAddress(fullAddress){
    fullAddress = fullAddress.replace(/\n/g, "");
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({ 'address': fullAddress }, function (results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
        alert("valid address");
        console.log(results);
    }else{

        alert("Invalid address");
    }
   });
}

function validateCity(cityName){
   var isEmptyValue = isEmpty(cityName);
   var message      = "Please fill required field" ;
   if(!isEmptyValue){
       if(isCityName(cityName)){
           message = true;
       }else{
           message = "Invalid city name"; 
       }
   }
   return message;     
}

function isCityName(cityName){

    var cityRegex    = /^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/;
    var matchedArray = cityName.match(cityRegex);
    if($.isEmptyObject(matchedArray)){
       return false; 
    }else {
       return true;
    }
}

function confirmAddress(address){
   var isEmptyValue = isEmpty(address);
   var message      = "Please fill required field" ;
   if(!isEmptyValue){
       if(isSingleWord(address) || (address.length<10)){
           message = "please describe address more";
       }else{
           message = true;
       }
   }
   return message; 
}

function confirmEmail(email, confirmEmail){
   
   var isEmptyValue   = isEmpty(confirmEmail);
   var message        = "Please fill required field" ;
   if(!isEmptyValue){
       if(isEqual(email, confirmEmail)){
           message = true;
       }else{
           message = "confirm email do not match" ;
       }
   }
   return message;
}

function isEqual(input1, input2){
    if(input1 === input2){
        return true;
    }else{
        return false;
    }

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


function printMessage(message){
    alert(message);
}

function validateName(inputSelector){
   var isEmptyValue   = isEmpty($(inputSelector).val());
   var message        = "Please fill required field" ;
   if(!isEmptyValue){
       if(!isSingleWord($(inputSelector).val())){
           message = "Please use single word" ;
       }else{
           message = true;
       }
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

function validateZipcode(zip){
   var isEmptyValue   = isEmpty(zip);
   var message        = "Please fill required field" ;
   if(!isEmptyValue){
       if(!allnumeric(zip)){
           message = "Please enter number only" ;
       }else{
           message = true;
       }
   }
   return message;

}

function allnumeric(zip) {   
	var numbers = /^[0-9]+$/;  
	if(zip.match(numbers)) {  
		message = true;
	}  
	else {  
		message = false; 
	}
    alert(message);
	return message;  
} 

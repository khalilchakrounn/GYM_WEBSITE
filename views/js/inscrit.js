

/////////////////////////////////////////////////////////////////////////////////////
 //Fin scirpt upload image //////////////////
 ////////////////////////////////////////////////////////////////////////////////

     


  /////////////////////////////////////////////////////////////////////////////////////
 //Script validation //////////////////
 ////////////////////////////////////////////////////////////////////////////////
$(document).ready(function(){
  var error_email = '';
  var error_user = '';
   var error_mail = '';
  var error_password = '';
  var error_password2='';
  var error_password3='';
   var error_username = '';

 $('.check_ok1').hide();
    $('.check_false1').hide();
    
    $('#email').keyup(function(){
      var email = $('#email').val();
      var dataString = 'email='+email;
      
      $.ajax({
        type: 'POST',
        url: '../core/check_mail.php',
        data: dataString,
        success:function(data){
          var responseData = jQuery.parseJSON(data)
          if(responseData.status=='error')
          {
            $('.check_ok1').hide();
            $('.check_false1').fadeIn();
            $('.check_false1').text(responseData.message);
          error_mail = 'error';
           $('#error_email').hide();
          }
          else
          {
            $('.check_false1').hide();
            $('.check_ok1').fadeIn();
            $('.check_ok1').text(responseData.message);
             error_mail = '';
              $('#error_email').hide();
          }
        }
      });
      return false;
    });

 $('.check_ok').hide();
    $('.check_false').hide();
    
    $('#username').keyup(function(){
      var pseudo = $('#username').val();
      var dataString = 'pseudo='+pseudo;
      
      $.ajax({
        type: 'POST',
        url: '../core/check_user.php',
        data: dataString,
        success:function(data){
          var responseData = jQuery.parseJSON(data)
          if(responseData.status=='error')
          {
            $('.check_ok').hide();
            $('.check_false').fadeIn();
            $('.check_false').text(responseData.message);
          error_user = 'error';
         $('#error_username').hide();
          }
          else
          {
            $('.check_false').hide();
            $('.check_ok').fadeIn();
            $('.check_ok').text(responseData.message);
             error_user = '';
              $('#error_username').hide();
          }
        }
      });
      return false;
    });


   
$('#password').keyup(function(){
var pass = $('#password').val();
     if(pass!='')
          {
           $('#error_password').hide();
          }
           return false;
 });

$('#password2').keyup(function(){
var pass2 = $('#password2').val();
     if(pass2!='')
          {
            error_password2='';
           $('#error_password2').hide();
          }
           return false;
 });
 
 $('#btn_login_details').click(function(){
  

  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var userValid = /^[a-zA-Z0-9]+$/; 

 if($.trim($('#username').val()).length == 0)
  {
   error_username = 'username is required';
   $('#error_username').text(error_username);
   $('#username').addClass('has-error');
  }

  else {  error_username = '';
   $('#error_username').text(error_username);
   $('#username').removeClass('has-error');}
  

  if($.trim($('#email').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email').text(error_email);
   $('#email').addClass('has-error');
  }
 
   else
   {
    error_email = '';
    $('#error_email').text(error_email);
    $('#email').removeClass('has-error');
   }
  
  
  if($.trim($('#password').val()).length == 0)
  {
   error_password = 'Password is required';
   $('#error_password').text(error_password);
   $('#password').addClass('has-error');
  }
  else
  {
   error_password = '';
   $('#error_password').text(error_password);
   $('#password').removeClass('has-error');
  }

if($.trim($('#password2').val()).length == 0)
{
    error_password2 = 'Password is required';
   $('#error_password2').text(error_password2);
   $('#password2').addClass('has-error');
}
else
{
   if($.trim($('#password').val())!=$.trim($('#password2').val()))

  {
   error_password3 = ' the two password are not identical ';
   $('#error_password3').text(error_password3);
   $('#password2').addClass('has-error');
  }
  else
  {
   error_password3 = '';
   $('#error_password3').text(error_password3);
   $('#password2').removeClass('has-error');
  }

}


  if(error_email != '' || error_user != '' || error_mail != ''|| error_password != '' || error_password2!='' || error_password3!='' || error_username!='' )
  {
   return false;
  }
  else
  {
   $('#list_login_details').removeClass('active active_tab1');
   $('#list_login_details').removeAttr('href data-toggle');
   $('#login_details').removeClass('active');
   $('#list_login_details').addClass('inactive_tab1');
   $('#list_personal_details').removeClass('inactive_tab1');
   $('#list_personal_details').addClass('active_tab1 active');
   $('#list_personal_details').attr('href', '#personal_details');
   $('#list_personal_details').attr('data-toggle', 'tab');
   $('#personal_details').addClass('active in');
  }
 });
 
 $('#previous_btn_personal_details').click(function(){
  $('#list_personal_details').removeClass('active active_tab1');
  $('#list_personal_details').removeAttr('href data-toggle');
  $('#personal_details').removeClass('active in');
  $('#list_personal_details').addClass('inactive_tab1');
  $('#list_login_details').removeClass('inactive_tab1');
  $('#list_login_details').addClass('active_tab1 active');
  $('#list_login_details').attr('href', '#login_details');
  $('#list_login_details').attr('data-toggle', 'tab');
  $('#login_details').addClass('active in');
 });
 

/////////////////////////////////////////////////////////////////////////////////////
 //Fin verification page1 //////////////////
 ////////////////////////////////////////////////////////////////////////////////

var error_first_name = '';
  var error_last_name = '';
  var error_gender ='';
  var nameValid = /^[a-zA-Z]+$/; 

$('#first_name').keyup(function(){
var name = $('#first_name').val();
     if(name!='')
          {
           $('#error_first_name').hide();
          }
           return false;
 });

$('#last_name').keyup(function(){
var name2 = $('#last_name').val();
     if(name2!='')
          {
           $('#error_last_name').hide();
          }
           return false;
 });

 $('#btn_personal_details').click(function(){
  
  
  if($.trim($('#first_name').val()).length == 0)
  {
   error_first_name = 'First Name is required';
   $('#error_first_name').text(error_first_name);
   $('#first_name').addClass('has-error');
  }
  else {
     if (!nameValid.test($('#first_name').val()))
   {
     error_first_name = 'Format invalid';
    $('#error_first_name').text(error_first_name);
    $('#first_name').addClass('has-error');
   }
   else
  {
   error_first_name = '';
   $('#error_first_name').text(error_first_name);
   $('#first_name').removeClass('has-error');
  }
  }

  if($.trim($('#last_name').val()).length == 0)
  {
   error_last_name = 'Last Name is required';
   $('#error_last_name').text(error_last_name);
   $('#last_name').addClass('has-error');
  }
   else {
     if (!nameValid.test($('#last_name').val()))
   {
     error_last_name = 'Format invalid';
    $('#error_last_name').text(error_last_name);
    $('#last_name').addClass('has-error');
   }
  else
  {
   error_last_name = '';
   $('#error_last_name').text(error_last_name);
   $('#last_name').removeClass('has-error');
  }
}
if(($.trim($('#one').val()).checked == false) &&($.trim($('#two').val()).checked == false)  )
  {
   error_gender = 'obligatoire';
   $('#error_gender').text(error_gender);
   $('#gender').addClass('has-error');
  }
  else
  {
   error_gender = '';
   $('#error_gender').text(error_gender);
   $('#gender').removeClass('has-error');
  }


  if(error_first_name != '' || error_last_name != '')
  {
   return false;
  }
   else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_contact_details').removeClass('inactive_tab1');
   $('#list_contact_details').addClass('active_tab1 active');
   $('#list_contact_details').attr('href', '#contact_details');
   $('#list_contact_details').attr('data-toggle', 'tab');
   $('#contact_details').addClass('active in');
  }
 });
 
 $('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
  /////////////////////////////////////////////////////////////////////////////////////
 //Fin verification page2 //////////////////
 ////////////////////////////////////////////////////////////////////////////////
var error_address = '';
  var error_mobile_no = '';
  var error_term='';
  var mobile_validation = /^\d{8}$/;

$('#address').keyup(function(){
var locat = $('#address').val();
     if(locat!='')
          {
           $('#error_address').hide();
          }
           return false;
 });

$('#mobile_no').keyup(function(){
var numb = $('#mobile_no').val();

     if(numb!='')
          {
            error_mobile_no = '';
           $('#error_mobile_no').hide();
          }
     
           return false;
 });

$('#btn_contact_details').click(function(){
  
  if($.trim($('#address').val()).length == 0)
  {
   error_address = 'Address is required';
   $('#error_address').text(error_address);
   $('#address').addClass('has-error');
  }
  else
  {
   error_address = '';
   $('#error_address').text(error_address);
   $('#address').removeClass('has-error');
  }
  

  if($.trim($('#mobile_no').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no').text(error_mobile_no);
   $('#mobile_no').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#mobile_no').val()))
   {
    error_mobile_no2 = 'Invalid Mobile Number';
    $('#error_mobile_no2').text(error_mobile_no2);
    $('#mobile_no').addClass('has-error');
   }
   else
   {
    error_mobile_no2 = '';
    $('#error_mobile_no2').text(error_mobile_no2);
    $('#mobile_no').removeClass('has-error');
   }
  }

if( $('input[name="ckb"]').is(':checked') )
  {
    error_term = '';
   $('#error_term').text(error_term);
   $('#ckb').removeClass('has-error');
  }
  else
  {
     error_term = 'term of use not checked';
   $('#error_term').text(error_term);
   $('#ckb').addClass('has-error');
  }


  if(error_address != '' || error_mobile_no != '' || error_mobile_no2 != ''|| error_term !='' )
  {
   return false;
  }
  else
  {
   $('#btn_contact_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  }
  
 });
 
});
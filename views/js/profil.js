


var error_user = '';
   var error_mail = '';
   var error_mobile='';

      var formValid = document.getElementById('btn_contact_details');
   formValid.addEventListener('click', validation);

  $(document).ready(function(){
  
  
      
      $('.check_ok1').hide();
    $('.check_false1').hide();
    
    $('#email').keyup(function(){
      var email = $('#email').val();
      var dataString = 'email='+email;
      
      $.ajax({
        type: 'POST',
        url: '../Core/check_mail2.php',
        data: dataString,
        success:function(data){
          var responseData = jQuery.parseJSON(data)
          if(responseData.status=='error')
          {
            $('.check_ok1').hide();
            $('.check_false1').fadeIn();
            $('.check_false1').text(responseData.message);
          error_mail = 'error';
       
          }
          else
          {
            $('.check_false1').hide();
            $('.check_ok1').fadeIn();
            $('.check_ok1').text(responseData.message);
             error_mail = '';
           
          }
        }
      });
      return false;
    });

 $('.check_ok').hide();
    $('.check_false').hide();

 $('#user').keyup(function(){
      var pseudo = $('#user').val();
      var dataString = 'pseudo='+pseudo;
      
      $.ajax({
        type: 'POST',
        url: '../Core//check_user2.php',
        data: dataString,
        success:function(data){
          var responseData = jQuery.parseJSON(data)
          if(responseData.status=='error')
          {
            $('.check_ok').hide();
            $('.check_false').fadeIn();
            $('.check_false').text(responseData.message);
          error_user = 'error';
      
          }
          else
          {
            $('.check_false').hide();
            $('.check_ok').fadeIn();
            $('.check_ok').text(responseData.message);
             error_user = '';
         
          }
        }
      });
     
    });


 $('.check_ok2').hide();
    $('.check_false2').hide();

 $('#mobile').keyup(function(){
      var mobile = $('#mobile').val();
      var dataString = 'mobile='+mobile;
      
      $.ajax({
        type: 'POST',
        url: '../Core//check_mobile2.php',
        data: dataString,
        success:function(data){
          var responseData = jQuery.parseJSON(data)
          if(responseData.status=='error')
          {
            $('.check_ok2').hide();
            $('.check_false2').fadeIn();
            $('.check_false2').text(responseData.message);
          error_mobile = 'error';
      
          }
          else
          {
            $('.check_false2').hide();
            $('.check_ok2').fadeIn();
            $('.check_ok2').text(responseData.message);
             error_mobile = '';
         
          }
        }
      });
     
    });









});

  function validation(event){

      if(error_mail!='' || error_user!='' || error_mobile !='')
      { 
         event.preventDefault();

      }
  
    }





 

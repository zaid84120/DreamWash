$(".form_date").datetimepicker({
        format: "dd MM yyyy - HH:ii P",
        showMeridian: true,
        autoclose: true,
        todayBtn: true,
        startDate: new Date(),
        minuteStep: 10
    });

 $(".form_date_birth").datetimepicker({
        format: "dd MM yyyy",
        showMeridian: true,
        autoclose: true,       
        endDate: new Date(),
        todayHighlight: 1,
        startView: 2,
        minView: 2,
    });

 $(document).ready(function(){
    
      $("#myName").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_name").text("* You have to enter your first name!");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_name").text("");

          }
       });
        $("#lastname").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_lastname").text("* You have to enter your Last name!");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_lastname").text("");
          }
       });
         $("#appointment_date").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_appointment_date").text("* You have to enter your Appointment Date!");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_appointment_date").text("");
          }
       });
         $("#address1").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_address1").text("* You have to enter your Street Address");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_address1").text("");
          }
       });
           $("#address2").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_address2").text("* You have to enter your Street Address");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_address2").text("");
          }
       });
             $("#city").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_city").text("* You have to enter your City");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_city").text("");
          }
       });
             $("#region").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_region").text("* You have to enter your Region");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_region").text("");
          }
       });
             $("#zipcode").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_zipcode").text("* You have to enter your Zip Code / Postal Code");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_zipcode").text("");
          }
       });
        $("#dob").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_dob").text("* You have to enter your Date of Birth!");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_dob").text("");
          }
       });
        $("#country").focusout(function(){
          $(this).css("border-color", "#2eb82e");
       
       });
        $("#country").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_country").text("* Please Selet Your Country!");
          }
          else
          {
            $(this).css({"border-color":"#2eb82e"});
            $('#submit').attr('disabled',false);
            $("#error_country").text("");

          }
          });
        $("#car_type").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_car_type").text("* you have to enter car type");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_car_type").text("");
          }
       });
             $("#car_number").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_car_number").text("* you have to enter car number`");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_car_number").text("");
          }
       });
     

      $( "#submit" ).click(function() {
        if($("#myName" ).val()=='')
        {
            $("#myName").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_name").text("* You have to enter your first name!");
          }
          if($("#lastname" ).val()=='')
        {
            $("#lastname").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_lastname").text("* You have to enter your Last name!");
          }
           if($("#appointment_date" ).val()=='')
        {
            $("#appointment_date").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_appointment_date").text("* You have to enter your Appointment Date!");
          }
          if($("#address1" ).val()=='')
        {
            $("#address1").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_address1").text("* You have to enter your Street Address");
          }
           if($("#address2" ).val()=='')
        {
            $("#address2").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_address2").text("* You have to enter your Street Address");
          }
          if($("#city" ).val()=='')
        {
            $("#city").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_city").text("* You have to enter your City");
          }
            if($("#region" ).val()=='')
        {
            $("#region").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_region").text("* You have to enter your Region");
          }
          if($("#zipcode").val()=='')
        {
            $("#zipcode").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_zipcode").text("* You have to enter your Zip Code / Postal Code");
          }
        if($("#dob" ).val()=='')
        {
            $("#dob").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_dob").text("* You have to enter your Date of Birth!");
          }
        if($("#country" ).val()=='')
        {
            $("#country").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_country").text("* Please Select Your Country!");
          }

          if($("#package" ).val()=='')
        {
            $("#package").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_package").text("* Please Select Your package!");
          }
           if($("#car_type" ).val()=='')
        {
            $("#car_type").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_car_type").text("*You have to enter car type");
          }
           if($("#car_number" ).val()=='')
        {
            $("#car_number").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_car_number").text("* You have to enter car number");
          }
           if($("#car_number" ).val()=='')
        {
            
          }
          
         
      });


      
  });
//////////////////////////////////cancel form functionality/////////////////////////////////
  $(".cancel_form_date_birth").datetimepicker({
        format: "dd MM yyyy - HH:ii P",
        showMeridian: true,
        autoclose: true,
        todayBtn: true,
        minuteStep: 10,
        horizontal: 'right'
    });
 $(".cancel_form_date").datetimepicker({
        format: "dd MM yyyy - HH:ii P",
        showMeridian: true,
        autoclose: true,
        todayBtn: true,
        startDate: new Date(),
        minuteStep: 10,
        
    });

 function show1(){

  document.getElementById('div1').style.display ='block';
   if($("#re_appointment" ).val()=='' )
        {
            $("#re_appointment").css("border-color", "#FF0000");
              $('#cancel').attr('disabled',true);
               $("#error_re_appointment").text("* field should not be blank");
          }
}
function show2(){
  document.getElementById('div1').style.display = 'none';
}
 $(document).ready(function(){
    
      $("#c_fname").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#cancel').attr('disabled',true);
               $("#error_c_fname").text("* You have to enter your first name!");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#cancel').attr('disabled',false);
            $("#error_c_fname").text("");

          }
       });
        $("#c_lastname").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#cancel').attr('disabled',true);
              $("#error_c_lastname").text("* You have to enter your Last name!");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#cancel').attr('disabled',false);
            $("#error_c_lastname").text("");
          }
       });
         $("#appointment_original_date").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#cancel').attr('disabled',true);
              $("#error_appointment_original_date").text("* You have to enter your Original Appointment Date!");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#cancel').attr('disabled',false);
            $("#error_appointment_original_date").text("");
          }
       });
         // var phone = $("#phone").val();
         //    var phoneNum = phone.replace(/[^\d]/g, '');
         $("#phone").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#cancel').attr('disabled',true);
              $("#error_phone").text("* You have to enter your Phone Number");
          }
          // else if (phoneNum.length < 6 && phoneNum.length > 11){
            
            
          // }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#cancel').attr('disabled',false);
            $("#error_phone").text("");
          }
       });
       //     $('input[name="optradio"]').focusout(function(){
       //  if($(this).val()==false){
       //      $(this).css("border-color", "#FF0000");
       //        $('#cancel').attr('disabled',true);
       //        $("#error_optradio").text("* field`should not be blank");
       //    }
       //    else
       //    {
       //      $(this).css("border-color", "#2eb82e");
       //      $('#cancel').attr('disabled',false);
       //      $("#error_optradio").text("");
       //    }
       // });
           $('#appointment_with').focusout(function(){
        if($(this).val()=='' && $('input[name="optradio"]:checked').val()!==""){
            $(this).css("border-color", "#FF0000");
              $('#cancel').attr('disabled',true);
              $("#error_appointment_with").text("* field`should not be blank");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#cancel').attr('disabled',false);
            $("#error_appointment_with").text("");
          }
       });
            $('#re_appointment').focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#cancel').attr('disabled',true);
              $("#error_re_appointment").text("* field`should not be blank");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#cancel').attr('disabled',false);
            $("#error_re_appointment").text("");
          }
       });
            
       
        $( "#cancel" ).click(function() {
        if($("#c_fname" ).val()=='')
        {
            $("#c_fname").css("border-color", "#FF0000");
              $('#cancel').attr('disabled',true);
               $("#error_c_fname").text("* You have to enter your first name!");
          }
          if($("#c_lastname" ).val()=='')
        {
            $("#c_lastname").css("border-color", "#FF0000");
              $('#cancel').attr('disabled',true);
               $("#error_c_lastname").text("* You have to enter your Last name!");
          }
           if($("#appointment_original_date" ).val()=='')
        {
            $("#appointment_original_date").css("border-color", "#FF0000");
              $('#cancel').attr('disabled',true);
               $("#error_appointment_original_date").text("* You have to enter your Original Appointment Date!");
          }
          if($("#phone" ).val()=='')
        {
            $("#phone").css("border-color", "#FF0000");
              $('#cancel').attr('disabled',true);
               $("#error_phone").text("* You have to enter your Phone Number");
          }
           if($("#appointment_with" ).val()=='')
        {
            $("#appointment_with").css("border-color", "#FF0000");
              $('#cancel').attr('disabled',true);
               $("#error_appointment_with").text("* field should not be blank");
          }
        
          // if($('input[name="optradio"]:checked').val()==true){
          
          //     $('input[name="optradio"]').css("border-color", "#FF0000");
          //     $('#cancel').attr('disabled',true);
          //     $('#error_optradio').text("* You have to Select one");
          // }
         
         
         
      });


      
  });
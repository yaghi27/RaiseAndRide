$(document).ready(function(){
   $("#cancel").click(function(){
       $(".donate-now").addClass("hide");
   }) ;
   $(".donate").click(function(){
      $(".donate-now").removeClass("hide"); 
      var id = $(this).attr('id');
      $("#donationId").val(id);
   });
});



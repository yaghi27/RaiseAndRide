$(document).ready(function(){
    $(".cancelbtn").click(function(){
       $("#login").removeClass("hide");
       $("#signup").addClass("hide");
    });
    $("#signupBtn2").click(function(){
       $("#signup").removeClass("hide");
       $("#login").addClass("hide");
    });
    $("#fname").keyup(function(){
       if($("#fname").val()==="")
       {
           $("#alertfname").removeClass("displaynone");
       }
       else{
            $("#alertfname").addClass("displaynone");
       }
    });
    $("#lname").keyup(function(){
       if($("#lname").val()==="")
       {
           $("#alertlname").removeClass("displaynone");
       }
       else{
            $("#alertlname").addClass("displaynone");
       }
    });
    
    $("#email").keyup(function(){
       if($("#email").val()==="")
       {
           $("#alertemail").removeClass("displaynone");
       }
       else if(IsEmail($("#email").val())===false)
       {
          $("#alertemail").removeClass("displaynone");
       }
       else{
           $("#alertemail").addClass("displaynone");
       }
    });
    $("#psw").keyup(function(){
       if($("#psw").val()==="")
       {
           $("#alertpsw").removeClass("displaynone");
       }
       else if(IsPsw($("#psw").val())===false)
       {
          $("#alertpsw").removeClass("displaynone");
       }
       else{
           $("#alertpsw").addClass("displaynone");
       }
    });
    $("#psw-repeat").keyup(function(){
        if($('#psw-repeat').val()!==$("#psw").val())
        {
            $("#alertpsw-repeat").removeClass("displaynone");
        }
        else{
             $("#alertpsw-repeat").addClass("displaynone");
        }
    });
});
function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)) {
      return false;
    }else{
      return true;
    }
  }
function IsPsw(psw) {
  var regex = /^.*(?=.{8,})(?=.*[a-zA-Z])(?=.*\d)(?=.*[!#$%&? "]).*$/;
  if(!regex.test(psw)) {
    return false;
  }else{
    return true;
  }
}

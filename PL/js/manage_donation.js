$(document).ready(function(){
   $("#title1").keyup(function(){
       var html = `<div class="default-cause-column col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="inner-box hvr-float">
                    	<!--Image Box-->
                        <figure class="image-box"><img src="../images/image.jpeg" alt=""><a href="index.html#" class="overlay"></a><h3><a href="index.html#">`+$('#title1').val()+`</a></h3></figure>
                        <!--Lower Content-->
                        <div class="lower-content">
                        	<!--Donation Scale-->
                        	<div class="donation-scale">
                            	<div class="scale-header clearfix">
                                	<div class="pull-left">Raised</div>
                                    <div class="pull-right">Goal</div>
                                </div>
                                <div class="progress-box"><div class="bar-fill scroll-able-bar" data-percent="'.$percent1.'%"></div></div>
                                <div class="scale-footer clearfix">
                                	<div class="pull-left">0</div>
                                    <div class="pull-right">`+$('#goal').val()+`</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <!--Defult Text-->
                                <div class="default-text">`+$("#paragraph").val()+`</div>
                                <a class="theme-btn btn-style-two">Donate <span class="sep-icon"><i class="fa fa-angle-right"></i></span></a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>`;
       $("#test").empty(); 
        $("#test").append(html);
   });
   $("#paragraph").keyup(function(){
       var html = `<div class="default-cause-column col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="inner-box hvr-float">
                    	<!--Image Box-->
                        <figure class="image-box"><img src="../images/image.jpeg" alt=""><a href="index.html#" class="overlay"></a><h3><a href="index.html#">`+$('#title1').val()+`</a></h3></figure>
                        <!--Lower Content-->
                        <div class="lower-content">
                        	<!--Donation Scale-->
                        	<div class="donation-scale">
                            	<div class="scale-header clearfix">
                                	<div class="pull-left">Raised</div>
                                    <div class="pull-right">Goal</div>
                                </div>
                                <div class="progress-box"><div class="bar-fill scroll-able-bar" data-percent="'.$percent1.'%"></div></div>
                                <div class="scale-footer clearfix">
                                	<div class="pull-left">0</div>
                                    <div class="pull-right">`+$('#goal').val()+`</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <!--Defult Text-->
                                <div class="default-text">`+$("#paragraph").val()+`</div>
                                <a class="theme-btn btn-style-two">Donate <span class="sep-icon"><i class="fa fa-angle-right"></i></span></a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>`;
       $("#test").empty(); 
        $("#test").append(html);
   });
   $("#goal").keyup(function(){
       var html = `<div class="default-cause-column col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="inner-box hvr-float">
                    	<!--Image Box-->
                        <figure class="image-box"><img src="../images/image.jpeg" alt=""><a href="index.html#" class="overlay"></a><h3><a href="index.html#">`+$('#title1').val()+`</a></h3></figure>
                        <!--Lower Content-->
                        <div class="lower-content">
                        	<!--Donation Scale-->
                        	<div class="donation-scale">
                            	<div class="scale-header clearfix">
                                	<div class="pull-left">Raised</div>
                                    <div class="pull-right">Goal</div>
                                </div>
                                <div class="progress-box"><div class="bar-fill scroll-able-bar" data-percent="'.$percent1.'%"></div></div>
                                <div class="scale-footer clearfix">
                                	<div class="pull-left">0</div>
                                    <div class="pull-right">`+$('#goal').val()+`</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <!--Defult Text-->
                                <div class="default-text">`+$("#paragraph").val()+`</div>
                                <a class="theme-btn btn-style-two">Donate <span class="sep-icon"><i class="fa fa-angle-right"></i></span></a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>`;
       $("#test").empty(); 
        $("#test").append(html);
   });
   $(".cancel1").click(function(){
        $(".edit1").addClass("hide");
   });
   $(".edit").click(function(){
      $(".edit1").removeClass("hide"); 
      var id = $(this).attr('id');
      $("#donation_id").val(id);
      
   });
   $(".edit").click(function(){
       var id = $(this).attr("id");
        $.ajax({
             url:"http://localhost/RaiseAndRise/PL/views/editdonation.php",
             method: "POST",
             data: {html: id},
             dataType: "json",

             success: function(data)
             {
                  $("#title2").val(data[0]['tytle']);
                  $("#goal2").val(data[0]['goal']);
                  $("#paragraph2").val(data[0]['paragraph']);
             },
             error:function(){
                 alert("error");
             }
         })
   });
});



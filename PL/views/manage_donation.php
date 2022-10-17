<?php
    include 'header.php';
?>
<!DOCTYPE html>
	
	    <section class="reason-to-donate">
                <div class="auto-container" style="margin-top: 10%">
                    <div class="title-text">Create a donation</div>
                  
	
            <!--Form-->
            <div class="form wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
            	<form method="post" action="upload.php" enctype="multipart/form-data">
                      <div class="container">
                        <div id="test">

                        </div>
                    </div>
                	<div class="row clearfix">
                    	<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        	<input type="text" name="title" id="title1" value="" placeholder="Title">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="goal" id="goal" value="" placeholder="Goal">
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <textarea name="paragraph" id="paragraph" placeholder="Write a small paragraphe about your donation"></textarea>
                        </div>
                            Select image to upload:
                            <input type="file" accept="image/png, image/gif, image/jpeg" name="fileToUpload" id="fileToUpload">
                        <div class="form-group text-center col-lg-12 col-md-6 col-sm-6 col-xs-12">
                            <input type="submit" name="Submit" class="theme-btn btn-style-two light" value="Submit"><span class="sep-icon"></span>
                        </div>
                    </div>
                    
                </form>
            </div>
            
        </div>
        </section>
        <?php
        if(isset($_SESSION['id'])){
            include('../../DAL/Connection.php');
            $conn = OpenCon();
            $sql = "select * from donations id where userId = ".$_SESSION['id'] ."";
            $result = mysqli_query($conn,$sql);
            if($result->num_rows > 0)
            {
            while($row = mysqli_fetch_array($result))
            {
                $array[] = $row;
            }
            }
            echo '<section class="recent-causes-section " style="padding:0px !important">
    	<div class="outer-container" style="margin-top:10%">
        	<div class="lined-title"><h2>Fundraisers</h2></div>';
        $length = $result->num_rows;
        for ($i = 0; $length>=3 ; $i=$i+3) {
        $percent1 = $array[$i][6]/$array[$i][5]*100;
        $percent2 = $array[$i+1][6]/$array[$i+1][5]*100;
        $percent3 = $array[$i+2][6]/$array[$i+2][5]*100;
        echo'
            
            <div class="row clearfix">
            
            	<!--Default Cause Column-->
                <div class="default-cause-column col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="inner-box hvr-float">
                    	<!--Image Box-->
                        <figure class="image-box"><img src="../images/'.$array[$i][2].'" alt="" style="height:235px"><h3>'.$array[$i][3].'</h3></figure>
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
                                	<div class="pull-left">$ '.$array[$i][6].'</div>
                                    <div class="pull-right">$ '.$array[$i][5].'</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <!--Defult Text-->
                                <div class="default-text">'.$array[$i][4].'.</div>
                                <a id="'.$array[$i][0].'" class="edit theme-btn btn-style-two">Edit<span class="sep-icon"></span></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <!--Default Cause Column-->
                <div class="default-cause-column col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                	<div class="inner-box hvr-float">
                    	<!--Image Box-->
                        <figure class="image-box"><img src="../images/'.$array[$i+1][2].'" alt="" style="height:235px"><h3>'.$array[$i+1][3].'</h3></figure>
                        <!--Lower Content-->
                        <div class="lower-content">
                        	<!--Donation Scale-->
                        	<div class="donation-scale">
                            	<div class="scale-header clearfix">
                                	<div class="pull-left">Raised</div>
                                    <div class="pull-right">Goal</div>
                                </div>
                                <div class="progress-box"><div class="bar-fill scroll-able-bar" data-percent="'.$percent2.'%"></div></div>
                                <div class="scale-footer clearfix">
                                	<div class="pull-left">'.$array[$i+1][6].'</div>
                                    <div class="pull-right">'.$array[$i+1][5].'</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <!--Defult Text-->
                                <div class="default-text">'.$array[$i+1][4].'</div>
                               <a id="'.$array[$i+1][0].'" class="edit theme-btn btn-style-two">Edit <span class="sep-icon"></span></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <!--Default Cause Column-->
                <div class="default-cause-column col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                	<div class="inner-box hvr-float">
                    	<!--Image Box-->
                        <figure class="image-box"><img src="../images/'.$array[$i+2][2].'" alt="" style="height:235px"><h3>'.$array[$i+2][3].'</h3></figure>
                        <!--Lower Content-->
                        <div class="lower-content">
                        	<!--Donation Scale-->
                        	<div class="donation-scale">
                            	<div class="scale-header clearfix">
                                	<div class="pull-left">Raised</div>
                                    <div class="pull-right">Goal</div>
                                </div>
                                <div class="progress-box"><div class="bar-fill scroll-able-bar" data-percent="'.$percent3.'%"></div></div>
                                <div class="scale-footer clearfix">
                                	<div class="pull-left">'.$array[$i+2][6].'</div>
                                    <div class="pull-right">'.$array[$i+2][5].'</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <!--Defult Text-->
                                <div class="default-text">'.$array[$i+2][4].'</div>
                                <a id="'.$array[$i+2][0].'" class="edit theme-btn btn-style-two">Edit <span class="sep-icon"></span></a>
                            </div>
                            </div>
                        </div>
                    
                    </div>
                    
                </div>';

        $length = $length-3;
        }        
        if($length==0){
            echo`   </div>
                 </div>
             </section>`;
        }
        if($length==1){
            $percent1 = $array[$result->num_rows-1][6]/$array[$result->num_rows-1][5]*100;
            echo '<div class="row clearfix">
            
            	<!--Default Cause Column-->
                <div class="default-cause-column col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="inner-box hvr-float">
                    	<!--Image Box-->
                        <figure class="image-box"><img src="../images/'.$array[$result->num_rows-1][2].'" alt="" style="height:235px"><h3>'.$array[$result->num_rows-1][3].'</h3></figure>
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
                                	<div class="pull-left">$ '.$array[$result->num_rows-1][6].'</div>
                                    <div class="pull-right">$ '.$array[$result->num_rows-1][5].'</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <!--Defult Text-->
                                <div class="default-text">'.$array[$result->num_rows-1][4].'.</div>
                               <a id="'.$array[$result->num_rows-1][0].'" class="edit theme-btn btn-style-two">Edit <span class="sep-icon"></span></a>
                            </div>
                          
                            </div>
                        </div>
                    </div>
                    
                </div>
               </div>
                 </div>
             </section>';
        }
        if($length==2){
            $percent1 = $array[$result->num_rows-2][6]/$array[$result->num_rows-2][5]*100;
            $percent2 = $array[$result->num_rows-1][6]/$array[$result->num_rows-1][5]*100;
            echo '                        <div class="row clearfix">
            
            	<!--Default Cause Column-->
                <div class="default-cause-column col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="inner-box hvr-float">
                    	<!--Image Box-->
                        <figure class="image-box"><img src="../images/'.$array[$result->num_rows-2][2].'" alt="" style="height:235px"><h3>'.$array[$result->num_rows-2][3].'</h3></figure>
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
                                	<div class="pull-left">$ '.$array[$result->num_rows-2][6].'</div>
                                    <div class="pull-right">$ '.$array[$result->num_rows-2][5].'</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <!--Defult Text-->
                                <div class="default-text">'.$array[$result->num_rows-2][4].'.</div>
                                <a id="'.$array[$result->num_rows-2][0].'" class="edit theme-btn btn-style-two">Edit <span class="sep-icon"></span></a>
                            </div>
                          
                            </div>
                        </div>
                    </div>
                    
                

             <div class="default-cause-column col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                 <div class="inner-box hvr-float">
                    	<!--Image Box-->
                        <figure class="image-box"><img src="../images/'.$array[$result->num_rows-1][2].'" alt="" style="height:235px"><h3>'.$array[$result->num_rows-1][3].'</h3></figure>
                        <!--Lower Content-->
                        <div class="lower-content">
                        	<!--Donation Scale-->
                        	<div class="donation-scale">
                            	<div class="scale-header clearfix">
                                	<div class="pull-left">Raised</div>
                                    <div class="pull-right">Goal</div>
                                </div>
                                <div class="progress-box"><div class="bar-fill scroll-able-bar" data-percent="'.$percent2.'%"></div></div>
                                <div class="scale-footer clearfix">
                                	<div class="pull-left">$ '.$array[$result->num_rows-1][6].'</div>
                                    <div class="pull-right">$ '.$array[$result->num_rows-1][5].'</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <!--Defult Text-->
                                <div class="default-text">'.$array[$result->num_rows-1][4].'.</div>
                                <a id="'.$array[$result->num_rows-1][0].'" class="edit theme-btn btn-style-two">Edit <span class="sep-icon"></span></a>
                            </div>
                          
                            </div>
                        </div>
                    </div>
                    
                </div>
               ';

        }
        echo    '</div>
             </section>';

            CloseConn($conn);
        }
    ?>
<div class="edit1 hide" id="edit">
        <section class="reason-to-donate">
                <div class="auto-container">
                    <div class="title-text">Edit</div>
                  
	
            <!--Form-->
            <div class="form wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
            	<form method="post" action="edit.php" enctype="multipart/form-data">
                	<div class="row clearfix">
                    	<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        	<input type="text" name="title" id="title2" value="" placeholder="Title">
                                <input class="hide" type="text" id="donation_id" name="donation_id">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="goal" id="goal2" value="" placeholder="Goal">
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <textarea name="paragraph" id="paragraph2" placeholder="Write a small paragraphe about your donation"></textarea>
                        </div>
                            Select image to upload:
                            <input type="file" accept="image/png, image/gif, image/jpeg" name="fileToUpload" id="fileToUpload">
                            <div class="row clearfix" style="margin-top: 2%;"> 
                               <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
                            <input type="submit" name="Submit" class="theme-btn btn-style-two light" value="Submit"><span class="sep-icon"></span>
                               </div>
                                <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input type="submit" name="Delete" class="theme-btn btn-style-two light" value="Delete"><span class="sep-icon"></span>

                                </div>
                                <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               <button type="Button" class="cancel1 theme-btn btn-style-two light" style="width: 182px;margin-top: 0;">Cancel</button>
                                </div>
                               </div>
                        
                    </div>
                    
                </form>
            </div>
            
        </div>
        </section>
    </div>
	<!--Main Footer-->
    <?php
        include 'footer.php';
    ?>
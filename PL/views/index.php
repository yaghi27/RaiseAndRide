<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
    include "header.php";
?>
    <section class="about-section" >
        <?php
        if(isset($_SESSION['id']))
        {
            echo'<h1 style="margin-top: 5%;">welcome back '.$_SESSION['name'].'</h1>';
        }
    ?>
    	<div class="auto-container" style="margin-top: 10%">
        	<div class="centered-title"><h2>About US</h2></div>
            
            <div class="content-container">
                <!--Tabs Box-->
                <div class="tabs-box">
                	

                    
                    <!--Tabs Content-->
                    <div class="tabs-content">
                    	
                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="history-tab">
                        	<div class="row clearfix">
                            	<!--Content Column-->
                                <div class="column content-column col-md-6 col-xs-12">
                                	<div class="inner" style="text-align: center">
                                		                                <p>
                                    <b>Hope could be the essence of life.</b><br/>
                                    People around the world are raising money for what they are passionate about.
                                    A lot of us could not also live a life of comfort with no hope deep within the heart.
                                    
                                </p>    
                                    </div>
                                </div>
                                
                                <!--Image Column-->
                                <div class="column image-column col-md-6 col-xs-12">
                                	<div class="inner">
                                		<figure class="image-box"><img src="../images/resource/featured-image-1.jpg" alt=""></figure>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                       
                        
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>
            <?php
        include('../../DAL/Connection.php');
        $conn = OpenCon();
        $sql = "select * from donations  where raised < goal order by id desc";
        $result = mysqli_query($conn,$sql);
        if($result->num_rows > 0)
        {
        while($row = mysqli_fetch_array($result))
        {
            $array[] = $row;
        }
        }
        $percent1 = $array[0][6]/$array[0][5]*100;
        $percent2 = $array[1][6]/$array[1][5]*100;
        $percent3 = $array[2][6]/$array[2][5]*100;
        echo'<section class="recent-causes-section dark-layout">
    	<div class="outer-container" style="margin-top:10%">
        	<div class="lined-title"><h2>Recent Causes</h2></div>
            
            <div class="row clearfix">
            
            	<!--Default Cause Column-->
                <div class="default-cause-column col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="inner-box hvr-float">
                    	<!--Image Box-->
                        <figure class="image-box"><img src="../images/'.$array[0][2].'" alt="" style="height:235px"><h3>'.$array[0][3].'</h3></figure>
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
                                	<div class="pull-left">$ '.$array[0][6].'</div>
                                    <div class="pull-right">$ '.$array[0][5].'</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <!--Defult Text-->
                                <div class="default-text">'.$array[0][4].'.</div>
                                <a href="fundraiser.php" class="theme-btn btn-style-two">Donate <span class="sep-icon"><i class="fa fa-angle-right"></i></span></a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
                <!--Default Cause Column-->
                <div class="default-cause-column col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                	<div class="inner-box hvr-float">
                    	<!--Image Box-->
                        <figure class="image-box"><img src="../images/'.$array[1][2].'" alt="" style="height:235px"><h3>'.$array[1][3].'</h3></figure>
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
                                	<div class="pull-left">'.$array[1][6].'</div>
                                    <div class="pull-right">'.$array[1][5].'</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <!--Defult Text-->
                                <div class="default-text">'.$array[1][4].'</div>
                                <a href="fundraiser.php" class="theme-btn btn-style-two">Donate <span class="sep-icon"><i class="fa fa-angle-right"></i></span></a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
                <!--Default Cause Column-->
                <div class="default-cause-column col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                	<div class="inner-box hvr-float">
                    	<!--Image Box-->
                        <figure class="image-box"><img src="../images/'.$array[2][2].'" alt="" style="height:235px"><h3>'.$array[2][3].'</h3></figure>
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
                                	<div class="pull-left">'.$array[2][6].'</div>
                                    <div class="pull-right">'.$array[2][5].'</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <!--Defult Text-->
                                <div class="default-text">'.$array[2][4].'</div>
                                <a href="fundraiser.php" class="theme-btn btn-style-two">Donate <span class="sep-icon"><i class="fa fa-angle-right"></i></span></a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
           
            
        </div>
    </section>';
        CloseConn($conn);
    ?>
    
    <!-- ---------------------------------------------------------------------------------------------------------------------- -->
        
    <!--Main Footer-->
    <section class="testimonials-section" style="background-image:url('images/parallax/image-1.jpg');">
    	<div class="slider-outer">
        	<div class="testimonial-carousel">
            	
                <!--Slide Item-->
                <div class="slide-item">
                	<div class="slide-content">
                    	<div class="upper-info">
                            <h4>Anthony Sayegh</h4>
                            <div class="designation">Developer</div>
                        </div>
                        <div class="text"></div>
                        
                        <div class="lower-info">
                        	<div class="signature">Anthony Sayegh</div>
                        </div>
                        
                    </div>
                </div>
                
                
                <!--Slide Item-->
                <div class="slide-item">
                	<div class="slide-content">
                    	<div class="upper-info">
                            <h4>Anthony Yaghi</h4>
                            <div class="designation">Developer</div>
                        </div>
                        <div class="text"></div>
                        
                        <div class="lower-info">
                        	<div class="signature">Yaghi</div>
                        </div>
                        
                    </div>
                </div>
                
				                
                </div>
                
            </div>
        </div>
    </section>
    <?php
        include 'footer.php';
    ?>
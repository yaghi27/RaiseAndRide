    <?php
        include 'header.php';
        include('../../DAL/Connection.php');
        $conn = OpenCon();
        $sql = "select * from donations where raised < goal";
        $result = mysqli_query($conn,$sql);
        if($result->num_rows > 0)
        {
        while($row = mysqli_fetch_array($result))
        {
            $array[] = $row;
        }
        }
        echo '<section class="recent-causes-section dark-layout">
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
                                <a id="'.$array[$i][0].'" class="donate theme-btn btn-style-two">Donate <span class="sep-icon"><i class="fa fa-angle-right"></i></span></a>
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
                                <a id="'.$array[$i+1][0].'" class="donate theme-btn btn-style-two">Donate <span class="sep-icon"><i class="fa fa-angle-right"></i></span></a>
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
                                <a id="'.$array[$i+2][0].'" class="donate theme-btn btn-style-two">Donate <span class="sep-icon"><i class="fa fa-angle-right"></i></span></a>
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
                                <a id="'.$array[$result->num_rows-1][0].'" class="donate theme-btn btn-style-two">Donate <span class="sep-icon"><i class="fa fa-angle-right"></i></span></a>
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
                                <a id="'.$array[$result->num_rows-2][0].'" class="donate theme-btn btn-style-two">Donate <span class="sep-icon"><i class="fa fa-angle-right"></i></span></a>
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
                                <a id="'.$array[$result->num_rows-1][0].'" class="donate theme-btn btn-style-two">Donate <span class="sep-icon"><i class="fa fa-angle-right"></i></span></a>
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
    ?>
    <section class="donate-now hide">
    	<div class="outer-container">
        	<div class="centered-title">
            	<h2>Donate Now</h2>
            
            <div class="donate-form wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                <form method="post" action="donation.php">
                	<div class="amount-options">
                    	<div class="radio-box"><input type="radio" name="don-payment" value="100" id="amount-1"><label for="amount-1"><span class="icon flaticon-tick-inside-circle"></span> $ 100</label></div>
                        <div class="radio-box"><input type="radio" name="don-payment" value="200" id="amount-2"><label for="amount-2"><span class="icon flaticon-tick-inside-circle"></span> $ 200</label></div>
                        <div class="radio-box"><input type="radio" name="don-payment" value="500" id="amount-3"><label for="amount-3"><span class="icon flaticon-tick-inside-circle"></span> $ 500</label></div>
                        <div class="radio-box"><input type="radio" name="don-payment" value="1000" id="amount-4"><label for="amount-4"><span class="icon flaticon-tick-inside-circle"></span> $ 1000</label></div>
                        
                        <div class="or">OR</div>
                        
                        <div class="other-amount"><input type="text" id="other-amount" name="other-payment" value="" placeholder="- Enter Amount -"></div>
                        
                        <input type="number" name="donationId" class="hide" id="donationId" ><br>
                        <button type="button" name="cancel" id="cancel" class="theme-btn btn-style-two light">Cancel</button>
                        <button type="submit" name="submit" class="theme-btn btn-style-two light">Donate <span class="sep-icon"><i class="fa fa-angle-right"></i></span></button>
                        


               
                    </div>
                </form>
            </div>
         </div>
    	</div>
    </section>
    
    </body>
    <?php
        include 'footer.php';
    ?>
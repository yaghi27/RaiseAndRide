<?php   
    include 'header.php';
    include('../../DAL/Connection.php'); 
    if(isset($_POST['submit'])){
        $search = $_POST['search'];
        $conn = OpenCon();
        $sql = "select * from donations where tytle like '%".$search."%'";
       $result = mysqli_query($conn,$sql);
            if($result->num_rows > 0)
            {
            while($row = mysqli_fetch_array($result))
            {
                $array[] = $row;
            }
            }
            echo'<section class="recent-causes-section dark-layout">
            <div class="outer-container" style="margin-top:10%">
                    <div class="lined-title"><h2>Search result:</h2></div>

                <div class="row clearfix">

                    <!--Default Cause Column-->';
            for ($i = 0; $i <$result->num_rows ; $i++) {
            $percent1 = $array[$i][6]/$array[$i][5]*100;;
            echo'
                    <div class="default-cause-column col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="inner-box hvr-float">
                            <!--Image Box-->
                            <figure class="image-box"><img src="../images/'.$array[$i][2].'" alt="" style="height:235px"><a href="index.html#" class="overlay"></a><h3><a href="index.html#">'.$array[$i][3].'</a></h3></figure>
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
                                    <a href="fundraiser" class="theme-btn btn-style-two">Donate <span class="sep-icon"><i class="fa fa-angle-right"></i></span></a>
                                </div>

                            </div>
                        </div>

                    </div>';
            }
            echo'       </div>
                    </div>
                </section>';

            CloseConn($conn);
        }
        include 'footer.php';
    ?>
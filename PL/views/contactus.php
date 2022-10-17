<?php
    include 'header.php';
?>
<section class="page-title" style="background-image:url('../images/background/page-title-1.jpg');">
    <div class="auto-container">
        <h1>Get In Touch</h1>
    </div>
</section> 
    
    
    <!--Contact Section-->
<section class="contact-section">
    <div class="auto-container">

        <!--Form Container-->
        <div class="form-container wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="title-text">Contact</div>

            <!--Form-->
            <div class="form">
                <form id="contact-form" method="post" action="contact.php">
                    <div class="row clearfix">

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <textarea name="message" placeholder="Message.."></textarea>
                        </div>

                        <div class="form-group text-center margin-top-30 col-lg-12 col-md-6 col-sm-6 col-xs-12">
                            <button type="submit" name="submit" class="theme-btn">Send</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</section>
<?php
    include 'footer.php';
?>

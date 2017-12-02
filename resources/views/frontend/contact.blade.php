 @extends ('../layouts.master')
 


 @section('content')

 
<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>contact Us</h3>
        </div><!-- /.box -->
    </div><!-- /.container -->
</div>

<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li><!-- comment for inline hack
                --><li>
                    contact Us
                </li>
            </ul><!-- /.list-line -->
        </div><!-- /.pull-left -->
        <div class="pull-right">
            <a href="#" class="get-qoute"><i class="fa fa-share"></i>share</a>
        </div><!-- /.pull-right -->
    </div><!-- /.container -->
</div>



<section class="contact_us">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3>Contact Us</h3>
                </div>
                <div class="default-form-area">
                    <form id="contact-form" name="contact_form" class="default-form" action="http://wp.hostlin.com/economy-plus/inc/sendmail.php" method="post">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                    <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="form_email" class="form-control required email" value="" placeholder="Your Mail *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control textarea required" placeholder="Your Message...."></textarea>
                                </div>
                            </div>   
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">send message</button>
                                </div>
                            </div>   

                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4 col-sm-8 col-xs-12">
                <div class="section-title">
                    <h3>Get in Touch</h3>
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, vix an natum labitur eleifend, mel amet a laorit menandri.</p>
                </div>
                <br>
                <div class="default-cinfo">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                            
                            <div class="acc-content collapsed">
                                <ul class="contact-infos">
                                    <li>
                                        <div class="icon_box">
                                            <i class="fa fa-map-marker"></i>
                                        </div><!-- /.icon-box -->
                                        <div class="text-box">
                                            <p><b>Address:</b> <br> Marché Nkoleton,Yaoundé, Cameroun.</p>
                                        </div><!-- /.text-box -->
                                    </li>
                                    <li>
                                        <div class="icon_box">
                                            <i class="fa fa-phone"></i>
                                        </div><!-- /.icon-box -->
                                        <div class="text-box">
                                            <p><b>Call Us:</b> <br> +222 4444 88 999</p>
                                        </div><!-- /.text-box -->
                                    </li>
                                    <li>
                                        <div class="icon_box">
                                            <i class="fa fa-envelope"></i>
                                        </div><!-- /.icon-box -->
                                        <div class="text-box">
                                            <p><b>Mail Us:</b> <br> support@ynote.cm</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
            
        </div>
    </div>
</section>

<div class="home-google-map">
    <div 
        class="google-map" 
        id="contact-google-map" 
        data-map-lat="39.006809" 
        data-map-lng="-77.429292" 
        data-icon-path="images/logo/map-marker.png"
        data-map-title="Chester"
        data-map-zoom="11" >

    </div>

</div>

 @endsection
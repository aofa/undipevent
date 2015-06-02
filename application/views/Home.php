<div id="slider_area">
    <div style="min-height: 50px;">
        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
        <!-- ================================================== -->
        <div id="slider1_container" style="display: none; position: relative; margin: 0 auto;
             top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">
            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                     top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
                <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                     top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
            </div>
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
                <div>
                    <img u="image" src2="<?php echo base_url(); ?>assets/images/slider/red.jpg" />
                </div>
                <div>
                    <img u="image" src2="<?php echo base_url(); ?>assets/images/slider/purple.jpg" />
                </div>
                <div>
                    <img u="image" src2="<?php echo base_url(); ?>assets/images/slider/blue.jpg" />
                </div>
            </div>

            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
        </div>
        <!-- Jssor Slider End -->
    </div>
</div>
<div id="main_content">
    <div class="row">
        <h4>Event Terdekat</h4>
        <div id="thumbnail_area">
            <div class="row">
                
            </div>
        </div>
        <div id="panel_search">
            <div style="float:right;margin: 0px 0px 10px 10px;padding-right: 0px"class="col-lg-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="clear">
            <!-- menampilkan pemilihan kategori-->
            <div id="filter">
                <div id="filter_left">
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;All Categories</h4>
                    <hr><br>
                    <?php
                    $i = 1;
                    for ($i == 1; $i <= 8; $i++) {
                        echo"<div class='item_category'><a href='" . base_url() . "index.php/website/kategori'>Kategori " . $i . "</a></div>";
                    }
                    ?>
                </div>
                <div id="filter_right">
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;All Months</h4>
                    <hr><br>
                    <div class="month_area">
                        <?php
                        $month = array();
                        $month[0] = 'Jan';
                        $month[1] = 'Feb';
                        $month[2] = 'Mar';
                        $month[3] = 'Apr';
                        $month[4] = 'Mei';
                        $month[5] = 'Jun';
                        $month[6] = 'Jul';
                        $month[7] = 'Agu';
                        $month[8] = 'Sep';
                        $month[9] = 'Okt';
                        $month[10] = 'Nov';
                        $month[11] = 'Des';
                        $i = 0;
                        while ($i <= 11) {
                            echo"<div class='item_month'><a href='" . base_url() . "index.php/website/kategori'>" . $month[$i] . "</a></div>";
                            $i++;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <!-- menampilkan pemilihan isi-->
            <div id="content_area">
                <div id="content_left">
                    <h4>About</h4>
                    <div class="desc_left">
                        <div class="col-xs-6 col-md-12">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>assets/images/logodcs.jpg" alt="sample">
                            </div>
                        </div>
                    </div>
                    <div class="desc_right">
                        <p>Internet (kependekan dari interconnection-networking) adalah seluruh jaringan komputer yang saling terhubung menggunakan standar sistem global Transmission Control Protocol/Internet Protocol Suite (TCP/IP) sebagai protokol pertukaran paket (packet switching communication protocol) untuk melayani miliaran pengguna di seluruh dunia.Rangkaian internet yang terbesar dinamakan Internet. Cara menghubungkan rangkaian dengan kaidah ini dinamakan internetworking ("antarjaringan").</p>
                    </div>
                    <div class="clear"></div>
                    <h4>Contact</h4>
                    <div class="desc_left">
                        <ul class="contact_list">
                            <li><img src='<?php echo base_url(); ?>assets/images/location1.png' alt="icon"><p>JL. Prof.Soedarto, Tembalang, Semarang</p></li>
                            <li><img src='<?php echo base_url(); ?>assets/images/phone1.png' alt="icon"><p>(024) 2488822</p></li>
                            <li><img src='<?php echo base_url(); ?>assets/images/mail1.png' alt="icon"><p>official@undipevent.com</p></li>
                        </ul>
                    </div>
                    <div class="desc_right">
                        <div class="map_area">
                            <iframe  width="100%"  height="100%"  frameborder="0" style="border:0"  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCR90FYVWUK09b034TjWqbY2QvUqVre0KA &q=perumda+tembalang+semarang"></iframe>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="content_right">
                    <div id="recent_event">
                        <div class="head_recent_event">Recent Event</div>
                        <?php
                        $i = 1;
                        for ($i == 1; $i <= 7; $i++) {
                            echo"<div class='item_recent_event'>
                                    <div class='item_recent_event_title'>
                                        <Strong>Nama Event " . $i . "</strong>
                                    </div>
                                    <div class='item_recent_event_note'>
                                        <small>Himpunan Mahasiswa Teknik Informatika </small>
                                    </div>
                                    <div class='item_recent_event_note'>
                                        <small>1 September 2015</small>
                                    </div>
                                </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- doc slider -->
    <script src="<?php echo base_url(); ?>assets/js/docs.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <!-- use jssor.js + jssor.slider.js instead for development -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jssor.slider.mini.js"></script>
    <!--#region Bullet Navigator Skin Begin -->
    <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
    <style>
        /* jssor slider bullet navigator skin 21 css */
        /*
        .jssorb21 div           (normal)
        .jssorb21 div:hover     (normal mouseover)
        .jssorb21 .av           (active)
        .jssorb21 .av:hover     (active mouseover)
        .jssorb21 .dn           (mousedown)
        */
        .jssorb21 {
            position: absolute;
        }
        .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
            position: absolute;
            /* size of bullet elment */
            width: 19px;
            height: 19px;
            text-align: center;
            line-height: 19px;
            color: white;
            font-size: 12px;
            background: url(<?php echo base_url(); ?>assets/images/slider/b21.png) no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb21 div { background-position: -5px -5px; }
        .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
        .jssorb21 .av { background-position: -65px -5px; }
        .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
    </style>
    <!--#region Arrow Navigator Skin Begin -->
    <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
    <style>
        .jssora21l, .jssora21r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url(<?php echo base_url(); ?>assets/images/slider/a21.png) center center no-repeat;
            overflow: hidden;
        }
        .jssora21l { background-position: -3px -33px; }
        .jssora21r { background-position: -63px -33px; }
        .jssora21l:hover { background-position: -123px -33px; }
        .jssora21r:hover { background-position: -183px -33px; }
        .jssora21l.jssora21ldn { background-position: -243px -33px; }
        .jssora21r.jssora21rdn { background-position: -303px -33px; }
    </style>

    <script>
        jQuery(document).ready(function ($) {

            var options = {
                $FillMode: 2, //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1, //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true, //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint, //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20, //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1, //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0, //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1, //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1, //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {//[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$, //[Required] Class to create navigator instance
                    $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1, //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1, //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1, //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8, //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8, //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1, //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },
                $ArrowNavigatorOptions: {//[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1, //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2, //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            //Make the element 'slider1_container' visible before initialize jssor slider.
            $("#slider1_container").css("display", "block");
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
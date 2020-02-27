<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Conversas</title>
        <!-- GLOBAL MAINLY STYLES-->
        <link href="<?= base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?= base_url() ?>assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
        <!-- PLUGINS STYLES-->
        <link href="<?= base_url() ?>assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
        <!-- THEME STYLES-->
        <link href="<?= base_url() ?>assets/css/main.min.css" rel="stylesheet" />
        <!-- PAGE LEVEL STYLES-->
        <link href='<?= base_url() ?>assets/css/themes/blue.css' rel='stylesheet' id='theme-style' />

        <link href='<?= base_url() ?>assets/css/chat.css' rel='stylesheet' id='theme-style' />
    </head>

    <body class="fixed-navbar fixed-layout boxed-layout">
        <div class="page-wrapper">
            <!--SIDEBAR-->
            <?php include APPPATH . 'views/includes/header.php'; ?>

            <div class="content-wrapper">
                <!-- START PAGE CONTENT-->
                <div class="page-content fade-in-up">

                    <div class="row">
                        <div class="col-lg-12">

                            <div id="frame">    
                                <div id="sidepanel">
                                    <div id="profile">
                                        <div class="wrap">
                                            <img id="profile-img" src="http://emilcarlsson.se/assets/mikeross.png" class="online" alt="" />
                                            <p>Mike Ross</p>
                                            <!--
                                            <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
                                            -->
                                            
                                            <div id="status-options">
                                                <ul>
                                                    <li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>
                                                    <li id="status-away"><span class="status-circle"></span> <p>Away</p></li>
                                                    <li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>
                                                    <li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>
                                                </ul>
                                            </div>
                                            <!--
                                            <div id="expanded">
                                                <label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
                                                <input name="twitter" type="text" value="mikeross" />
                                                <label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
                                                <input name="twitter" type="text" value="ross81" />
                                                <label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
                                                <input name="twitter" type="text" value="mike.ross" />
                                            </div>
                                            -->
                                        </div>
                                    </div>
                                    <div id="search">
                                        <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
                                        <input type="text" placeholder="Procurar conctactos..." />
                                    </div>
                                    <div id="contacts">
                                        <ul>
                                            <li class="contact">
                                                <div class="wrap">
                                                    <span class="contact-status online"></span>
                                                    <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
                                                    <div class="meta">
                                                        <p class="name">Louis Litt</p>
                                                        <p class="preview">You just got LITT up, Mike.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="contact active">
                                                <div class="wrap">
                                                    <span class="contact-status busy"></span>
                                                    <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                                    <div class="meta">
                                                        <p class="name">Harvey Specter</p>
                                                        <p class="preview">Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="contact">
                                                <div class="wrap">
                                                    <span class="contact-status away"></span>
                                                    <img src="http://emilcarlsson.se/assets/rachelzane.png" alt="" />
                                                    <div class="meta">
                                                        <p class="name">Rachel Zane</p>
                                                        <p class="preview">I was thinking that we could have chicken tonight, sounds good?</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="contact">
                                                <div class="wrap">
                                                    <span class="contact-status online"></span>
                                                    <img src="http://emilcarlsson.se/assets/donnapaulsen.png" alt="" />
                                                    <div class="meta">
                                                        <p class="name">Donna Paulsen</p>
                                                        <p class="preview">Mike, I know everything! I'm Donna..</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="contact">
                                                <div class="wrap">
                                                    <span class="contact-status busy"></span>
                                                    <img src="http://emilcarlsson.se/assets/jessicapearson.png" alt="" />
                                                    <div class="meta">
                                                        <p class="name">Jessica Pearson</p>
                                                        <p class="preview">Have you finished the draft on the Hinsenburg deal?</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="contact">
                                                <div class="wrap">
                                                    <span class="contact-status"></span>
                                                    <img src="http://emilcarlsson.se/assets/haroldgunderson.png" alt="" />
                                                    <div class="meta">
                                                        <p class="name">Harold Gunderson</p>
                                                        <p class="preview">Thanks Mike! :)</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="contact">
                                                <div class="wrap">
                                                    <span class="contact-status"></span>
                                                    <img src="http://emilcarlsson.se/assets/danielhardman.png" alt="" />
                                                    <div class="meta">
                                                        <p class="name">Daniel Hardman</p>
                                                        <p class="preview">We'll meet again, Mike. Tell Jessica I said 'Hi'.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="contact">
                                                <div class="wrap">
                                                    <span class="contact-status busy"></span>
                                                    <img src="http://emilcarlsson.se/assets/katrinabennett.png" alt="" />
                                                    <div class="meta">
                                                        <p class="name">Katrina Bennett</p>
                                                        <p class="preview">I've sent you the files for the Garrett trial.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="contact">
                                                <div class="wrap">
                                                    <span class="contact-status"></span>
                                                    <img src="http://emilcarlsson.se/assets/charlesforstman.png" alt="" />
                                                    <div class="meta">
                                                        <p class="name">Charles Forstman</p>
                                                        <p class="preview">Mike, this isn't over.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="contact">
                                                <div class="wrap">
                                                    <span class="contact-status"></span>
                                                    <img src="http://emilcarlsson.se/assets/jonathansidwell.png" alt="" />
                                                    <div class="meta">
                                                        <p class="name">Jonathan Sidwell</p>
                                                        <p class="preview"><span>You:</span> That's bullshit. This deal is solid.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="bottom-bar">
                                        <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
                                        <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="contact-profile">
                                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                        <p>Harvey Specter</p>
                                        <div class="social-media">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="messages">
                                        <ul>
                                            <li class="sent">
                                                <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                                                <p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
                                            </li>
                                            <li class="replies">
                                                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                                <p>When you're backed against the wall, break the god damn thing down.</p>
                                            </li>
                                            <li class="replies">
                                                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                                <p>Excuses don't win championships.</p>
                                            </li>
                                            <li class="sent">
                                                <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                                                <p>Oh yeah, did Michael Jordan tell you that?</p>
                                            </li>
                                            <li class="replies">
                                                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                                <p>No, I told him that.</p>
                                            </li>
                                            <li class="replies">
                                                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                                <p>What are your choices when someone puts a gun to your head?</p>
                                            </li>
                                            <li class="sent">
                                                <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                                                <p>What are you talking about? You do what they say or they shoot you.</p>
                                            </li>
                                            <li class="replies">
                                                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                                <p>Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="message-input">
                                        <div class="wrap">
                                            <input type="text" placeholder="Write your message..." />
                                            <i class="fa fa-paperclip attachment" aria-hidden="true"></i>
                                            <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT-->
                <!-- FOOTER -->
                <?php include APPPATH . 'views/includes/footer.php'; ?>
            </div>
        </div>
        <!-- BEGIN PAGA BACKDROPS-->
        <div class="sidenav-backdrop backdrop"></div>
        <div class="preloader-backdrop">
            <div class="page-preloader">Loading</div>
        </div>
        <!-- END PAGA BACKDROPS-->
        <!-- CORE PLUGINS-->
        <script src="<?= base_url() ?>assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL PLUGINS-->
        <!-- PAGE LEVEL PLUGINS-->
        <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.pie.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.time.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/flot.tooltip/js/jquery.flot.tooltip.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.categories.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.stack.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/Flot/jquery.flot.selection.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/vendors/flot-orderBars/js/jquery.flot.orderBars.js" type="text/javascript"></script>
        <!-- CORE SCRIPTS-->
        <script src="<?= base_url() ?>assets/js/app.min.js" type="text/javascript"></script>
        <!-- PAGE LEVEL SCRIPTS-->
        <script src="<?= base_url() ?>assets/js/scripts/charts_flot_demo.js" type="text/javascript"></script>

        <script>
            $(".messages").animate({scrollTop: $(document).height()}, "fast");

            $("#profile-img").click(function () {
                $("#status-options").toggleClass("active");
            });

            $(".expand-button").click(function () {
                $("#profile").toggleClass("expanded");
                $("#contacts").toggleClass("expanded");
            });

            $("#status-options ul li").click(function () {
                $("#profile-img").removeClass();
                $("#status-online").removeClass("active");
                $("#status-away").removeClass("active");
                $("#status-busy").removeClass("active");
                $("#status-offline").removeClass("active");
                $(this).addClass("active");

                if ($("#status-online").hasClass("active")) {
                    $("#profile-img").addClass("online");
                } else if ($("#status-away").hasClass("active")) {
                    $("#profile-img").addClass("away");
                } else if ($("#status-busy").hasClass("active")) {
                    $("#profile-img").addClass("busy");
                } else if ($("#status-offline").hasClass("active")) {
                    $("#profile-img").addClass("offline");
                } else {
                    $("#profile-img").removeClass();
                }
                ;

                $("#status-options").removeClass("active");
            });

            function newMessage() {
                message = $(".message-input input").val();
                if ($.trim(message) == '') {
                    return false;
                }
                $('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
                $('.message-input input').val(null);
                $('.contact.active .preview').html('<span>You: </span>' + message);
                $(".messages").animate({scrollTop: $(document).height()}, "fast");
            }
            ;

            $('.submit').click(function () {
                newMessage();
            });

            $(window).on('keydown', function (e) {
                if (e.which == 13) {
                    newMessage();
                    return false;
                }
            });
            //# sourceURL=pen.js
        </script>
    </body>

</html>
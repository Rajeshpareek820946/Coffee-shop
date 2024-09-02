<!DOCTYPE html>
<html lang="en">

<head>
   <?php include_once("./include/head.php"); ?>
</head>

<body>
   <?php include_once("./include/header.php"); ?>
        <!--header section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <h1 class="contact_text">Contact Us</h1>
        </div>
    </div>
    <div class="contact_section_2 layout_padding">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6 padding_0">
                    <form action="send-eq.php" method="POST">
                        <div class="mail_section">
                            <div class="email_text">
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Name" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="email-bt" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="email-bt" placeholder="Phone Numbar" name="number">
                                </div>
                                <div class="form-group">
                                    <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment"
                                        name="massage"></textarea>
                                </div>
                                <div class="send_btn">
                                    <div type="text" class="main_bt"><input type="submit" value=" SEND"></a></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 padding_0">
                    <div class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                            width="600" height="508" frameborder="0" style="border:0; width: 100%;"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact section end -->
    <?php include_once("./include/footer.php"); ?>
    <!-- footer section end -->
    
    <!-- copyright section end -->
    <!-- Javascript files-->
    <?php include_once("./include/footer-js.php"); ?>
</body>

</html>
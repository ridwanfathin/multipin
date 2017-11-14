<?php include 'header.php'; ?>   
    <!--------------- Main wrap ---------------->
    <div class="main-wrap static-page">
        <div class="container" >
            &nbsp;
            <div class="row">
                <div class="display-flex" style="margin-bottom: 15px">
                    <div class="col-lg-offset-3 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <form id="signinForm" class="basicfields account-form" action="home.php" method="post">
                            <h4 class="form-title">Masuk</h4>
                            <div class="col-lg-4" style="padding-top: 25px;">
                                <p>Email</p>
                            </div>
                            <div class="col-lg-8">
                                <input type="email" name="email" placeholder="Email address">
                            </div>
                            <div class="col-lg-4" style="padding-top: 25px;">
                                <p>Kata Sandi</p>
                            </div>
                            <div class="col-lg-8">
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            <div class="col-lg-offset-4 col-lg-8">
                                <a href="#" class="resetlink">Lupa Kata Sandi?</a>
                            </div>
                            <div class="col-lg-offset-4 col-lg-8" style="padding-top: 25px; padding-bottom: 25px;">
                                <button type="submit" class="btn btn-default"><i class="fa fa-lock" aria-hidden="true"></i> Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
            
    
    <!-------------- Footer ---------------->
    <?php include 'footer.php'; ?>
    
    <!--------------- Back to Top ---------------->
    <a id="toTop" class="toTop" href="signup.html#header"><i class="fa fa-angle-up"></i></a>
    
    <!--------------- Javascript external files -------------->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.elevatezoom.js"></script>
    <script src="js/visible.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
   <script src="js/map.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
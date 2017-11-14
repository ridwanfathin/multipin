<?php include 'header-logged.php'; ?>

    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="hero-slider" class="hero-slider owl-carousel">
                        <div style="background-image: url(img/slider/slider1.jpg)">
                        </div>
                        <div style="background-image: url(img/slider/slider2.jpg)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wrap">
        <div class="container">
            <div class="row">
               <div class="col-lg-12 col-sm-8">
                     <div class="col-sm-12">
                        <div class="support-shipping">
                            <div class="support-shipping-icon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <div class="support-shipping-content">
                                <h5>Nama : Airin</h5>
                                <h5>Kredit : Rp. 56,000</h5>
                                <a href="profil.php" type="button" class="btn btn-default">Profil</a>
                                <a href="history.php" type="button" class="btn btn-default">Riwayat Pembelian</a>
                                <a href="history-topup.php" type="button" class="btn btn-default">Riwayat Isi Ulang</a>
                            </div>
                        </div>
                    </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="new">
                                <h1>Hasil Pencarian "mobile" :</h1><br>
                                <div class="row">
                                    <div class="product-container">
                                        <div class="product col-sm-2 col-sm-6 new custom">
                                            <div class="product-thumb">
                                                <a href="detail.php" class="thumb-link">
                                                    <img class="front-img" src="img/product/3.png" alt="Product Front">
                                                </a>
                                                
                                                <div class="product-btn">
                                                    <!--<a class="to-wish" href="index.php#"><i class="fa fa-heart"></i><span class="tooltip">Add To Wishlist</span></a>
                                                    <a class="to-compare" href="index.php#"><i class="fa fa-plus"></i><span class="tooltip">Add To Compare</span></a>-->
                                                    <a href="detail.php"><i class="fa fa-eye"></i><span class="tooltip">Lihat Rincian</span></a>
                                                </div>
                                            </div>
                                            <p class="centered">Mobile Legend</p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>

                    </div>                         
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
  
    <?php include 'footer.php'; ?>
     
    <a id="toTop" class="toTop" href="index.php#header"><i class="fa fa-angle-up"></i></a>
    
    <!--------------- Javascript external files -------------->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.elevatezoom.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
   <script src="js/map.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
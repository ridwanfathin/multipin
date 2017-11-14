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
                                <a href="history-topup.php" type="button" class="btn btn-default active">Riwayat Isi Ulang</a>
                            </div>
                        </div>
                    </div>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="new">
                                <table class="table table-striped table-inverse">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Tanggal</th>
                                      <th>Channel</th>
                                      <th>Jumlah(Rp)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                     <tr>
                                      <th scope="row">1</th>
                                      <td>19/10/2017</td>
                                      <td>Maybank</td>
                                      <td>150,000</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>19/11/2017</td>
                                      <td>BCA</td>
                                      <td>100,000</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                      <td>21/12/2017</td>
                                      <td>BCA</td>
                                      <td>100,000</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">4</th>
                                      <td>10/1/2018</td>
                                      <td>Maybank</td>
                                      <td>500,000</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">5</th>
                                      <td>11/3/2018</td>
                                      <td>BCA</td>
                                      <td>50,000</td>
                                    </tr>
                                  </tbody>
                                </table>
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
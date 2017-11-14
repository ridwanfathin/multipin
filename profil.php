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
                                <a href="profil.php" type="button" class="btn btn-default active">Profil</a>
                                <a href="history.php" type="button" class="btn btn-default">Riwayat Pembelian</a>
                                <a href="history-topup.php" type="button" class="btn btn-default">Riwayat Isi Ulang</a>
                            </div>
                        </div>
                    </div>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="new">
                                <table class="table table-striped table-inverse">
                                    <tr>
                                      <th>Nama</th>
                                      <td>Airin</td>
                                    </tr>
                                    <tr>
                                      <th>Email</th>
                                      <td>Redion@airin.com</td>
                                    </tr>
                                    <tr>
                                      <th>Nomor Handphone</th>
                                      <td>0891281928</td>
                                    </tr>
                                    <tr>
                                      <th>Tanggal Lahir</th>
                                      <td>17 November 1997</td>
                                    </tr>
                                    <tr>
                                      <th>Jenis Kelamin</th>
                                      <td>Laki-laki</td>
                                    </tr>
                                </table>
                                 <a href="#" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Ganti Kata Sandi</a>
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

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Ganti Kata Sandi</h4>
          </div>
          <div class="modal-body">
            <div>
                <p>Kata Sandi baru</p>
            </div>
            <div>
                <input type="password" name="password" placeholder="Kata Sandi">
            </div>
            <div style="padding-top: 15px;">
                <p>Ulangi Kata Sandi baru</p>
            </div>
            <div>
                <input type="password" name="password" placeholder="Ulangi Kata Sandi">
            </div>
          </div>

          <div class="modal-footer">
            <a href="profil.php" type="button" class="btn btn-danger" >Batal</a>
            <a href="profil.php" type="button" class="btn btn-default" >Ganti Kata Sandi</a>
          </div>
        </div>

      </div>
    </div>

    
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
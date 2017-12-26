<?php include 'header.php'; ?>

<!--------------- Main wrap ---------------->
    <div class="main-wrap static-page">
        <div class="container">
            <div class="row">
                <div class="display-flex" style="margin-bottom: 15px">
                    <div class="col-lg-12">
                        <form id="signinForm" class="basicfields account-form" action="login.php" method="post">
                            <h4 class="form-title">Daftar</h4>
                            <div class="col-lg-2" style="padding-top: 25px;">
                                <p>Nama</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="nama" placeholder="Nama">
                            </div>
                             <div class="col-lg-2" style="padding-top: 25px;">
                                <p>Email</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="email" name="email" placeholder="Alamat email">
                            </div>
                             <div class="col-lg-2" style="padding-top: 25px;">
                                <p>Nomor Handphone</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="tel" pattern="[0-9]{12}" name="phone" placeholder="Nomor Handphone">
                            </div>
                            <div class="col-lg-2" style="padding-top: 25px;">
                                <p>Kata Sandi</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="password" name="password" placeholder="Kata Sandi">
                            </div>
                            <div class="col-lg-2" style="padding-top: 25px;">
                                <p>Ulangi Kata Sandi</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="password" name="password" placeholder="Ulangi Kata Sandi">
                            </div>
                            <div class="col-lg-offset-5 col-lg-7" style="padding-top: 25px; padding-bottom: 25px;">
                                <button type="submit" class="btn btn-default"><i class="fa fa-lock" aria-hidden="true"></i> Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>

<?php include 'footer.php'; ?>
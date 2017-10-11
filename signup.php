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
                                <input type="number" name="phone" placeholder="Nomor Handphone">
                            </div>
                            <!--------- Tanggal Lahir ------------>
                            <div class="col-lg-2" style="padding-top: 25px;">
                                <p>Tanggal Lahir</p>
                            </div>
                                <div class="col-lg-3">
                                   <select name="cars">
                                        <option value="">Tanggal</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                   </select>
                                </div>
                                <div class="col-lg-4">
                                     <select name="cars">
                                        <option value="">Bulan</option>
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                     </select>
                                </div>
                                <div class="col-lg-3">
                                    <select name="cars">
                                        <option value="">Tahun</option>
                                        <option value="1990">1990</option>
                                        <option value="1990">1991</option>
                                        <option value="1990">1992</option>
                                        <option value="1990">1993</option>
                                        <option value="1990">1994</option>
                                        <option value="1990">1995</option>
                                        <option value="1990">1996</option>
                                        <option value="1990">1997</option>
                                     </select>
                                </div>

                            <!---------- Jenis Kelamin ---->
                            <div class="col-lg-2" style="padding-top: 25px;">
                                <p>Jenis Kelamin</p> 
                            </div>
                            <div class="col-lg-10" style="padding-top: 0px;">
                                   <select name="cars">
                                        <option value="0">Laki - Laki</option>
                                        <option value="1">Perempuan</option>  
                                   </select>
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
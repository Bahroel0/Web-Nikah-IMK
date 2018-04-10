<!DOCTYPE html>
  <html>
    <head>
        <title>Nikah Yuk!</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="../../css/main.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <nav class="nav-extended">
      <div class="nav-content">
        <ul class="tabs tabs-transparent" style="margin-left: 400px">
          <li id="form-1" class="tab"><a id="link1" class="active no-uppercase" href="#form1">Form 1</a></li>
          <li id="form-2" class="tab disabled"><a id="link2" class="no-uppercase" href="#form2">Form 2</a></li>
          <li id="form-3" class="tab disabled"><a id="link3" class="no-uppercase" href="#form3">Form 3</a></li>
          <li id="form-4" class="tab disabled"><a id="link4" class="no-uppercase" href="#form4">Form 4</a></li>
          <li id="form-5" class="tab disabled"><a id="link5" class="no-uppercase" href="#form5">Form 5</a></li>
        </ul>
      </div>
    </nav>
    
    <!-- Form Model 1 -->
    <div id="form1" class="col s12">
      <div class="header-form">
        <h5>Silahkan Lengkapi Data Anda</h5>
      </div>
      <div class="container">
        <div class="row" style="margin-top: 20px">
          <form name="form-wanita" id="form-wanita" action="form1.php" method="POST" class="col s12">
            <div class="row">
              <div class="input-field col s4">
                <i class="material-icons prefix">account_balance</i>
                <input name="kabupaten" id="icon_kota" type="text" class="validate" required="" aria-required="true">
                <label for="icon_kota" data-error="wajib diisi" data-success="">Kabupaten/Kota</label>
              </div>
              <div class="input-field col s4">
                <i class="material-icons prefix">account_balance</i>
                <input name="kecamatan" id="icon_kecamatan" type="tel" class="validate" required="" aria-required="true">
                <label for="icon_kecamatan" data-error="wajib diisi" data-success="">Kecamatan</label>
              </div>
              <div class="input-field col s4">
                <i class="material-icons prefix">account_balance</i>
                <input name="desa" id="icon_desa" type="tel" class="validate" required="" aria-required="true">
                <label for="icon_desa" data-error="wajib diisi" data-success="">Desa/Kelurahan</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s4">
                <i class="material-icons prefix">account_circle</i>
                <input name="nama_lengkap" id="icon_nama" type="text" class="validate" required="" aria-required="true">
                <label for="icon_nama" data-error="wajib diisi" data-success="">Nama Lengkap</label>
              </div>
              <div class="input-field col s4">
                <i class="material-icons prefix">account_box</i>
                <input name="nama_ayah" id="icon_bin" type="text" class="validate" required="" aria-required="true">
                <label for="icon_bin" data-error="wajib diisi" data-success="">Nama Ayah Kandung</label>
              </div>         
              
            </div>

            <div class="row">
              <div class="col s12">
                <p><b>Tempat Tanggal Lahir</b></p>
              </div>
              <div class="input-field col s4">
                <input name="tempat_lahir" placeholder="Tempat" type="text" class="validate" required="" aria-required="true">
              </div>
              <div class="input-field col s4">
                <input name="tanggal_lahir" placeholder="Tanggal" type="text" class="datepicker">
              </div>
              <div class="col s12"></div>
              <div class="input-field col s4">
                <input name="warganegara" placeholder="Warga Negara" type="text" class="validate" required="" aria-required="true">
              </div>
              <div class="input-field col s4">
                <select name="agama" required="" aria-required="true">
                  <option value="" disabled selected>Pilih</option>
                  <option value="Islam">Islam</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Protestan">Protestan</option>
                  <option value="Katholik">Katholik</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
                <label>Agama</label>
              </div>
              <div class="input-field col s4">
                <input name="pekerjaan" placeholder="Pekerjaan" type="text" class="validate" required="" aria-required="true">
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <textarea name="alamat" id="alamat" class="materialize-textarea"></textarea>
                <label for="alamat" data-error="" data-success="">Alamat Tempat Tinggal</label>
              </div>
            </div>

            <div class="row">
            <div class="col s2">
                <p><b>Status Perkawinan : </b></p>
              </div>
              <div class="input-field col s2">
                <select id="status_kawin" onchange="statusKawin()" name="status" class="validate" required="" aria-required="true" required="" aria-required="true">
                  <option disabled selected>Pilih</option>
                  <option value="Perawan">Perawan</option>
                  <option value="Janda">Janda</option>
                </select>
              </div>
              <div id="status_kawin_add" class="input-field col s4 offset-s1 none">
                <label class="error" for="mantan" data-error="wajib diisi" id="mantan_error" data-success=""></label>
                <input id="mantan" placeholder="Nama Suami Anda terdahulu" type="text" name="nama_suami_terdahulu">
              </div>
            </div>
            <br><br>
            <button id="btn-form1" class="btn waves-effect waves-light no-uppercase" type="submit" name="submit" value="submit">Lanjutkan
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
      </div>
      <br><br><br>
    </div>
    <!-- end of Form Model 1 -->

    <!-- Form Model 2 -->
    <div id="form2" class="col s12">
      <div class="header-form">
        <h5>Silahkan Lengkapi Data Orang Tua Anda</h5>
      </div>
      <form id="form-wanita2" class="col s12" action="form2.php" method="POST">
        <div class="row">
          <div class="col s6">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <p class="left-align"><b>Orang Tua Laki-laki</b></p>
                  </div>
                  <div class="input-field col s8">
                    <input name="nama_ayah" placeholder="Nama Lengkap" type="text" class="validate" required="" aria-required="true">
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <p><b>Tempat Tanggal Lahir</b></p>
                  </div>
                  <div class="input-field col s4">
                    <input name="tempat_ayah" placeholder="Tempat" type="text" class="validate" required="" aria-required="true">
                  </div>
                  <div class="input-field col s4">
                    <input name="tanggal_ayah" placeholder="Tanggal" type="text" class="datepicker">
                  </div>
                  <div class="col s12"></div>
                  <div class="input-field col s4">
                    <input name="warganegara_ayah" placeholder="Warga Negara" type="text" class="validate" required="" aria-required="true">
                  </div>
                  <div class="input-field col s4">
                    <select name="agama_ayah" required="" aria-required="true" >
                      <option value="" disabled selected>Pilih</option>
                      <option value="Islam">Islam</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Budha">Budha</option>
                      <option value="Protestan">Protestan</option>
                      <option value="Katholik">Katholik</option>
                      <option value="Konghucu">Konghucu</option>
                    </select>
                    <label>Agama</label>
                  </div>
                  <div class="input-field col s4">
                    <input name="pekerjaan_ayah" placeholder="Pekerjaan" type="text" class="validate" required="" aria-required="true">
                  </div>
                  <div class="input-field col s12">
                    <textarea name="alamat_ayah" id="alamat" class="materialize-textarea"></textarea>
                    <label for="alamat" data-error="wajib diisi" data-success="">Alamat Tempat Tinggal</label>
                  </div>
                </div>
              </div>
          </div>
          <div class="col s6">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <p class="left-align"><b>Orang Tua Perempuan</b></p>
                  </div>
                  <div class="input-field col s8">
                    <input name="nama_ibu" placeholder="Nama Lengkap" type="text" class="validate" required="" aria-required="true">
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <p><b>Tempat Tanggal Lahir</b></p>
                  </div>
                  <div class="input-field col s4">
                    <input name="tempat_ibu" placeholder="Tempat" type="text" class="validate" required="" aria-required="true">
                  </div>
                  <div class="input-field col s4">
                    <input name="tanggal_ibu" placeholder="Tanggal" type="text" class="datepicker">
                  </div>
                  <div class="col s12"></div>
                  <div class="input-field col s4">
                    <input name="warganegara_ibu" placeholder="Warga Negara" type="text" class="validate" required="" aria-required="true">
                  </div>
                  <div class="input-field col s4">
                    <select name="agama_ibu">
                      <option value="" disabled selected>Pilih</option>
                      <option value="Islam">Islam</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Budha">Budha</option>
                      <option value="Protestan">Protestan</option>
                      <option value="Katholik">Katholik</option>
                      <option value="Konghucu">Konghucu</option>
                    </select>
                    <label>Agama</label>
                  </div>
                  <div class="input-field col s4">
                    <input name="pekerjaan_ibu" placeholder="Pekerjaan" type="text" class="validate" required="" aria-required="true">
                  </div>
                  <div class="input-field col s12">
                    <textarea name="alamat_ibu" id="alamat" class="materialize-textarea"></textarea>
                    <label for="alamat" data-error="" data-success="">Alamat Tempat Tinggal</label>
                  </div>
                </div>
              </div>
          </div>
          <div class="col s3 offset-s9">
            <button id="btn-form2" class="btn waves-effect waves-light no-uppercase" type="submit" name="action">Lanjutkan
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
        
      </form>
    </div>

    <!-- Form Model 3 -->
    <div id="form3" class="col s12">
        <div class="header-form">
          <h5>Silahkan Lengkapi Data Pasangan Anda</h5>
        </div>
        <div class="container">
          <form id="form-wanita3" action="form3.php" method="POST" class="col s12" action="">
            <div class="row">

            </div>
            <div class="row">
              <div class="input-field col s4">
                <input name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="validate" required="" aria-required="true">
              </div>
              <div class="input-field col s4 offset-s2">
                <input name="nama_ayah" placeholder="Nama Ayah Kandung" type="text" class="validate" required="" aria-required="true">
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <p><b>Tempat Tanggal Lahir</b></p>
              </div>
              <div class="input-field col s4">
                <input name="tempat_lahir" placeholder="Tempat" type="text" class="validate" required="" aria-required="true">
              </div>
              <div class="input-field col s4">
                <input name="tanggal_lahir" placeholder="Tanggal" type="text" class="datepicker">
              </div>
              <div class="col s12"></div>
              <div class="input-field col s4">
                <input class="warganegara_ibu" placeholder="Warga Negara" type="text" class="validate" required="" aria-required="true">
              </div>
              <div class="input-field col s4">
                <select name="agama_ibu">
                  <option value="" disabled selected>Pilih</option>
                  <option value="Islam">Islam</option>
                  <option value="Hindu2">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Protestan">Protestan</option>
                  <option value="Katholik">Katholik</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
                <label>Agama</label>
              </div>
              <div class="input-field col s4">
                <input name="pekerjaan" placeholder="Pekerjaan" type="text" class="validate" required="" aria-required="true">
              </div>
              <div class="input-field col s12">
                <textarea name="alamat" id="alamat" class="materialize-textarea"></textarea>
                <label for="alamat" data-error="" data-success="">Alamat Tempat Tinggal</label>
              </div>
            </div>
            <button id="btn-form3" class="btn waves-effect waves-light no-uppercase" type="submit" name="submit" value="submit">Lanjutkan
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
    </div>

    <!-- Form Model 4 -->
    <div id="form4" class="col s12">
      <div class="header-form">
        <h5>Lewati Form ini Jika Anda Bukan Janda atau Janda karena Bercerai</h5>
      </div>
      <div class="container">
          <form id="form-wanita4" action="form4.php" method="POST" class="col s12" >
          <div class="row"></div>
          <div class="row"></div>
            <div class="row">
              <h5>Silahkan Lengkapi Data Kematian Suami</h5>
            </div>
            <div class="row">
              <div class="input-field col s4">
                <input name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="validate" required="" aria-required="true">
              </div>
              <div class="input-field col s4 offset-s2">
                <input name="nama_ayah" placeholder="Nama Ayah Kandung" type="text" class="validate" required="" aria-required="true">
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <p><b>Tempat Tanggal Lahir</b></p>
              </div>
              <div class="input-field col s4">
                <input name="tempat_lahir" placeholder="Tempat" type="text" class="validate" required="" aria-required="true">
              </div>
              <div class="input-field col s4">
                <input name="tanggal_lahir" placeholder="Tanggal" type="text" class="datepicker">
              </div>
              <div class="col s12"></div>
              <div class="input-field col s4">
                <input name="warganegara" placeholder="Warga Negara" type="text" class="validate" required="" aria-required="true">
              </div>
              <div class="input-field col s4">
                <select name="agama">
                  <option value="" disabled selected>Pilih</option>
                  <option value="Islam">Islam</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Protestan">Protestan</option>
                  <option value="Katholik">Katholik</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
                <label>Agama</label>
              </div>
              <div class="input-field col s4">
                <input name="pekerjaan" placeholder="Pekerjaan" type="text" class="validate" required="" aria-required="true">
              </div>
              <div class="col s12">
                Meninggal pada Tanggal :
                <div class="input-field col s12">
                  <input name="meninggal_pada" placeholder="tgl/bln/thn" type="text" class="datepicker">
                </div>
              </div>
              <div class="input-field col s12">
                <textarea name="alamat" id="alamat" class="materialize-textarea"></textarea>
                <label for="alamat" data-error="" data-success="">Alamat Tempat Tinggal</label>
              </div>
            </div><button id="btn-lewati" class="btn waves-effect waves-light no-uppercase right">Lewati
            </button>
            <button id="btn-form4" class="btn waves-effect waves-light no-uppercase left" type="submit" name="submit" value="submit">Lanjutkan
              <i class="material-icons right">send</i>
            </button>
          </form>
          <br><br><br><br>
        </div>
    </div>

    <!-- Form Model 5 -->
    <div id="form5" class="col s12">
      <div class="header-form">
        <h5>Silahkan Lengkapi Data Rencana Pernikahan Anda</h5>
      </div>
      <div class="container">
        <form id="form-wanita5" action="form5.php" method="POST" class="col s12">
          <div class="row">
            <div class="input-field col s4">
              <input name="hari" placeholder="Hari" type="text" class="validate" required="" aria-required="true">
            </div>
            <div class="input-field col s4">
                <input name="tanggal" placeholder="Tanggal" type="text" class="datepicker">
            </div>
            <div class="input-field col s4">
                <input name="jam" placeholder="00:00" type="text" class="timepicker">
            </div>
          </div>
          <div class="row">
            <div class="col s4">
              Mas Kawin : 
              <div class="input-field inline">
                <input name="mas_kawin" type="text" class="validate" required="" aria-required="true">
              </div>
            </div>
            <div class="col s4">
              Dibayar :
              <div class="input-field inline">
                <select name="dibayar">
                <option value="1">Pilih</option>
                <option value="Lunas">Lunas</option>
                <option value="Kredit">Kredit</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col s12">
                <p>Tempat Pernikahan :</p>
              </div>
              <div class="input-field col s4">
                <input name="tempat" placeholder="" type="text" class="validate" required="" aria-required="true">
              </div>
          </div>
          <br><br>
          <button id="btn-form5" class="btn waves-effect waves-light no-uppercase left" type="submit" name="action">Lanjutkan
              <i class="material-icons right">send</i>
          </button>
        </form>
      </div>
    
    </div>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../../js/jquery.min.js"></script>
        <script type="text/javascript" src="../../js/materialize.min.js"></script>
        <script type="text/javascript" src="../../js/main.js"></script>
        <script>
          function statusKawin(){
          var val = document.getElementById("status_kawin").value;
          if(val == 'Perawan'){
            $("#status_kawin_add").addClass("none");
          }else{
            $("#status_kawin_add").removeClass("none");   
          }
        }

        
        $("#form-wanita").submit(function (e){
            var postData = $(this).serializeArray();
            var formUrl  = $(this).attr("action");
            $.ajax({
              url : formUrl,
              type : "POST",
              data : postData,
              success: function(){
                $('#link2').trigger('click');  
              }
            });
            e.preventDefault();
            // e.unbind(); 
         });

         $('#btn-form1').click(function(){
            $('#form-1').addClass("disabled");
            $('#form1').removeClass('active');
            $('#link-2').addClass("active");
            $('#link-1').removeClass("active");
            $('#form-2').removeClass("disabled");
            $('form2').addClass("active");
         });

         $("#form-wanita2").submit(function (e){
            var postData = $(this).serializeArray();
            var formUrl  = $(this).attr("action");
            $.ajax({
              url : formUrl,
              type : "POST",
              data : postData,
              success: function(){
                $('#link3').trigger('click');  
              }
            });
            e.preventDefault();
            // e.unbind(); 
         });
         $('#btn-form2').click(function(){
            $('#form-2').addClass("disabled");
            $('#form2').removeClass('active');
            $('#link-3').addClass("active");
            $('#link-2').removeClass("active");
            $('#form-3').removeClass("disabled");
            $('form3').addClass("active");
         });

         $("#form-wanita3").submit(function (e){
            var postData = $(this).serializeArray();
            var formUrl  = $(this).attr("action");
            $.ajax({
              url : formUrl,
              type : "POST",
              data : postData,
              success: function(){
                $('#link4').trigger('click');  
              }
            });
            e.preventDefault();
            // e.unbind(); 
         });
         $('#btn-form3').click(function(){
            $('#form-3').addClass("disabled");
            $('#form3').removeClass('active');
            $('#link-4').addClass("active");
            $('#link-3').removeClass("active");
            $('#form-4').removeClass("disabled");
            $('form4').addClass("active");
         });

         $("#form-wanita4").submit(function (e){
            var postData = $(this).serializeArray();
            var formUrl  = $(this).attr("action");
            $.ajax({
              url : formUrl,
              type : "POST",
              data : postData,
              success: function(){
                $('#link5').trigger('click');  
              }
            });
            e.preventDefault();
            // e.unbind(); 
         });
         $('#btn-form4').click(function(){
            $('#form-4').addClass("disabled");
            $('#form4').removeClass('active');
            $('#link-5').addClass("active");
            $('#link-4').removeClass("active");
            $('#form-5').removeClass("disabled");
            $('form5').addClass("active");
         });

         $('#btn-lewati').click(function(e){
            e.preventDefault();
            $('#link5').trigger('click');  
            $('#form-4').addClass("disabled");
            $('#form4').removeClass('active');
            $('#link-5').addClass("active");
            $('#link-4').removeClass("active");
            $('#form-5').removeClass("disabled");
            $('form5').addClass("active");
         });
        </script>
    </body>
  </html>
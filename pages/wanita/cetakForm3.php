<?php
	require_once '../../dompdf/autoload.inc.php';
	include '../../config/db.php';

    use Dompdf\Dompdf;
    

    $wanita = "SELECT * FROM tabel_wanita ORDER BY id DESC LIMIT 1";
    $querywanita = mysqli_query($conn, $wanita);
    $hasilwanita = mysqli_fetch_assoc($querywanita);

    $Pasangan = "SELECT * FROM tabel_pasangan ORDER BY id DESC LIMIT 1";
    $queryPasangan = mysqli_query($conn, $Pasangan);
    $hasilPasangan = mysqli_fetch_assoc($queryPasangan);


    $dompdf = new Dompdf();
    $html ='
    <style>
    @media only screen and (min-width: 601px) {
        .container {
          width: 85%;
        }
      }
      @media only screen and (min-width: 993px) {
        .container {
          width: 70%;
        }
      }
        p,pre{
            font-family: Times News Roman;
        }
    </style>
        <div class="container">
            <pre style="margin-left: 450px">
            Lampiran PMA No. 11 Tahun 2007
            - Pasal 5 ayat (2) huruf c -
            Model: N-3
            </pre><br>
            <p align="center"><u><b>SURAT KETERANGAN PERSETUJUAN MEMPELAI</b></u> <br>
            Nomor:.................................................
            </p>
            <pre>
                Yang bertanda tangan dibawah ini : <br>
                I. <b>Calon Suami :</b> 
                    1. Nama lengkap dan alias                 : '. $hasilwanita["nama_lengkap"].'
                    2. Bin                                                 : '. $hasilwanita["nama_ayah"].'
                    3. Tempat tanggal lahir                      : '. $hasilwanita["tempat_lahir"].', ' .$hasilwanita["tanggal_lahir"].'
                    4. Warganegara                                  : '. $hasilwanita["warganegara"].'
                    5. Agama                                            : '. $hasilwanita["agama"].'
                    6. Pekerjaan                                        : '. $hasilwanita["pekerjaan"].'
                    7. Tempat tinggal                                : '. $hasilwanita["tempat_tinggal"].'
                <br><br>
                II. <b>Calon Istri :</b> 
                    1. Nama lengkap dan alias                 : '. $hasilPasangan["nama_lengkap"].'
                    2. Binti                                                : '. $hasilPasangan["nama_ayah"].'
                    3. Tempat tanggal lahir                      : '. $hasilPasangan["tempat_lahir"].', ' .$hasilPasangan["tanggal_lahir"].'
                    4. Warganegara                                  : '. $hasilPasangan["warganegara"].'
                    5. Agama                                            : '. $hasilPasangan["agama"].'
                    6. Pekerjaan                                        : '. $hasilPasangan["pekerjaan"].'
                    7. Tempat tinggal                                : '. $hasilPasangan["alamat"].'
                    
                Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran diri sendiri, tanpa
                paksaan dari siapapun juga, setuju untuk melangsungkan pernikahan.
                <br><br>
                Demikian surat persetujuan ini dibuat untuk digunakan seperlunya.
            </pre>
            <div style="margin-left: 380px">
                <pre>
                    .....................,20........................................
                </pre>
            </div>
            <br>
            <pre style="text-align:center">
                I. Calon Suami                                          II. Calon Istri
                <br><br><br><br>
      '. $hasilwanita["nama_lengkap"].'                                   '. $hasilPasangan["nama_lengkap"].'
    ...................................                             ...................................
            </pre>
        </div>
    ';

    $dompdf->loadHtml($html);
	$dompdf->setPaper('A4', 'portrait');
	$dompdf->render();
    $dompdf->stream("dokumentku", array("Attachment" => 0));
    
    ?>
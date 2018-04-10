<?php
	require_once '../../dompdf/autoload.inc.php';
	include '../../config/db.php';

    use Dompdf\Dompdf;
    
    $sqlDomisili = "SELECT kabupaten, kecamatan, desa FROM tabel_domisili ORDER BY id DESC LIMIT 1";
    $queryDomisili = mysqli_query($conn, $sqlDomisili);
    $hasilDomisili = mysqli_fetch_assoc($queryDomisili);

    $wanita = "SELECT * FROM tabel_wanita ORDER BY id DESC LIMIT 1";
    $querywanita = mysqli_query($conn, $wanita);
    $hasilwanita = mysqli_fetch_assoc($querywanita);

    $Mantan = "SELECT * FROM tabel_mantan ORDER BY id DESC LIMIT 1";
    $queryMantan = mysqli_query($conn, $Mantan);
    $hasilMantan = mysqli_fetch_assoc($queryMantan);


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
            - Pasal 5 ayat (2) huruf k -
            Model: N-6
            </pre>
            <pre>
                KANTOR DESA/KELURAHAN   : '. $hasilDomisili["desa"].'
                KECAMATAN                               : '. $hasilDomisili["kecamatan"].'
                KABUPATEN/KOTA                    : '. $hasilDomisili["kabupaten"].'
            </pre>
            <p align="center"><u><b>SURAT KEMATIAN SUAMI/ISTRI</b></u> <br>
            Nomor:.................................................
            </p>
            <pre>
                Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa : <br><br>
                I.  1. Nama lengkap dan alias                 : '. $hasilMantan["nama_lengkap"].'
                    2. Bin/Binti                                         : '. $hasilMantan["nama_ayah"].'
                    3. Tempat tanggal lahir                      : '. $hasilMantan["tempat_lahir"].', ' .$hasilMantan["tanggal_lahir"].'
                    4. Warganegara                                  : '. $hasilMantan["warganegara"].'
                    5. Agama                                            : '. $hasilMantan["agama"].'
                    6. Pekerjaan                                        : '. $hasilMantan["pekerjaan"].'
                    7. Tempat tinggal                                : '. $hasilMantan["alamat"].'
                <br><br>
                telah meninggal dunia pada tanggal      : '. $hasilMantan["meninggal_pada"].'
                <br><br>
                II  1. Nama lengkap dan alias                 : '. $hasilwanita["nama_lengkap"].'
                    2. Bin/binti                                          : '. $hasilwanita["nama_ayah"].'
                    3. Tempat tanggal lahir                      : '. $hasilwanita["tempat_lahir"].', ' .$hasilwanita["tanggal_lahir"].'
                    4. Warganegara                                  : '. $hasilwanita["warganegara"].'
                    5. Agama                                            : '. $hasilwanita["agama"].'
                    6. Pekerjaan                                        : '. $hasilwanita["pekerjaan"].'
                    7. Tempat tinggal terakhir                  : '. $hasilwanita["tempat_tinggal"].'
                <br><br>
                Adalah suami/istri orang yang telah meninggal tersebut diatas.
                <br><br>
                    Demikianlah surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk 
                digunakan seperlunya.
                <br><br>
                <div style="margin-left: 380px">
                <pre>
                    .....................,..........................................
                    Kepala Desa/Kelurahan .........................
    
    
    
                    ..............................................*)
                </pre>
            </div>
    
            <pre>
                *) nama lengkap
            </pre>
        </div>
    ';

    $dompdf->loadHtml($html);
	$dompdf->setPaper('A4', 'portrait');
	$dompdf->render();
    $dompdf->stream("dokumentku", array("Attachment" => 0));
    
    ?>
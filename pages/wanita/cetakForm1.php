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
            <p style="margin-left: 500px">Model: N-1</p><br>
            <pre>
                KANTOR DESA/KELURAHAN   : '. $hasilDomisili["desa"].'
                KECAMATAN                               : '. $hasilDomisili["kecamatan"].'
                KABUPATEN/KOTA                    : '. $hasilDomisili["kabupaten"].'
            </pre>
            <p align="center"><u><b>SURAT KETERANGAN UNTUK MENIKAH</b></u> <br>
            Nomor:.................................................
            </p>
            <pre>
                Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa :
                1. Nama lengkap dan alias                 : '. $hasilwanita["nama_lengkap"].'
                2. Jenis Kelamin                                 : Laki-Laki
                3. Tempat tanggal lahir                      : '. $hasilwanita["tempat_lahir"].', ' .$hasilwanita["tanggal_lahir"].'
                4. Warganegara                                  : '. $hasilwanita["warganegara"].'
                5. Agama                                            : '. $hasilwanita["agama"].'
                6. Pekerjaan                                        : '. $hasilwanita["pekerjaan"].'
                7. Tempat tinggal                                : '. $hasilwanita["tempat_tinggal"].'
                8 Bin/binti                                           : '. $hasilwanita["nama_ayah"].'
                9. Status Perkawinan :
                    a. Jika wanita, terangkan jejaka,
                       duda, atau beristri dan 
                       berapa istrinya                              : '. $hasilwanita["status"].'
                    b. Jika wanita terangkan 
                        perawan atau janda                      :
                10. Nama Istri/Suami terdahulu          : '. $hasilwanita["nama_suami_terdahulu"].'
                    
                    Demikianlah surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk 
                digunakan seperlunya.
    
            </pre>
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
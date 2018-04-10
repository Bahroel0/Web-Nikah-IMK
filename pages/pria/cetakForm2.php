<?php
	require_once '../../dompdf/autoload.inc.php';
	include '../../config/db.php';

    use Dompdf\Dompdf;
    

    $sqlDomisili = "SELECT kabupaten, kecamatan, desa FROM tabel_domisili ORDER BY id DESC LIMIT 1";
    $queryDomisili = mysqli_query($conn, $sqlDomisili);
    $hasilDomisili = mysqli_fetch_assoc($queryDomisili);

    $Pria = "SELECT * FROM tabel_Pria ORDER BY id DESC LIMIT 1";
    $queryPria = mysqli_query($conn, $Pria);
    $hasilPria = mysqli_fetch_assoc($queryPria);

    $ayah = "SELECT * FROM tabel_ayah ORDER BY id DESC LIMIT 1";
    $queryAyah = mysqli_query($conn, $ayah);
    $hasilAyah = mysqli_fetch_assoc($queryAyah);

    $ibu = "SELECT * FROM tabel_ibu ORDER BY id DESC LIMIT 1";
    $queryIbu = mysqli_query($conn, $ibu);
    $hasilIbu = mysqli_fetch_assoc($queryIbu);


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
            <p style="margin-left: 500px">Model: N-2</p><br>
            <pre>
                KANTOR DESA/KELURAHAN   : '. $hasilDomisili["desa"].'
                KECAMATAN                               : '. $hasilDomisili["kecamatan"].'
                KABUPATEN/KOTA                    : '. $hasilDomisili["kabupaten"].'
            </pre>
            <p align="center"><u><b>SURAT KETERANGAN ASAL-USUL</b></u> <br>
            Nomor:.................................................
            </p>
            <pre>
                Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa :
                I.  1. Nama lengkap dan alias                 : '. $hasilPria["nama_lengkap"].'
                    2. Tempat tanggal lahir                      : '. $hasilPria["tempat_lahir"].', ' .$hasilPria["tanggal_lahir"].'
                    3. Warganegara                                  : '. $hasilPria["warganegara"].'
                    4. Agama                                            : '. $hasilPria["agama"].'
                    5. Pekerjaan                                        : '. $hasilPria["pekerjaan"].'
                    6. Tempat tinggal                                : '. $hasilPria["tempat_tinggal"].'
                
                    adalah benar ayah kandung dan ibu kandung dari seorang :
                
                II. 1. Nama lengkap dan alias                 : '. $hasilAyah["nama_ayah"].'
                    2. Tempat tanggal lahir                      : '. $hasilAyah["tempat"].', ' .$hasilAyah["tanggal"].'
                    3. Warganegara                                  : '. $hasilAyah["warganegara"].'
                    4. Agama                                            : '. $hasilAyah["agama"].'
                    5. Pekerjaan                                        : '. $hasilAyah["pekerjaan"].'
                    6. Tempat tinggal                                : '. $hasilAyah["alamat"].'
                    dengan seorang wanita :
                    
                    1. Nama lengkap dan alias                 : '. $hasilIbu["nama_ibu"].'
                    2. Tempat tanggal lahir                      : '. $hasilIbu["tempat"].', ' .$hasilIbu["tanggal"].'
                    3. Warganegara                                  : '. $hasilIbu["warganegara"].'
                    4. Agama                                            : '. $hasilIbu["agama"].'
                    5. Pekerjaan                                        : '. $hasilIbu["pekerjaan"].'
                    6. Tempat tinggal                                : '. $hasilIbu["alamat"].'
                    
                    
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
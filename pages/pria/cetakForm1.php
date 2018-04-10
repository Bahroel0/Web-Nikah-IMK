<?php
	require_once '../../dompdf/autoload.inc.php';
	include '../../config/db.php';

    use Dompdf\Dompdf;
    

    $sqlDomisili = "SELECT kabupaten, kecamatan, desa FROM tabel_domisili ORDER BY id DESC LIMIT 1";
    $queryDomisili = mysqli_query($conn, $sqlDomisili);
    $hasilDomisili = mysqli_fetch_assoc($queryDomisili);

    $pria = "SELECT * FROM tabel_pria ORDER BY id DESC LIMIT 1";
    $queryPria = mysqli_query($conn, $pria);
    $hasilPria = mysqli_fetch_assoc($queryPria);

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
                1. Nama lengkap dan alias                 : '. $hasilPria["nama_lengkap"].'
                2. Jenis Kelamin                                 : Laki-Laki
                3. Tempat tanggal lahir                      : '. $hasilPria["tempat_lahir"].', ' .$hasilPria["tanggal_lahir"].'
                4. Warganegara                                  : '. $hasilPria["warganegara"].'
                5. Agama                                            : '. $hasilPria["agama"].'
                6. Pekerjaan                                        : '. $hasilPria["pekerjaan"].'
                7. Tempat tinggal                                : '. $hasilPria["tempat_tinggal"].'
                8 Bin/binti                                           : '. $hasilPria["nama_ayah"].'
                9. Status Perkawinan :
                    a. Jika pria, terangkan jejaka,
                       duda, atau beristri dan 
                       berapa istrinya                              : '. $hasilPria["status"].'
                    b. Jika wanita terangkan 
                        perawan atau janda                      :
                10. Nama Istri/Suami terdahulu          : '. $hasilPria["nama_istri_terdahulu"].'
                    
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
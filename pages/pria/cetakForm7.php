<?php
	require_once '../../dompdf/autoload.inc.php';
	include '../../config/db.php';

    use Dompdf\Dompdf;
    

    $pria = "SELECT * FROM tabel_pria ORDER BY id DESC LIMIT 1";
    $queryPria = mysqli_query($conn, $pria);
    $hasilPria = mysqli_fetch_assoc($queryPria);

    $Pasangan = "SELECT * FROM tabel_pasangan ORDER BY id DESC LIMIT 1";
    $queryPasangan = mysqli_query($conn, $Pasangan);
    $hasilPasangan = mysqli_fetch_assoc($queryPasangan);

    $Rencana = "SELECT * FROM tabel_rencana ORDER BY id DESC LIMIT 1";
    $queryRencana = mysqli_query($conn, $Rencana);
    $hasilRencana = mysqli_fetch_assoc($queryRencana);

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
            - Pasal 5 ayat (1) -
            Model: N-7
            </pre><br>

            <pre>
            Lampiran : ....... lembar                                                       ............................,20......
            Perihal  : Pemberitahuan
                           Kehendak Nikah                                       Kepada Yth.
                                                                            Pegawai Pencatat Nikah pada
                                                                            KUA Kecamatan/Pembantu PPN
                                                                            di...................
            </pre>
            <pre>
            Assalamu'."'".'alaikum wr. wb.
                Dengan ini kami memberitahukan bahwa kami bermaksud akan melangsungkan
            pernikahan antara '.$hasilPria["nama_lengkap"].' dengan '.$hasilPasangan["nama_lengkap"].' pada
            hari ............ '.$hasilRencana["hari"].'........tanggal .....'.$hasilRencana["tanggal"].'...... jam .....'.$hasilRencana["jam"].'........ dengan
            mas kawin.....'.$hasilRencana["mas_kawin"].'...... dibayar ...'.$hasilRencana["dibayar"].'...
            bertempat di .....'.$hasilRencana["tempat"].'..........<br><br>
                Bersama ini kami lampirkan surat-surat yang diperlukan untuk diperiksa, sebagai berikut :
            1. Surat Keterangan Untuk Nikah                 ,model N1
            2.Surat Keterangan Asal-Usul                    ,model N2
            3. Surat Persetujuan Mempelai                   ,model N3
            4. Surat Keterangan Tentang Orang Tua              ,model N4
            5. *) Surat Izin Orang Tua                      ,model N5
            6. *) Surat Keterangan Kematian Suami/Istri     ,model N6    
            
                Hanya dapat dihadiri dan dicatat pelaksanaanya sesuai dengan ketentuan perundang-
                undangan yang berlaku.
            <br><br>
            Diterima tanggal ..............     <span style="margin-left: 200px">Wassalam</span>
                                                <span style="margin-left: 200px">Yang memberitahukan</span>
                                                <span style="margin-left: 160px">Calon mempelai/wali/Wakil wali*)</span>
            Yang menerima,
            PPN/Pembantu PPN*)
            <br><br><br> 
            
.............................**)                     <span style="margin-left: 110px">................................**)</span>
            <br><br> 
            *) coret yang tidak perlu
            **) nama lengkap

            </pre>
            
        </div>
    ';

    $dompdf->loadHtml($html);
	$dompdf->setPaper('A4', 'portrait');
	$dompdf->render();
    $dompdf->stream("dokumentku", array("Attachment" => 0));
    
    ?>
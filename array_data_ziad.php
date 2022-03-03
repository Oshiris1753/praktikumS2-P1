<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>81,'uas'=>74,'tugas'=>73];
$ns2 = ['id'=>2,'nim'=>'01101','uts'=>89,'uas'=>84,'tugas'=>70];
$ns3 = ['id'=>3,'nim'=>'01101','uts'=>73,'uas'=>97,'tugas'=>90];
$ns4 = ['id'=>4,'nim'=>'01101','uts'=>40,'uas'=>77,'tugas'=>97];

$ar_nilai = [$ns1,$ns2,$ns3,$ns4];

?>
<style>
    table{
        border-spacing: 5px;
        background-color: grey;
    }
    tr:hover {
        background-color: coral;
        }
</style>
<h3>Daftar nilai siswa</h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th><th>NIM</th><th>UTS</th>
            <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;
        foreach($ar_nilai as $ns){
            echo'<td>'.$nomor.'</td>';
            echo'<td>'.$ns['nim'].'</td>';
            echo'<td>'.$ns['uts'].'</td>';
            echo'<td>'.$ns['uas'].'</td>';
            echo'<td>'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas'] = $ns['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $nomor++;
        }
        ?>
    </tbody>
</table>
<?php

$pdf = new TCPDF('l', 'mm', 'A4');
$pdf->SetTitle('Daftar Buku Tamu');
$pdf->SetFont('times', '', 12);

$pdf->SetMargins(15, 10, 15);
$pdf->SetAutoPageBreak(true);

$pdf->setPrintHeader(false);
$pdf->SetPrintFooter(false);

$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage();

$i = 0;
$html = '<h1 align="center">Daftar Buku Tamu</h1>
        <table cellpadding="2" cellspacing="2" style="width:100% border: 1px solid black; border-collapse: collapse;">
        <tr nobr="true">
            <th width="5%" align="center">No</th>
            <th width="20%" align="center">Nama</th>
            <th width="20%" align="center">Instansi</th>
            <th width="20%" align="center">Alamat</th>
            <th width="25%" align="center">Keperluan</th>
            <th width="10%" align="center">No. HP</th>
        </tr>';
foreach ($user as $row) {
    $i++;
    $html .= '<tr nobr="true">
            <td align="center">' . $i . '</td>
            <td>' . $row['nama'] . '</td>
            <td>' . $row['alamat'] . '</td>
            <td>' . $row['instansi'] . '</td>
            <td>' . $row['keperluan'] . '</td>
            <td>' . $row['no_hp'] . '</td>
        </tr>';
}
$html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('laporan.pdf', 'I');

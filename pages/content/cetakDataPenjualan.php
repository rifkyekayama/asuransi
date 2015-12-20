    <?php
    include('../includes/includes.php');
    $con = connection();
     
    #ambil data di tabel dan masukkan ke array
	 $query = "SELECT * FROM penjualan ORDER BY no_polis";
    $sql = mysqli_query ($query);
    $data = array();
    while ($row = mysqli_fetch_assoc($sql)) {
    array_push($data, $row);
    }
     
    #setting judul laporan dan header tabel
    $judul = "LAPORAN DATA PENJUALAN";
	
    $header = array(
    array("label"=>"No Polis", "length"=>15, "align"=>"L"),
    array("label"=>"Tgl Penjualan", "length"=>20, "align"=>"L"),
	array("label"=>"No Identitas", "length"=>30, "align"=>"L"),
    array("label"=>"Jumlah Premi", "length"=>20, "align"=>"L"),
	array("label"=>"Masa Asuransi(/thn)", "length"=>25, "align"=>"L"),
	array("label"=>"ID Agen", "length"=>15, "align"=>"L"),
    array("label"=>"Tipe", "length"=>15, "align"=>"L"),
    );
     
    #sertakan library FPDF dan bentuk objek
	 ob_start();
    require_once ("fpdf16/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();
	
     
    #tampilkan judul laporan
	
	$pdf->SetMargins(35, 20, 20, 20);

    $pdf->SetFont('Arial','B','12');
    $pdf->Cell(0,20, $judul, '0', 1, 'C');
		$pdf->line(31, 770, 565, 770);
     
    #buat header tabel
    $pdf->SetFont('Arial','B','7');
    $pdf->SetFillColor(255,255,255);
    $pdf->SetTextColor(0);
    $pdf->SetDrawColor(0,0,0);
    foreach ($header as $kolom) {
    $pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
    }
    $pdf->Ln();
	
     
    #tampilkan data tabelnya
    $pdf->SetFillColor(224,225,255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('');
    $fill=false;
    foreach ($data as $baris) {
    $i = 0;
    foreach ($baris as $cell) {
    $pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
    $i++;
    }
    $fill = !$fill;
    $pdf->Ln();
    }
     
    #output file PDF
    $pdf->Output();
    ?>
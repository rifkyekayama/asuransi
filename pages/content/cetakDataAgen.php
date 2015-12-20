    <?php
    include('../includes/includes.php');
    $con = connection();
     
    #ambil data di tabel dan masukkan ke array
    $query = "SELECT * FROM agen ORDER BY id_a";
    $sql = mysqli_query($con, $query);
    $data = array();
    while ($row = mysqli_fetch_assoc($sql)) {
        array_push($data, $row);
    }
     
    #setting judul laporan dan header tabel
    $judul = "LAPORAN DATA AGEN";
    $header = array(
        array("label"=>"ID Agen", "length"=>20, "align"=>"L"),
        array("label"=>"Nama", "length"=>25, "align"=>"L"),
        array("label"=>"Tempat Lahir", "length"=>20, "align"=>"L"),
        array("label"=>"Tanggal Lahir", "length"=>20, "align"=>"L"),
    	array("label"=>"Alamat", "length"=>20, "align"=>"L"),
        array("label"=>"Jenis Kelamin", "length"=>20, "align"=>"L"),
        array("label"=>"Status", "length"=>20, "align"=>"L"),
        array("label"=>"Pendidikan", "length"=>20, "align"=>"L"),
    	array("label"=>"Telp", "length"=>20, "align"=>"L")
    );
     
    #sertakan library FPDF dan bentuk objek
	ob_start();
    require_once ("fpdf16/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();
     
    #tampilkan judul laporan
		$pdf->SetMargins(13, 20, 20, 20);
    $pdf->SetFont('Arial','B','12');
    $pdf->Cell(0,20, $judul, '0', 1, 'C');
     
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
    $pdf->SetFillColor(224,235,255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('');
    $fill=false;
    foreach ($data as $baris) {
    $i = 0;
    foreach ($baris as $cell) {
        $pdf->Cell($header[$i++]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
    }
    $fill = !$fill;
    $pdf->Ln();
    }
     
    #output file PDF
    $pdf->Output();
    ?>
<?php
session_start();
require_once "../functions.php";
require_once "../assets/PHPExcel/Classes/PHPExcel.php";


if (isset($_POST['eksport'])) {
    if (isset($_POST['bangsa'])) {
        $jenis = $_POST['bangsa'];
        if (isset($_POST['jenis_kelamin'])) {
            if ($_POST['jenis_kelamin'] == "Jantan & Betina") {
                $cetak = query("SELECT * FROM kelinci WHERE bangsa_betina = '$jenis' AND bangsa_jantan = '$jenis' ORDER BY id ASC");
                $fileName = "Data-pertumbuhan-$jenis-" . date('d-M-y');
            } else {
                $sex = $_POST['jenis_kelamin'];
                $cetak = query("SELECT * FROM kelinci WHERE bangsa_betina = '$jenis' AND bangsa_jantan = '$jenis' AND sex = '$sex' ORDER BY id ASC");
                $fileName = "Data-pertumbuhan-$jenis-$sex-" . date('d-M-y');
            }
        }
    }

    $objPHPExcel = new PHPExcel();
    $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('B1', 'No')
        ->setCellValue('C1', 'Betina')
        ->setCellValue('D1', 'Bangsa Betina')
        ->setCellValue('E1', 'Jantan')
        ->setCellValue('F1', 'Bangsa Jantan')
        ->setCellValue('G1', 'Ls Lahir')
        ->setCellValue('H1', 'Tgl Lahir')
        ->setCellValue('I1', 'Sex')
        ->setCellValue('J1', 'F')
        ->setCellValue('K1', 'Angkatan')
        ->setCellValue('L1', 'Ear Tag')
        ->setCellValue('M1', 'No Individual')
        ->setCellValue('N1', 'Minggu 5')
        ->setCellValue('O1', 'Minggu 7')
        ->setCellValue('P1', 'Minggu 9')
        ->setCellValue('Q1', 'Minggu 11')
        ->setCellValue('R1', 'Minggu 13')
        ->setCellValue('S1', 'Minggu 15')
        ->setCellValue('T1', 'Minggu 17')
        ->setCellValue('U1', 'Minggu 19')
        ->setCellValue('V1', 'Minggu 21')
        ->setCellValue('W1', 'Minggu 23')
        ->setCellValue('X1', 'Keterangan');


    $nomor = 1;
    $i = 2;
    foreach ($cetak as $c) {
        $tl = $c['tgl_lahir'];
        $tgl_lahir = date("Y-m-d", strtotime($tl));
        $objPHPExcel->getSheet(0)
            ->setCellValue('B' . $i, $nomor++)
            ->setCellValue('C' . $i, $c['betina'])
            ->setCellValue('D' . $i, $c['bangsa_betina'])
            ->setCellValue('E' . $i, $c['jantan'])
            ->setCellValue('F' . $i, $c['bangsa_jantan'])
            ->setCellValue('G' . $i, $c['ls_lahir'])
            ->setCellValue('H' . $i, $tgl_lahir)
            ->setCellValue('I' . $i, $c['sex'])
            ->setCellValue('J' . $i, $c['f'])
            ->setCellValue('K' . $i, $c['angkatan'])
            ->setCellValue('L' . $i, $c['ear_tag'])
            ->setCellValue('M' . $i, $c['no_indv'])
            ->setCellValue('N' . $i, $c['minggu_5'])
            ->setCellValue('O' . $i, $c['minggu_7'])
            ->setCellValue('P' . $i, $c['minggu_9'])
            ->setCellValue('Q' . $i, $c['minggu_11'])
            ->setCellValue('R' . $i, $c['minggu_13'])
            ->setCellValue('S' . $i, $c['minggu_15'])
            ->setCellValue('T' . $i, $c['minggu_17'])
            ->setCellValue('U' . $i, $c['minggu_19'])
            ->setCellValue('V' . $i, $c['minggu_21'])
            ->setCellValue('W' . $i, $c['minggu_23'])
            ->setCellValue('X' . $i, $c['ket']);

        $i++;
    }

    $i = $i - 1;
    $objPHPExcel->getActiveSheet()->getStyle("B1:X" . $i)->applyFromArray(
        array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                )
            )
        )
    );


    // Redirect output to a client’s web browser (Excel2007)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header("Content-Disposition: attachment;filename=$fileName.xlsx");
    header('Cache-Control: max-age=0');
    // If you’re serving to IE 9, then the following may be needed
    header('Cache-Control: max-age=1');

    // If you’re serving to IE over SSL, then the following may be needed
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
    header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header('Pragma: public'); // HTTP/1.0

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
    unset($objPHPExcel);
} elseif (isset($_POST['perpotongan'])) {
    $cetakPerpotongan = query("SELECT * FROM karkas ORDER BY id ASC");
    $fileName = "Data-Perpotongan-" . date('d-M-y');

    $objPHPExcel = new PHPExcel();
    $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('B1', 'No')
        ->setCellValue('C1', 'Ternak')
        ->setCellValue('D1', 'Bangsa')
        ->setCellValue('E1', 'No Induk')
        ->setCellValue('F1', 'No Jantan')
        ->setCellValue('G1', 'Tgl Lahir')
        ->setCellValue('H1', 'Tgl Potong')
        ->setCellValue('I1', 'Perlakuan')
        ->setCellValue('J1', 'Sex')
        ->setCellValue('K1', 'Ket')
        ->setCellValue('L1', 'Potong')
        ->setCellValue('M1', 'Karkas')
        ->setCellValue('N1', 'Kulit & Bulu')
        ->setCellValue('O1', 'Hati')
        ->setCellValue('P1', 'Ginjal')
        ->setCellValue('Q1', 'Kepala & Kaki')
        ->setCellValue('R1', 'Daging')
        ->setCellValue('S1', 'Tulang');


    $nomor = 1;
    $i = 2;
    foreach ($cetakPerpotongan as $c) {
        $tl = $c['tgl_lahir'];
        $tl_p = $c['tgl_potong'];
        $tgl_lahir = date("Y-m-d", strtotime($tl));
        $tgl_potong = date("Y-m-d", strtotime($tl_p));
        $objPHPExcel->getSheet(0)
            ->setCellValue('B' . $i, $nomor++)
            ->setCellValue('C' . $i, $c['ternak'])
            ->setCellValue('D' . $i, $c['bangsa'])
            ->setCellValue('E' . $i, $c['induk'])
            ->setCellValue('F' . $i, $c['jantan'])
            ->setCellValue('G' . $i, $tgl_lahir)
            ->setCellValue('H' . $i, $tgl_potong)
            ->setCellValue('I' . $i, $c['perlakuan'])
            ->setCellValue('J' . $i, $c['sex'])
            ->setCellValue('K' . $i, $c['ket'])
            ->setCellValue('L' . $i, $c['potong'])
            ->setCellValue('M' . $i, $c['karkas'])
            ->setCellValue('N' . $i, $c['kulit_bulu'])
            ->setCellValue('O' . $i, $c['hati'])
            ->setCellValue('P' . $i, $c['ginjal'])
            ->setCellValue('Q' . $i, $c['kepala_kaki'])
            ->setCellValue('R' . $i, $c['daging'])
            ->setCellValue('S' . $i, $c['tulang']);
        $i++;
    }

    $i = $i - 1;
    $objPHPExcel->getActiveSheet()->getStyle("B1:S" . $i)->applyFromArray(
        array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                )
            )
        )
    );


    // Redirect output to a client’s web browser (Excel2007)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header("Content-Disposition: attachment;filename=$fileName.xlsx");
    header('Cache-Control: max-age=0');
    // If you’re serving to IE 9, then the following may be needed
    header('Cache-Control: max-age=1');

    // If you’re serving to IE over SSL, then the following may be needed
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
    header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header('Pragma: public'); // HTTP/1.0

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
    unset($objPHPExcel);
}

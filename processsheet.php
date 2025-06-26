<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['excel_data'])){
    $filename = $_FILES['import_file']['name'];
    $file_ext = pathinfo($filename, PATHINFO_EXTENSION);

    $allow_ext = ['xls', 'csv', 'xlsx'];
    if(in_array($file_ext, $allow_ext)){
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();
        $count = 0;
        foreach($data as $row){
            if($count > 0){
                $name = isset($row[0]) ? $row[0] : '';
                $form = isset($row[1]) ? $row[1] : '';
                $gender = isset($row[2]) ? $row[2] : '';
                $score = isset($row[3]) ? $row[3] : '';

                $sql = "INSERT INTO `students`(`name`, `form`, `gender`, `score`) VALUES ('$name','$form','$gender','$score')";
                $qry = mysqli_query($dbc, $sql);
            }
           
              $count++;
        }
          echo "Successfully imported records!";
    } else {
        echo "invalid file";
    }
}



?>

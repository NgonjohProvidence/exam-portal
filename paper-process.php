<?php

include ("includes/connection.php");
// function to sanitize data
function secure_data($value){
   $value = trim($value);
   $value = htmlspecialchars($value);
   
   return $value;
}

 if(isset($_POST['add-paper'])){
   $name = secure_data($_POST['register-name']);
   $subject = secure_data($_POST['subject']);
   $class = secure_data($_POST['class']);
   $startdate = $_POST['start-date'];
   $file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$fileTmp  = $file['tmp_name'];
$fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
$allowed = ['pdf'];

    if (in_array($fileExt,$allowed)) {
        $uploadDir = "exams/";
        if (!is_dir($uploadDir)) mkdir($uploadDir);
        $filePath = $uploadDir .basename($fileName);

        if (move_uploaded_file($fileTmp,$filePath)) {
             $filePath = "exams/".basename($fileName);
            $sql = "INSERT INTO `exams`(`exam_title`, `pdf_path`,`Teachers-name`, `Class`, `startdate`) VALUES ('$subject','$filePath','$name','$class', '$startdate')";
            $qry = mysqli_query($conn, $sql);
            if ($qry) {
                    $alert = '<script type="text/javascript">
            if(window.confirm("Exam uploaded successfully")){
            window.location.href="dashboard/index.php";
               
            }
            </script>';
            echo $alert;
        } else {
            echo '<script>alert("Unable to save exam in database")</script>';
        }
    } else {
        echo "Invalid file type. Only pdf files are allowed.";
    }
}
 }

//  Delete Exam
// if(isset($_POST['delete'])){
//     $name = $_POST['register-name'];
//    $subject = $_POST['subject'];
//    $class = $_POST['class'];

//    $sqldel = ""
// }
?>
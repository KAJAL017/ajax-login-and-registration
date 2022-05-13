<?php
include ("dbcon.php");

if(isset($_POST["uname"])  && isset($_POST["uemail"]) && isset($_POST["upass"])){

    $stu_uname  =$_POST['uname'];
    $stu_uemail  =$_POST['uemail'];
    $stu_upass  =$_POST['upass'];

    $sujoy="INSERT INTO `student`(`student_name`,`student_email`,`student_pass`) VALUES ('$stu_uname','$stu_uemail','$stu_upass')";

    if($conn->query($sujoy)==TRUE){
        echo json_encode("ok");
    }else{
        echo json_encode("hoy nai");
    }

};


// Student Login

if(isset($_POST['email'])  && isset($_POST['upass'])){

    $stu_email = $_POST["email"];
    $stu_upass = $_POST["upass"];

    $sql="SELECT student_email,student_pass FROM student WhERE student_email='".$stu_email."' AND student_pass='". $stu_upass."'";

    $result =$conn->query($sql);
    $row =$result->num_rows;
    if($row ==1){
        echo json_encode($row);
    }
    else if( $row == 0){
        echo json_encode($row);
    }

}


?>
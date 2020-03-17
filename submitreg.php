<?php
    include("checkdb.php");
    if($_POST['btn_register'])
    {
        $rollno=$_POST['rollno'];
        $fullname=$_POST['fname'];
        $username=$_POST['uname'];
        $password=$_POST['pname'];
        $gender=$_POST['Gender'];
        $dob=$_POST['date'];
        $address=$_POST['address'];
        $department=$_POST['Department'];
        $semester=$_POST['semester'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
    
        $sql="INSERT INTO User(Roll_no,Username,Password,gender,dob,address,department,semester,email,phone,Fullname)
        values ('$rollno','$username','$password','$gender','$dob','$address','$department','$semester','$email','$phone','$fullname')";
        

        if(mysqli_query($conn,$sql)){
            echo "New record inserted successfully";
        }
        else{
            echo mysqli_error($conn);
        }
    }
?>
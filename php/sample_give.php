<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "giverentdb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        echo "Error";
    }
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $type = $_POST['type'];
        $duration = $_POST['duration'];
        $address = $_POST['add'];
        $pcode = $_POST['pcode'];
        $district = $_POST['district'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $filename = $_FILES['file']['name'];
        $tempname = $_FILES['file']['tmp_name'];

        move_uploaded_file($tempname, "imagefetch/$filename");

        $sql = "INSERT INTO rental_details_(sr_no, fname, lname, prop_type, duration, adrs, picode, district, city, statte, email, phone_no, images)VALUES('NULL', '$fname', '$lname', '$type', '$duration', '$address', '$pcode', '$district', '$city', '$state', '$email', '$phone', '$filename')";
        mysqli_query($conn, $sql);
        echo "Upload Succcess";
    }
    else{
        echo "Error";
    }
?>
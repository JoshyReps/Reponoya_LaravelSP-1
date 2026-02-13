<?php
echo "record inserted successfully";
    $name = $_POST['name'];
    $course = $_POST['course'];
    $email= $_POST["email"];
    $year = $_POST['year'];

    $conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_DATABASE'));
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("INSERT INTO Student (name, course, email, year) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $name, $course, $email, $year);
        $stmt->execute();
        echo "record inserted successfully";
        $stmt->close();
        $conn->close();
    }
    ?>
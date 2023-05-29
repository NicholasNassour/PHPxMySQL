<?php 
    include_once 'db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO testin (FullName, Email, Phone) 
                VALUES ('$name', '$email', '$phone');";
                
    mysqli_begin_transaction($conn);

    try {
        // Insert the row
        $sql = "INSERT INTO testin (FullName, Email, Phone) 
                VALUES ('$name', '$email', '$phone');";
        mysqli_query($conn, $sql);
    
        // Commit the transaction if the insert was successful
        mysqli_commit($conn);
    
        header("Location: ../site.php?test=success");
    } catch (Exception $e) {
        // Rollback the transaction if an error occurred
        mysqli_rollback($conn);
    
        $error = $e->getMessage();
        header("Location: ../site.php?error=$error");
    }

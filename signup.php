<?php

    if (empty($_POST["name"])){
        die("Name is Required");
    }

    if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        die("Enter a valid Email Address");
    }

    if (strlen($_POST["password"])<8){
        die("Password must be at least 8 characters long");
    }
    
    if ($_POST["password"]!== $_POST["password_confirm"]) {
        die("Passwords do not match");
    }
    
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $mysqli = require __DIR__ . "/database.php";

    $sql = "INSERT INTO user (name, email, password_hash) VALUES (?, ?, ?)";

    $stmt = $mysqli->stmt_init();
    
    if (! $stmt-> prepare($sql)){
        die("SQL Error: " . $mysqli->error);
    }

    $stmt-> bind_param("sss",
        $_POST["name"],
        $_POST["email"],
        $password_hash
    );

    if ($stmt-> execute()){
        header("Location: signup-success.html");
        exit;
    }
    else{
        if ($mysqli->errno ===1062){
            die("This email is already taken.");
        }
        else{
            die($mysqli->error . "" . $mysqli->errno);
        }
    }

    
?>
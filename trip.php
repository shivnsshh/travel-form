<?php
$insert = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "trip";

    $con = mysqli_connect($server, $username, $password, $database);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO trip (name, age, gender, email, phone, other, dt)
            VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

    if ($con->query($sql) == true) {
        $insert = true;
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Trip Form</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 420px;
            padding: 35px;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
            color: white;
        }

        h1 {
            text-align: center;
            margin-bottom: 8px;
        }

        p {
            text-align: center;
            margin-bottom: 20px;
            opacity: 0.8;
        }

        .success {
            background: rgba(0, 255, 150, 0.2);
            border-left: 4px solid #00ff95;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 6px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .input-group {
            position: relative;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: none;
            background: rgba(255,255,255,0.15);
            color: white;
            outline: none;
        }

        label {
            position: absolute;
            left: 12px;
            top: 12px;
            color: rgba(255,255,255,0.7);
            transition: 0.3s;
            pointer-events: none;
        }

        input:focus + label,
        input:valid + label,
        textarea:focus + label,
        textarea:valid + label {
            top: -8px;
            font-size: 11px;
            color: white;
        }

        .btn {
            padding: 12px;
            border-radius: 8px;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }

        button[type="submit"] {
            background: #00c9a7;
            color: white;
        }

        button[type="submit"]:hover {
            background: #00a88b;
        }

        button[type="reset"] {
            background: rgba(255,255,255,0.2);
            color: white;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Graphic Era Trip</h1>
    <p>Fill details to confirm your trip</p>

    <?php
    if ($insert == true) {
        echo "<div class='success'>✅ Form submitted successfully!</div>";
    }
    ?>

    <form action="" method="POST">

        <div class="input-group">
            <input type="text" name="name" required>
            <label>Name</label>
        </div>

        <div class="input-group">
            <input type="number" name="age" required>
            <label>Age</label>
        </div>

        <div class="input-group">
            <input type="text" name="gender" required>
            <label>Gender</label>
        </div>

        <div class="input-group">
            <input type="email" name="email" required>
            <label>Email</label>
        </div>

        <div class="input-group">
            <input type="tel" name="phone" required>
            <label>Phone</label>
        </div>

        <div class="input-group">
            <textarea name="desc" rows="3" required></textarea>
            <label>Other Info</label>
        </div>

        <button type="submit" class="btn">Submit</button>
        <button type="reset" class="btn">Reset</button>

    </form>

</div>

</body>
</html>
<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
        header("Location: ./index_login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./css/main.css"> -->
    <link rel="stylesheet" href="./css/alert.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/utils.css">

</head>

<body>
    <!-- Navigation Bar -->
    <?php
        include './header.php';
    ?>

    <h2>Send an alert</h2>
    <div class="container">
        <form>
            <label>Name:</label>
            <input type="text" placeholder="Full Name of Patient/Contact Person" required><br><br>
            <label>Type:</label>
            <select name="Types of Emergency:" id="cars" aria-placeholder="Types of Emergency:">
                <option value="Human Care">Human Care</option>
                <option value="Animal Care">Animal Care</option>
                <option value="Relief/Pandemic">Relief/Pandemic</option>
                <option value="Medical">Medical</option>
            </select><br><br>
            <label>Place:</label>
            <input type="text" required><br><br>
            <label>Address:</label>
            <input type="text" placeholder="Patient’s Address" required><br><br>
            <label>Phone:</label>
            <input type="number" placeholder="Phone Number of Patient/Contact Person" required><br><br>
            <div class="btn">
                <input type="submit" class="submit">
            </div>
        </form>
    </div>
    <script src="./js/alert.js"></script>
    <script src="./js/sideBar.js"></script>
</body>

</html>
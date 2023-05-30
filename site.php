<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            /* align-items: center; */
            height: 100vh;
        }
        /* Add margin-bottom to create vertical spacing */
        input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    
    <!-- Creating input fields to store in the database -->
    <form action = "test.php" method="POST">
        <input type="text" name="name" placeholder="Full Name"> <br>
        <input type="text" name="email" placeholder="E-mail"> <br>
        <input type="text" name="phone" placeholder="Phone #"> <br>
        <button type="submit" name="submit">Sign up</button>
    </form>

    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        echo "Error: $error";
    }
    ?>

    
</body>
</html>

<!-- php -S localhost:4000 -->

<!-- <form action = "site.php" method="post">
        <div class="form-row">
            <label for="name">Full Name:</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="form-row">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="form-row">
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone" placeholder="phone #">
        </div>
    </form> -->
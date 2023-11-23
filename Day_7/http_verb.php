<!doctype html>
<htPOST lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Php_server_running</title>
</head>
<body>

<div class="text-center">
<h1>PHP Form Control</h1>
<br><br>
<p>
    <?php if(isset($_POST["fname"]) && !empty($_POST["fname"])):?>
    First Name: <?php echo $_POST["fname"]; ?> <br>
    <?php endif; ?>

    <?php if(isset($_POST["lname"]) && !empty($_POST["lname"])):?>
    Last Name : <?php echo $_POST["lname"]; ?> <br>
    <?php endif; ?>
</p>

</div>
<div class="container mt-5">
    <div class="row">
        <div class="col"></div>
        <div class="col bg-success p-5">
            <form method="POST">
                <label for="fname" class="text-white">First name:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname" class="text-white">Last name:</label><br>
                <input type="text" id="lname" name="lname"><br><br>
                <input type="submit" value="Submit" class="bg-warning">
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</htPOST
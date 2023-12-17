<!--  php code start -->
<?php
include_once "/xampp/htdocs/php_classes/Day_12_CRUD_project/inc/functions.php";
$info = ' ';
$task = $_GET['task'] ?? 'report';
$error = $_GET['error'] ?? '0';
if('seed' == $task)
    {
        seed();
        $info = 'Seeding is complete';
}
$fname = '';
$lname = '';
$class = '';
$roll  = '';
if(isset($_POST['submit']))
    {
        $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
        $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
        $class = filter_input(INPUT_POST,'class',FILTER_SANITIZE_STRING);
        $roll = filter_input(INPUT_POST,'roll',FILTER_SANITIZE_STRING);

    if($fname != ' ' && $lname != ' ' && $class != ' ' && $roll != ' ' )
        {
            $result = addStudent($fname, $lname, $class, $roll);
            if($result){
                header('location: /php_classes/Day_12_CRUD_project/index.php?task=report');
            }
            else{
                $error = 1;
            }
        }
}
?>
<!--  php code end -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crud_project</title>
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-6 offset-md-3">
                <h2>CRUD Projects</h2>
                <p>A crud simple projects of where operation Create,Read,Update & Delete</p>
                <?php 
                include "/xampp/htdocs/php_classes/Day_12_CRUD_project/inc/nav.php";
                ?>
                <hr>
                <?php
                if($info != ''){
                    echo "<p>{$info}</p>";
                }
                ?>
            </div>
        </div>
        <?php if('1' == $error): ?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <blockquote>Duplicate Class & Roll Number</blockquote>
            </div>
        </div>
        <?php endif; ?>
        <?php if('report' == $task): ?>
        <div class="row">
            <div class="col-md-8">
                <?php generateReport(); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if('add' == $task): ?>
        <form class="row col-md-6 offset-md-3" action="/php_classes/Day_12_CRUD_project/index.php?task=add" method="POST">
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" name="fname" class="form-control" id="fname" value="<?php echo $fname; ?>">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" name="lname" class="form-control" id="lname" value="<?php echo $lname; ?>">
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Class</label>
                <input type="number" name="class" class="form-control" id="class" value="<?php echo $class; ?>">
            </div>
            <div class="mb-3">
                <label for="roll" class="form-label">Roll</label>
                <input type="number" name="roll" class="form-control" id="roll" value="<?php echo $roll; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Save</button>
        </form>
        <?php endif; ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
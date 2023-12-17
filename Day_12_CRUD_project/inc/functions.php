<?php
define('DB_NAME','/xampp/htdocs/php_classes/Day_12_CRUD_project/data/db.txt');
function seed(){
    $data = array(
        array(
            'id'    => '01',
            'fname' => 'Ripon',
            'lname' => 'Ahmed',
            'class' => '10',
            'roll'  => '11'
        ),
        array(
            'id'    => '02',
            'fname' => 'Jamal',
            'lname' => 'Ahmed',
            'class' => '8',
            'roll'  => '13'
        ),
        array(
            'id'    => '03',
            'fname' => 'Khalil',
            'lname' => 'Ahmed',
            'class' => '10',
            'roll'  => '15'
        ),
        array(
            'id'    => '04',
            'fname' => 'jamil',
            'lname' => 'Ahmed',
            'class' => '6',
            'roll'  => '12'
        ),
        array(
            'id'    => '05',
            'fname' => 'Narayan',
            'lname' => 'Chandra',
            'class' => '9',
            'roll'  => '14'
        )
    );
$serializeData = serialize($data);
file_put_contents(DB_NAME,$serializeData,LOCK_EX);
}

// data show in ui

function generateReport(){
    $serializeData  = file_get_contents(DB_NAME);
    $students       = unserialize($serializeData);
    ?>
    <table class="table table-success">
        <tr>
            <th>Name</th>
            <th>Class</th>
            <th>Roll</th>
            <th>Action</th>
        </tr>
        <?php 
        foreach($students as $student){
            ?>
            <tr>
                <td><?php printf('%s %s', $student['fname'],$student['lname']); ?></td>
                <td><?php printf('%s', $student['class']); ?></td>
                <td><?php printf('%s', $student['roll']); ?></td>
                <td><?php printf('<a href="/php_classes/Day_12_CRUD_project/index.php?task=edit&id=%s">Edit</a> | <a href="/php_classes/Day_12_CRUD_project/index.php?task=delete&id=%s">Delete</a>', $student['id'], $student['id']); ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}

// add studnet in database

function addStudent($fname, $lname, $class, $roll){
    $found = false;
    $serializeData  = file_get_contents(DB_NAME);
    $students       = unserialize($serializeData);
    foreach($students as $_student){
        if($_student['roll'] == $roll && $_student['class'] == $class){
            $found = true;
            break;
        }
    }
    if(!$found){
    $newId          = count($students) + 1;
    $student        = array(
        'id'    => $newId,
        'fname' => $fname,
        'lname' => $lname,
        'class' => $class,
        'roll'  => $roll
    );
    array_push($students, $student);
    $serializeData = serialize($students);
    file_put_contents(DB_NAME,$serializeData,LOCK_EX);
    return true;
     }
     return false;
 }

?>
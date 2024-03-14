<?php
include 'conn.php';
global $conn;
if (isset($_GET['updatebyid'])) {
    $id = $_GET['updatebyid'];
    // print($id);die();
    $select = "SELECT * FROM data WHERE id=$id";
    $res = $conn->query($select);
    $fetch = $res->fetchAll(PDO::FETCH_ASSOC);
    // print_r($fetch);die();
    $name = $fetch[0]["name"];
    $email = $fetch[0]["email"];
    $pass = $fetch[0]["password"];
    $sal = $fetch[0]["salary"];
}

if (isset($_POST['load'])) {
    if ($_GET['updatebyid']) {
        $id = $_GET['updatebyid'];
        //echo $_GET['updatebyid'];
    }
    // global $id;
    $inname = $_POST["name"];
    $inemail = $_POST["email"];
    $inpass = $_POST["password"];
    $insal = $_POST["salary"];
    $stmt = "UPDATE data SET name='$inname', email='$inemail', password='$inpass', salary='$insal' WHERE id='$id'";
    $execute=$conn->query($stmt);
    if($execute){
    header('location:form.php');
}
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
<form id="form" method='post' action=''>
<div style=" background-color: bisque; text-align: center; width: 500px;  margin-left:400px;margin-top:70px;">
<div class="mb-3" >
    Name: <input type='text' name='name' value='<?php echo $name ?>'><br>
</div>
<div class="mb-3" >
    Email: <input type='text' name='email' value='<?php echo $email ?>'><br>
    </div>
    <div class="mb-3">
    Password: <input type='password' name='password' value='<?php echo $pass ?>'><br>
    </div>
    <div class="mb-3">
    Salary: <input type='number' name='salary' value='<?php echo $sal ?>'><br>
    </div>
    <div class="mb-3">
    <input type='submit' name='load' value='Update'>
    </div>
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function () {

        $.validator.addMethod("validatename", function (value, element) {
            // return this.optional(element) || /^[a-zA-Z]{4,16}$/.test(value);  this is when your filed is not required
            return /^[a-zA-Z]{4,16}$/.test(value);
        }, "Please enter a valid name (4-16 characters, letters only)");

        var $form = $('#form');
        $form.validate({
            rules: {
                name: {
                    required: true,
                    validatename: true,
                },
                email: {
                    required: true,
                    minlength: 15,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 8,
                },
                salary: {
                    required: true,

                },
            },
            messages: {
                name: {
                    required: 'Name must be filled',
                },
                email: {
                    required: 'Email must be filled',
                    minlength: 'Must be at least 15 characters long',
                    email: 'Must be a valid email id'
                },
                password: {
                    required: 'Password must be filled',
                    minlength: 'Must be at least 8 characters long',
                },
                salary: {
                    required: 'salary can not be left blank',
                },
            }
        });
    });
</script>
<style>
    .error{
        color:red;
    }
</style>
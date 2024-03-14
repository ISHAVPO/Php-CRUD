<?php
include 'formh.php';
include 'conn.php';

class store
{
    
    function add()
    {
        global $conn;
        if (isset($_POST['sub'])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $pass = $_POST["password"];
            $sal = $_POST["salary"];


            $sql = "INSERT INTO `data`( `name`, `email`, `password`, `salary`) VALUES ('$name','$email','$pass','$sal')";

            $result = $conn->query($sql);


            if ($result) {
                echo "Submitted";
            } else {
                echo "Something went wrong";
            }
            
        } else {
            echo "Form not submitted";
        }

    }
    function showdata(){
        global $conn;
        $queryy= "SELECT * FROM data";
        $result= $conn->query($queryy);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);

        echo "<table class='table table-success'><thead><tr><th>ID</th><th>NAME</th><th>EMAIL</th><th>PASSWORD</th><th>SALARY</th><th>DELETE</th><th>EDIT</th></th></th></tr></thead>";
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>" .$row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['salary'] . "</td>";
            echo "<td><button class='btn btn-danger text light'><a href='?deletebyid=".$row['id']."'>DELETE</a></button></td>";
            echo "<td><button  class='btn btn-warning text light'><a href='update.php?updatebyid=".$row['id']."'>UPDATE</a></button></td>";
            echo "</tr>";
        }
    }

    function delete(){
        global $conn;
        if(isset($_GET['deletebyid'])){
    
            $id=$_GET['deletebyid'];
            $del="delete from data where id=$id";
            $execute=$conn->query($del);
            if($execute)
            {
                echo"deleted successfully";
                header('location:form.php');//both are same
                // echo "<script>window.onload = function() { setTimeout(function(){ window.location.reload(); }, 1000); }</script>";
            }
            else{
                echo"not deleted";
            }



      

    }
}
}
$object= new store();
$object->showdata();
$object->add();
$object->delete();


?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>
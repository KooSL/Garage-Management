<?php
if(isset($_POST['store']))
{
    $name = $_POST['name'];
    $priority = $_POST['priority'];

    $qry = "INSERT INTO categories(name, priority) VALUES('$name', $priority)";

    include '../includes/dbconnection.php';
    $result = mysqli_query($conn, $qry);
    if($result){
        echo "<script>
        alert('Category added successfully');
        window.location.href = 'categories.php';
        </script>";
    }else{
        echo "Error adding category";
    }
    include '../includes/closeconnection.php';
}

//update
if(isset($_POST['update']))
{
    $id = $_POST['categoryid'];
    $name = $_POST['name'];
    $priority = $_POST['priority'];

    $qry = "UPDATE categories SET name = '$name', priority = $priority WHERE id = $id";

    include '../includes/dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include '../includes/closeconnection.php';

    if($result){
        echo "<script>
        alert('Category updated successfully');
        window.location.href = 'categories.php';
        </script>";
    }else{
        echo "Error updating category";
    }
}

//delete
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $qry = "DELETE FROM categories WHERE id = $id";

    include '../includes/dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include '../includes/closeconnection.php';

    if($result){
        echo "<script>
        alert('Category deleted successfully');
        window.location.href = 'categories.php';
        </script>";
    }else{
        echo "Error deleting category";
    }
}
?>
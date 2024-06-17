<?php 
    require_once("db_connect.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $query= "UPDATE registration SET FirstName =?, SecondName =?, Email=?, Telephone =? WHERE ID = ?";
        $stmt = mysqli_prepare($con, $query);
        $fn = $_POST['fname'];
        $sn = $_POST['sname'];
        $emai = $_POST['email'];
        $tel = $_POST['telephone'];
        $id_var = $_POST['id'];
        mysqli_stmt_bind_param($stmt, "ssssi", $fn, $sn, $emai, $tel, $id_var);
        mysqli_stmt_execute($stmt);
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "Data updated successfully";
        } else {
            echo "No data updated or ID not found";
        }
        mysqli_stmt_close($stmt);
        mysqli_close($con);
        exit();
    }
?>

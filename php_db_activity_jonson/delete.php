
<?php 
    include 'dbcon.php';

    $id = $_GET['id'];

    $sql_query = "DELETE FROM users WHERE id = $id";
    $result = $conn->query($sql_query);

    if ($result) {
        echo "<script>
                alert('Successfully deleted');
                windows.location.href = 'index.php';q
              </script>";
    } else {
        echo "<script>
                alert('Delete failed');
                windows.location.href = 'index.php';
            </script>";
    }
?>
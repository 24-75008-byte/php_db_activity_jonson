<?php 
    include 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <h1 class="text-center"> User Management System </h1>

   
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <h3> New User</h3>

                    <form action="#" method="post">
                        <label class="form-label"> Full Name </label>
                        <input type="text" name="name"  class="form-control" reuired>
                    
                        <label  class="form-label"> Email Address </label>
                        <input type="email" name="email"  class="form-control" reuired>
        
                        <button class="btn btn-primary" type="submit" name="submit"  class="btn btn-primary"> Submit </button>
                    </form>

                    <?php 
                        if(isset($_POST['name'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];

                            $sql = $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");

                            if ($sql) {
                                echo "<script>
                                        alert('Successfully added');
                                        windows.location.href = 'index.php';q
                                    </script>";
                            } else {
                                echo "<script>
                                        alert('Adding failed');
                                        windows.location.href = 'index.php';
                                    </script>";
                            }
                        }
                    ?>
                </div>    
            </div>

            <div class="col-md-6">
                <div class="container">
                    <h3> Registered User </h3>
                    <table class="table table-bordered"> 
                        <thead>
                            <tr>
                                <th> #</th>
                                <th> Name </th>
                                <th> Address </th>
                                <th> Join </th>
                                <th> Action </th>
                            </tr>
                        </thead>

                        <?php 
                            $sql_query = "SELECT * FROM users";
                            $result = $conn->query($sql_query);

                            foreach($result as $row) { 
                        ?>
                        <tbody>
                            <tr>
                                <td><?=$row[$rows++]?></td>
                                <td><?=$row['name']?></td>
                                <td><?=$row['email']?></td>
                                <td><?=$row['created_at']?></td>
                                <td>
                                    <a class="btn" href="edit.php?=id<?=$row['id']?>"> Edit </a>
                                    <a class="btn" href="delete.php?=id<?=$row['id']?>"> Delete </a>
                                </td>
                            </tr>
                        </tbody>
                        <?php 
                            }
                        ?>
                    </table>
</div>
            </div>
        </div>
  
</body>
</html>
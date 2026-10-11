<?php 
    include 'dbcon.php';

    $id = $_GET['id'];

    <form method="post">
        <label class="form-label"> Full Name </label>
        <input type="text" name="name"  class="form-control" value="<?=row['name']?>" reuired>
                    
        <label  class="form-label"> Email Address </label>
        <input type="email" name="email"  class="form-control" reuired>
        
        <button class="btn btn-primary" type="submit" name="submit"  class="btn btn-primary"> Submit </button>
    </form>

?>
<h1>Sorry!</h1>
<h4><?= htmlspecialchars($message) ?></h4>

<?php 

    if($spot == "addlink")
    {  
        echo('Click <a href="save.php">here</a> to return to the previous page.');
    }
    else if($spot == "login")
    {  
        echo('Click <a href="login.php">here</a> to return to the previous page.');
    }
    else if($spot == "register")
    {  
        echo('Click <a href="register.php">here</a> to return to the previous page.');
    }
?>
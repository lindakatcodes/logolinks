<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register-form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submissions
        if (empty($_POST["username"]))
        {
            apologize("You must select a valid username.", "register"); 
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide a password.", "register"); 
        }
        else if (empty($_POST["confirmation"]))
        {
            apologize("You must provide confirmation of your password.", "register"); 
        }
        
        // verify password match
        if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Your password and confirmation do not match. Please try again.", "register"); 
        }
        
        //verify username does not already exist
        $uncheck = CS50::query("INSERT IGNORE INTO users (username, hash) VALUES (?, ?)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
        if ($uncheck == 0)
        {
            apologize("It seems someone else already has this username. Please pick a new one.", "register"); 
        }
        
        //assign id and log in user
        $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        $_SESSION["id"] = $id;
        
        redirect("index.php");
    }

?>
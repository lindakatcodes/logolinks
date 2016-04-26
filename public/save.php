<?php 
 
 // configuration
    require("../includes/config.php"); 

    //once form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //ensure all form fields have information
        if(empty($_POST["link"]))
        {
            apologize("You must enter a link to save it!", "addlink");
        }
        
        if(empty($_POST["desc"]))
        {
            apologize("Please add a word (or more) that describes what your link is.", "addlink");
        }
        
        //add link to database
        $add_link = CS50::query("INSERT IGNORE INTO links (user_id, link, info) VALUES (?, ?, ?)", $_SESSION["id"], $_POST["link"], $_POST["desc"]);
        
        //make sure it's not a duplicate
        if($add_link == 0)
        {
            apologize("You've already saved this link before! To avoid duplicates we won't save this again. Please visit your log to view this link or update it's description.", "addlink");
        }
        
        redirect("/");
    }
    
?>
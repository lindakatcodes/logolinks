<?php

//config
require("../includes/config.php");

//if reached from clicking edit
if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        //gather link and send to edit form
        if(isset($_GET["unid"]))
        {
            $value = CS50::query("SELECT unid, link, info FROM links WHERE unid = ?", $_GET["unid"]);
        }
            
        render("edit-form.php", ["values" => $value[0], "title" => "Edit Link"]);
        
    }
    
    //after link has been edited
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //update link and info to new information
        $update = CS50::query("UPDATE links SET link = ?, info = ? WHERE unid =  ?", $_POST["link"], $_POST["desc"], $_POST["unid"]);
        
        redirect("/");
    }
?>
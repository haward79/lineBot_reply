<?php

    /*
     *  Send response by curl.
     */

    // Randomly generate sticker number.
    $stickerNo = 51626494 + rand(0, 40);

    // Send response.
    $curlSeed = curl_init('https://api.line.me/v2/bot/message/reply');
    curl_setopt($curlSeed, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($curlSeed, CURLOPT_POSTFIELDS,
    '{
        "replyToken": "'.$replyToken.'",
        "messages":
        [
            {
                "type": "text",
                "text": "Message got! Just wait and see."
            },
            {
                "type": "sticker",
                "packageId": "11538",
                "stickerId": "'.$stickerNo.'"
            }
        ]
    }');
    curl_setopt($curlSeed, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlSeed, CURLOPT_HTTPHEADER, array('Content-type: application/json', 'Authorization: Bearer '.$cat));
    $result = curl_exec($curlSeed);

    // Print response sending result.
    echo $result . '<br />';


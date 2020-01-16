<?php

    /*
     *  Send response by file_get_contents().
     */

    // Randomly generate sticker number.
    $stickerNo = 51626494 + rand(0, 40);

    // Setup request (by json).
    $request = array(
        'http' => array(
            'header' => 'Content-type: application/json' . "\n" . 'Authorization: Bearer '.$cat,
            'method' => 'POST',
            'content' =>
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
            }'
        )
    );

    // Send response.
    $result = file_get_contents('https://api.line.me/v2/bot/message/reply', false, stream_context_create($request));

    // Print response sending result.
    if($result === FALSE)
        echo 'Error. <br />';
    else
        var_dump($result);


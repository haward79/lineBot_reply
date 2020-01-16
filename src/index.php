<?php

    // Set status in header.
    header('Status: 200');

    // Log.
    $fout = fopen('data.json', 'a');
    fwrite($fout, file_get_contents('php://input') . "\n");
    fclose($fout);

    // Fetch reply token.
    $extracted = json_decode(file_get_contents('php://input'), true);
    $replyToken = $extracted['events'][0]['replyToken'];

    // Set channel access token.
    $cat = 'Your token should be here.';

    // Include another file for response. (Choose either of one.)
    // require_once('reply_byCurl.php');
    // require_once('reply_byFileGetContents.php');


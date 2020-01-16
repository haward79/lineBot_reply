# What's this ?
This example uses simplest way to implement auto reply Line bot by php.

# Requirements
* Server with
    * Web service (Ex: apache or nginx)
    * Php
    * SSL certification

# Details
## Get Line bot
Before connecting to your Line bot, create a Line developers account.
1. Create Line developers account. (Visit [Line Dev](https://developers.line.biz/en/))
2. Login to Line developers and create a provider and a messaging API channel.

## Setup Line bot
Go to setting page for the Line bot, and enable or disable the following settings.
* "Use webhook" should be ENABLED.
* "Allow bot to join group chats" should be ENABLED.
* "Auto-reply" should be DISABLED.

Fill out the following field.
* Fill out "Webhook URL" which point to your server with ssl available.

Get the following token.
* Issue a "Channel access token".

## Setup php script.
1. Copy files in src directory to the root of website which is prepared for Line bot on your server.
2. Open index.php with php editor and paste your "Channel access token" to variable $cat on line 16.
3. This example provides two methods to handle request: file_get_content and curl. Please choose either of them to uncomment and leave the other being commented.

***Note :*** Install php-curl is required before using curl version example.

## Test Line bot.
Scan the QR code on setting page of your Line bot to add it to your Line friend. Then, try to send some message to your bot. It should reply "Message got! Just wait and see." and a random sticker.

## For more info and tech support.
This is just a simple and short illustration document. For more info and technical support, please take websites below for reference or contact author(next section).
* [Line Message Bot official document](https://developers.line.biz/en/docs/messaging-api/overview/)
* [Line Sticker list](https://developers.line.biz/media/messaging-api/sticker_list.pdf)

## Copyright
These codes are written by [haward79](https://www.haward79.tw).

Feel free to copy or modify the codes. Contact me by sending me an email if you have any problem about codes or other details.


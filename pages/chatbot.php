<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/chatbot.css">
    <script src="../chatbot.js"></script>
    <title>WELEARN - ChatBot</title>
</head>

<body>
    <div class="chatbot">
        <div class="head-chat">
            <h2>Chat</h2>
            <div id="quit">X</div>
        </div>
        <div class="discuss"></div>
        <div class="chat">
            <div class="container-inp">
                <div class="inp">
                    <textarea placeholder="Entrez votre message" id="message" minlength="1" maxlength="1500"></textarea>
                </div>
                <button onclick="sendMessage()" class="submit"><img src="../assets/send.svg"></button>
            </div>
        </div>
    </div>

</body>

</html>

function sendMessage() {
    var messageInput = document.getElementById('message');
    var messageText = messageInput.value.trim();
    var answerMessage = "Hello, how can we help you?";

    if (messageText !== '') {
        var discussion = document.querySelector('.discuss');
        discussion.innerHTML += '<p class="mychat">' + messageText + '</p>';
        discussion.innerHTML += '<p class="answer">' + answerMessage + '</p>';

        // Ajoutez ici la logique de votre chatbot pour traiter la réponse

        messageInput.value = '';
        discussion.scrollTop = discussion.scrollHeight;
    }
}

function showChat() {
    document.getElementById("chatbot").style.visibility = "visible";

}

function closeChat() {
    document.getElementById("chatbot").style.visibility = "hidden";
}
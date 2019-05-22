function nim() {
    var txt;
    if (confirm("Silahkan Masukan Nim Anda")) {
        var message = document.getElementById("message");
        document.getElementById("nim").addEventListener("click", function () {
            console.log(message.value);
        });
    } else {
        // txt = "You pressed Cancel!";
    }
    document.getElementById("submit").innerHTML = txt;
}
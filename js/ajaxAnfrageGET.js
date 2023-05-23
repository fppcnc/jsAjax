function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('demo').innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "ajax.php?programmiersprache=" + document.getElementsByTagName('input')[0].value);
    xhttp.send();
}

//Serverantwort als Textzeichenfolge: responseText
document.getElementById("demo").innerHTML = xhttp.responseText;

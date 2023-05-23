function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('demo').innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "ajaxPOST.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send( `userinput=${document.getElementById("programmiersprache").value}`);
}
class User {
    constructor(name) {
        this.name = name;
        this.time = new Date().getTime(); // ms since 1.1.1970
    }
}

function loadDoc2(user) {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("id2").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("POST", "objectAjax.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`user=${JSON.stringify(user)}`);
}
const sendAjax = () => {
    const peter = new User('Peter');
    loadDoc2(peter);

}

document.getElementById('btn1').addEventListener('click', sendAjax);
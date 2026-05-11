function validateRegister()
{
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let nationality = document.getElementById("nationality").value;
    let password = document.getElementById("password").value;
    let confirm = document.getElementById("confirm_password").value;

    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function ()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            
        }
    };

    xhttp.open("POST", "../../controllers/registerController.php", true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xhttp.send("name=" + encodeURIComponent(name) +"&email=" + encodeURIComponent(email) +"&phone=" + encodeURIComponent(phone) +"&nationality=" + encodeURIComponent(nationality) +
        "&password=" + encodeURIComponent(password) +"&confirm_password=" + encodeURIComponent(confirm));

    return false;
    
}
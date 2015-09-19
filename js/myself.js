

function checkEmail()
{
    var email = document.getElementById("email").value;
    var re_email = document.getElementById("re_email").value;


    if (email != re_email) {
        document.getElementById("email_err").innerHTML = "<code>Email doesn't match</code>";
        document.getElementById("butt").setAttribute("disabled","");
    }else {
        document.getElementById("email_err").innerHTML = "";
        document.getElementById("butt").removeAttribute("disabled","");
    }


}
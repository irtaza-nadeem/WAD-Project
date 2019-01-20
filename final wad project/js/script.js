/*azan space*/

function processString()
{
    var check = true;
    var firtname = document.getElementById('fn').value;
    var lastname = document.getElementById('ln').value;
    var password = document.getElementById('ps').value;
    var c_password = document.getElementById('ps2').value;
    var dob = document.getElementById('dob').value;
    var query_val = null;
    var email = document.getElementById('e').value;
    var name = /[a-zA-Z][^#&<>\"~;$^%{}?,!@/()'\-_.\\|"+*!/=[\]0-9]{1,20}$/g;
    var pass = /[a-zA-Z#&<>\"~;$^%{}?,!@/()'\-_.\\|"+*/=[\]0-9]{8,20}$/g;
    //var date = /^(19[7-9]\d|20[0-1][0-9])[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])$/g;
    var c_email = /^([a-zA-Z])+(.|_)?([a-zA-Z])+(.|_)?(\d)*[@]((gmail)|(yahoo)|(facebook))(.com)/g;
    var res_name = firtname.match(name);
    var res_last = lastname.match(name);
    var res_pass = password.match(pass);
    //var res_date = inputString.match(date);
    var res_email = email.match(c_email);

    document.getElementById("para").innerHTML = "";
    if(firtname.length === 0)
    {
        check = false;
        document.getElementById("para").innerHTML += "<br>" + "Enter First Name";
    }
    else
    {
        if(res_name==null)
        {
            check = false;
            document.getElementById("para").innerHTML += "<br>" + "Enter First Name in valid Format only characters are allowed";
        }
    }
    if(lastname.length === 0)
    {
        check = false;
        document.getElementById("para").innerHTML += "<br>" + "Enter Last Name";
    }
    else
    {
        if(res_last==null)
        {
            check = false;
            document.getElementById("para").innerHTML += "<br>" + "Enter Last Name in valid Format only characters are allowed";
        }
    }
    if(email.length === 0)
    {
        check = false;
        document.getElementById("para").innerHTML += "<br>" + "Enter Email";
    }
    else
    {
        if(res_email==null)
        {
            check = false;
            document.getElementById("para").innerHTML += "<br>" + "Enter Valid in valid Format @gmail.com or @yahoo.com or @facebook.com";
        }
    }
    if (dob.length === 0)
    {
        check = false;
        document.getElementById("para").innerHTML += "<br>" + "Select Date Please";
    }
    if (document.querySelector("input[name='gen']:checked")!==null)
    {
        query_val = document.querySelector("input[name='gen']:checked").value;
    }
    else
    {
        check = false;
        document.getElementById("para").innerHTML += "<br>" + "Please select Gender option";
    }
    if(password.length === 0)
    {
        check = false;
        document.getElementById("para").innerHTML += "<br>" + "Enter Password";
    }
    else
    {
        if(res_pass==null)
        {
            check = false;
            document.getElementById("para").innerHTML += "<br>" + "Enter Password of length 8 and without Space";
        }
    }
    if (password !== c_password && check===false)
    {
        check = false;
        document.getElementById("para").innerHTML += "<br>" + "Please Enter Same Password";
    }
    if (check === true)
    {
        document.getElementById("para").innerHTML = "";
        document.getElementById("para").innerHTML += "<br>" + "You are now Register !!!";
        document.getElementById("data").innerHTML = "<?php" + setdata(); + "?>"
    }

}
/*azan space*/



/*irtaza space

irtaza space*/





/*fareed space

fareed space*/




//saim space


function datacheck() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var check=true;

    var email_check = /^([a-zA-Z])+(.|_)?([a-zA-Z])+(.|_)?(\d)*[@]((gmail)|(yahoo)|(facebook))(.com)/g;

    var password_exp = /[a-zA-Z#&<>\"~;$^%{}?,!@/()'\-_.\\|"+*/=[\]0-9]{8,20}$/g;
    var match_email=email.match(email_check);

    var match_password=password.match(password_exp);

    if(email.length === 0)
    {
        check = false;
        document.getElementById("s").style.color = "#ff0000";
        document.getElementById("s").innerHTML +=  "<br><br>" + "*Enter Email";

    }

    else
        {
        if (match_email == null)
        {
            check = false;
            document.getElementById("s").style.color = "#ff0000";
            document.getElementById("s").innerHTML += "<br>" + "*not a valid email";

        }
    }

   if(password.length === 0)
    {
        check = false;
        document.getElementById("s").style.color = "#ff0000";
        document.getElementById("s").innerHTML +=  "<br><br>" + "*password required";

    }

    else
    {
        if (match_password == null)
        {
            check = false;
            document.getElementById("s").style.color = "#ff0000";
            document.getElementById("s").innerHTML += "<br>" + "*not a valid password ";

        }
    }
}














//saim space*/





/*tahreem space

tahreem space*/

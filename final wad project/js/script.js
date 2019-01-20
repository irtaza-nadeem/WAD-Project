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


    document.getElementById('s').innerHTML = "<td>" + email + "</td>" + "<td>" + password;


}


//saim space*/




function contactus_name()
{
    //alert("hello");
    var name = /[a-zA-Z][^#&<>\"~;$^%{}?,!@/()'\-_.\\|"+*!/=[\]0-9]{1,20}$/g;

    var client_name = document.getElementById('client_name').value;

    //alert(name);
    var res_name = client_name.match(name);

    if(client_name.length === 0)
    {
        document.getElementById("name_error_msg").innerHTML += "<br>" + "Enter your name";
    }
    else
    {
        if(res_name==null)
        {
            document.getElementById("name_error_msg").innerHTML += "<br>" + "Invalid Format only alphabets are allowed";
        }
    }
}

function contactus_email()
{
    //alert("hello");
    var email = /^([a-zA-Z])+(.|_)?([a-zA-Z])+(.|_)?(\d)*[@]([a-zA-Z])+(.|_)?([a-zA-Z])(.com)/g;

    var client_email = document.getElementById('client_email').value;

    //alert(name);
    var res_name = client_email.match(email);

    if(client_email.length === 0)
    {
        document.getElementById("email_error_msg").innerHTML += "<br>" + "Enter your email";
    }
    else
    {
        if(res_name==null)
        {
            document.getElementById("email_error_msg").innerHTML += "<br>" + "Invalid Email";
        }
    }
}

function contactus_number()
{
    //alert("hello");
    var number = /^(03\d{2}|\+92(3\d{2}|\s3\d{2}|\-3\d{2})|0092(3\d{2}|\s3\d{2}|\-3\d{2}))(\s|\-)?\d{7}/g;

    var client_number = document.getElementById('client_number').value;

    //alert(name);
    var res_name = client_number.match(number);

    if(client_number.length === 0)
    {
        document.getElementById("number_error_msg").innerHTML += "<br>" + "Enter your number";
    }
    else
    {
        if(res_name==null)
        {
            document.getElementById("number_error_msg").innerHTML += "<br>" + "Invalid number";
        }
    }
}

function contactus_msg()
{
    //alert("hello");
    //var msg;

    var client_msg = document.getElementById('client_msg').value;

    //alert(name);


    if(client_msg.length === 0)
    {
        // alert("hello")
        document.getElementById("msg_error_msg").innerHTML += "<br>" + "Enter your Message";
    }
    else
    {
        if(res_name==null)
        {
            document.getElementById("msg_error_msg").innerHTML += "<br>" + "Invalid Message";
        }
    }
}

//tahreem space*/

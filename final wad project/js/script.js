/*azan space*/

function processString()
{
    var f = document.getElementById('fn');
    var l = document.getElementById('ln');
    var ee = document.getElementById('e');
    var date = document.getElementById('dob');
    var p = document.getElementById('ps');
    var cp = document.getElementById('ps2');
    var errormsg = document.getElementById("msg");
    var errormsg1 = document.getElementById("msg1");
    var errormsg2 = document.getElementById("msg2");
    var errormsg3 = document.getElementById("msg3");
    var errormsg4 = document.getElementById("msg4");
    var errormsg5 = document.getElementById("msg5");
    var errormsg6 = document.getElementById("msg6");


    var check = true;
    var firtname = document.getElementById('fn').value;
    var lastname = document.getElementById('ln').value;
    var password = document.getElementById('ps').value;
    var c_password = document.getElementById('ps2').value;
    var dob = document.getElementById('dob').value;
    var query_val = null;
    var email = document.getElementById('e').value;
    var name = /[a-zA-Z][^#&<>\"~;$^%{}?,!@/()'\-_.\\|"+*!/=[\]0-9]{0,20}$/g;
    var pass = /[a-zA-Z#&<>\"~;$^%{}?,!@/()'\-_.\\|"+*/=[\]0-9]{8,20}$/g;
    //var date = /^(19[7-9]\d|20[0-1][0-9])[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])$/g;
    var c_email = /^([a-zA-Z])+(.|_)?([a-zA-Z])+(.|_)?(\d)*[@]((gmail)|(yahoo)|(facebook))(.com)$/g;
    var res_name = firtname.match(name);
    var res_last = lastname.match(name);
    var res_pass = password.match(pass);
    //var res_date = inputString.match(date);
    var res_email = email.match(c_email);

    if(firtname.length === 0)
    {
        check = false;
        f.classList.add('is-invalid');
        errormsg.innerText =  "Enter First Name";
        errormsg.classList.add('invalid-feedback');
    }
    else
    {
        if(res_name==null)
        {
            check = false;
            f.classList.add('is-invalid');
            errormsg.innerText =  "Enter First Name in valid Format only characters are allowed";
            errormsg.classList.add('invalid-feedback');
        }
        else
        {
            f.classList.remove('is-invalid');
            f.classList.add('is-valid');
            errormsg.innerText =  "";
        }
    }
    if(lastname.length === 0)
    {
        check = false;
        l.classList.add('is-invalid');
        errormsg1.innerText =  "Enter Last Name";
        errormsg1.classList.add('invalid-feedback');
    }
    else
    {
        if(res_last==null)
        {
            check = false;
            l.classList.add('is-invalid');
            errormsg1.innerText =  "Enter Last Name in valid Format only characters are allowed";
            errormsg1.classList.add('invalid-feedback');
        }
        else
        {
            l.classList.remove('is-invalid');
            l.classList.add('is-valid');
            errormsg1.innerText = "";
        }
    }
    if(email.length === 0)
    {
        check = false;
        ee.classList.add('is-invalid');
        errormsg4.innerText =  "Enter Email";
        errormsg4.classList.add('invalid-feedback');
    }
    else
    {
        if(res_email==null)
        {
            check = false;
            ee.classList.add('is-invalid');
            errormsg4.innerText =  "Enter Valid in valid Format @gmail.com or @yahoo.com or @facebook.com";
            errormsg4.classList.add('invalid-feedback');
        }
        else
        {
            ee.classList.remove('is-invalid');
            ee.classList.add('is-valid');
            errormsg4.innerText =  "";
        }
    }
    if (dob.length === 0)
    {
        check = false;
        date.classList.add('is-invalid');
        errormsg3.innerText =  "Select Date";
        errormsg3.classList.add('invalid-feedback');
    }
    else
    {
        date.classList.remove('is-invalid');
        date.classList.add('is-valid');
        errormsg3.innerText =  "";
    }
    if (document.querySelector("input[name='gen']:checked")!==null)
    {
        query_val = document.querySelector("input[name='gen']:checked").value;
        errormsg2.innerText =  "";
    }
    else
    {
        check = false;
        errormsg2.innerText =  "Select Gender";
        errormsg2.classList.add('invalid-feedback');
        errormsg2.classList.add('d-inline');
    }
    if(password.length === 0)
    {
        check = false;
        p.classList.add('is-invalid');
        errormsg5.innerText =  "Enter Password";
        errormsg5.classList.add('invalid-feedback');
    }
    else
    {
        if(res_pass==null)
        {
            check = false;
            p.classList.add('is-invalid');
            errormsg5.innerText =  "Enter Password of length 8 and without Space";
            errormsg5.classList.add('invalid-feedback');
        }
        else
        {
            p.classList.remove('is-invalid');
            p.classList.add('is-valid');
            errormsg5.innerText =  "";
        }
    }
    if (password !== c_password && check===false)
    {
        check = false;
        cp.classList.add('is-invalid');
        errormsg6.innerText =  "Enter same Password";
        errormsg6.classList.add('invalid-feedback');
    }
    else
    {
        cp.classList.remove('is-invalid');
        cp.classList.add('is-valid');
        errormsg6.innerText =  "";
    }
    if(c_password.length === 0)
    {
        check = false;
        cp.classList.add('is-invalid');
        errormsg6.innerText =  "Enter Confirm Password";
        errormsg6.classList.add('invalid-feedback');
    }
    else
    {
        if(res_pass==null)
        {
            check = false;
            cp.classList.add('is-invalid');
            errormsg6.innerText =  "Enter Password of length 8 and without Space";
            errormsg6.classList.add('invalid-feedback');
        }
        else
        {
            cp.classList.remove('is-invalid');
            cp.classList.add('is-valid');
            errormsg6.innerText =  "";
        }
    }
    if (check === true)
    {
        setTimeout(function(){alert("You are Now Registr!!!")},5);
    }
    else{
        return false;
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





/*tahreem space

tahreem space*/

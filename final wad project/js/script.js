/*azan space*/
function processString()
{
        var firtname = document.getElementById('fn').value;
        var lastname = document.getElementById('ln').value;
        var password = document.getElementById('ps').value;
        var dob = document.getElementById('dob').value;
        var query_val = null;
        var email = document.getElementById('e').value;
        if (document.querySelector("input[name='gen']:checked")!==null)
        {
            query_val = document.querySelector("input[name='gen']:checked").value;
        }
        else
        {
            //document.getElementById("quiz-message").innerText = "Please select option";
        }
    //[a-zA-Z][^#&<>\"~;$^%{}?,!@/()'\-_.\\|"+*/=[\]0-9]{1,20}$ ex for name fn and ln
    //[a-zA-Z#&<>\"~;$^%{}?,!@/()'\-_.\\|"+*/=[\]0-9]{8,20}$ ex for pass
    //^(19[7-9]\d|20[0-1][0-9])[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])$ for date
    //^([a-zA-Z])+(.|_)?([a-zA-Z])+(.|_)?(\d)*[@]((gmail)|(yahoo)|(facebook))(.com) email glt
        document.getElementById('p').innerHTML = "<td>" + firtname + "</td>" + "<td>" + lastname +"</td>" + "<td>"+ email +"</td>" + "<td>"+password+"</td>" + dob +"</td>" + "<td>"+ query_val +"</td>";
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

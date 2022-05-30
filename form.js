//--------valitdation for first name-----------//
let fname = document.form_college.firstname;
let alrt = document.getElementsByClassName("alrt");
fname.addEventListener("change",check1);
const check1 = () => {
    let len = fname.value.length;
    let val = fname.value;
    let number1 = ['0','1','2','3','4','5','6','7','8','9'];
    for(i=0; i<len; i++){
        for(j=0; j<number1.length; j++){
            if(val[i]==number1[j]){
                let err = "**  name field only accept alphabats!";
                alrt[0].innerHTML = err;
                alrt[0].style.display = "block";
                alrt[0].style.color = "red";
                fname.focus();
                return false;
            }else if(len<3 || len>60){
                err = "**  name lenght should be between 3 to 60!";
                alrt[0].innerHTML = err;
                alrt[0].style.display = "block"; 
                alrt[0].style.color = "red";
            }
            else{
                err = "** Looks Perfect";
                alrt[0].innerHTML = err;
                alrt[0].style.display = "block";
                alrt[0].style.color = "green";
            }
        }
    }
    /* if(len<3 || len>60){
        let err = "**  name lenght should be between 3 to 60!";
        alrt[0].innerHTML = err;
        alrt[0].style.display = "block";
        alrt[0].style.color = "red";
    }
    else{
        let err = "** Looks Perfect";
        alrt[0].innerHTML = err;
        alrt[0].style.display = "block";
        alrt[0].style.color = "green";
    }*/
}

//-----------------validation for middle name---------------------//

let mname = document.form_college.middlename;
mname.addEventListener("change",check2);
const check2 = () => {
    let len = mname.value.length;
    let val = mname.value;
    let number1 = ['0','1','2','3','4','5','6','7','8','9'];
    for(i=0; i<len; i++){
        for(j=0; j<number1.length; j++){
            if(val[i]==number1[j]){
                let err = "**  name field only accept alphabats!";
                alrt[1].innerHTML = err;
                alrt[1].style.display = "block";
                alrt[1].style.color = "red";
                mname.focus();
                return;
            }else if(len<3 || len>60){
                let err = "**  name lenght should be between 3 to 60!";
                alrt[1].innerHTML = err;
                alrt[1].style.display = "block";
                alrt[1].style.color = "red";
                mname.focus();
            }
            else{
                let err = "** Looks Perfect";
                alrt[1].innerHTML = err;
                alrt[1].style.display = "block";
                alrt[1].style.color = "green";
            }
        }
    }
}

//------------------------validation for last name---------------------//

let lname = document.form_college.lastname;
lname.addEventListener("change",check3);
const check3 = () => {
    let len = lname.value.length;
    let val = lname.value;
    let number1 = ['0','1','2','3','4','5','6','7','8','9'];
    for(i=0; i<len; i++){
        for(j=0; j<number1.length; j++){
            if(val[i]==number1[j]){
                let err = "**  name field only accept alphabats!";
                alrt[2].innerHTML = err;
                alrt[2].style.display = "block";
                alrt[2].style.color = "red";
                lname.focus();
                return;
            }else if(len<3 || len>60){
                let err = "**  name lenght should be between 3 to 60!";
                alrt[2].innerHTML = err;
                alrt[2].style.display = "block";
                alrt[2].style.color = "red";
                lname.focus();
            }
            else{
                let err = "** Looks Perfect";
                alrt[2].style.display = "block";
                alrt[2].innerHTML = err;
                alrt[2].style.color = "green";
            }
        }
    }
}

//-------------------------validations for fathers name----------------//
let faname = document.form_college.fathername;
faname.addEventListener("change",check33);
const check33  = () =>{
    let len = faname.value.length;
    let val = faname.value;
    let number1 = ['0','1','2','3','4','5','6','7','8','9'];
    for(i=0; i<len; i++){
        for(j=0; j<number1.length; j++){
            if(val[i]==number1[j]){
                let err = "**  name field only accept alphabats!";
                alrt[3].innerHTML = err;
                alrt[3].style.display = "block";
                alrt[3].style.color = "red";
                faname.focus();
                return;
            }else if(len<3 || len>60){
                let err = "**  name lenght should be between 3 to 60!";
                alrt[3].innerHTML = err;
                alrt[3].style.display = "block";
                alrt[3].style.color = "red";
                faname.focus();
            }
            else{
                let err = "** Looks Perfect";
                alrt[3].innerHTML = err;
                alrt[3].style.display = "block";
                alrt[3].style.color = "green";
            }
        }
    }
}

//--------------------------validations for pincode---------------//

let pnum = document.form_college.pincode;
pnum.addEventListener("change",check4);
const check4 = () => {
    if(pnum.value.length!=6){
        let err = "**Pin-Code should be of six digits";
        alrt[4].innerHTML = err;
        alrt[4].style.display = "block";
        alrt[4].style.color = "red";
        pnum.focus();
        return ;
    }else{
        let err = "** Looks Perfect";
        alrt[4].style.display = "block";
        alrt[4].innerHTML = err;
        alrt[4].style.display = "block";
        alrt[4].style.color = "green";
    }
}

//-------------------------validations for contact number----------------------//

let cnum = document.form_college.contact;
cnum.addEventListener("change",check5);
function check5(){
    if(cnum.value.length!=10){
        let err = "** should be of ten digits";
        alrt[5].innerHTML = err;
        alrt[5].style.display = "block";
        alrt[5].style.color = "red";
        cnum.focus();
        return false;
    }else{
        let err = "** Looks Perfect!";
        alrt[5].innerHTML = err;
        alrt[5].style.color = "green";
    }
}

//-------------------validation for email-----------------//

let email = document.form_college.email;
email.addEventListener("change", check55);
function check55(){
    let evalue = email.value;
    if(evalue.charAt(evalue.length-4)!="." && evalue.charAt(evalue.length-3)!="."){
        let err = "**invalid email character after '.' ";
        alrt[6].innerHTML = err;
        alrt[6].style.display = "block";
        alrt[6].style.color = "red";
        document.form_college.email.focus();
        return false;
    }else{
        let err = "** Looks Perfect!";
        alrt[6].innerHTML = err;
        alrt[6].style.color = "green";
    }
}


//--------------------validation for enrollment number--------------//
let ennum = document.form_college.en;
ennum.addEventListener("change", check6);
function check6() {
    if(ennum.value.length!=7){
        let err = "**Enrollment Number should be of seven digits";
        alrt[7].innerHTML = err;
        alrt[7].style.display = "block";
        alrt[7].style.color = "red";
        document.form_college.en.focus();
        return false;
    }else{
        let err = "** Looks Perfect!";
        alrt[7].innerHTML = err;
        alrt[7].style.color = "green";
    }
}

//----------------validation for rollno--------------------//
let crnum = document.form_college.cr;
cr.addEventListener("change", check7);
function check7() {
    if(crnum.value.length!=7){
        let err = "**college rollno should be of seven digits";
        alrt[8].innerHTML = err;
        alrt[8].style.display = "block";
        alrt[8].style.style = "red";
        document.form_college.cr.focus();
        return false;
    }else{
        let err = "** Looks Perfect!";
        alrt[8].innerHTML = err;
        alrt[8].style.color = "green";
    }
}

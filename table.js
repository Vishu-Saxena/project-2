 let dat = document.getElementsByClassName("cer");
for(i = 0; i<dat.length;i++){
    txt = dat[i].textContent;
    console.log(txt);
    if(txt == ' applied'){
        dat[i].style.color = "white";
        dat[i].parentElement.style.background = "blue";
    }else if(txt == " "){
        dat[i].style.color= "white";
        dat[i].textContent= "not applied";
        dat[i].parentElement.style.background = "orange";
        dat[i].nextElementSibling.style.display = "none";

    }else if(txt == " rejected"){
        dat[i].style.color = "white";
        dat[i].parentElement.style.background = "red";
        dat[i].nextElementSibling.style.display = "none";
    }
    else{
        dat[i].style.color = "white";
        dat[i].parentElement.style.background = "green";
        dat[i].nextElementSibling.style.display = "none";
    }
}
let dat1 = document.getElementsByClassName("cera");

for(i = 0; i<dat1.length;i++){
    txt = dat1[i].textContent;
    //console.log(txt);
    if(txt == 'applied'){
        dat1[i].style.color = "white";
        dat1[i].parentElement.style.background = "blue";
    }else if(txt == ""){
        dat1[i].style.color= "white";
        dat1[i].textContent= "not applied";
        dat1[i].parentElement.style.background = "orange";
        dat1[i].nextElementSibling.style.display = "none";
    }else if(txt == "rejected"){
        dat1[i].style.color = "#fff";
        dat1[i].parentElement.style.background = "red";
        dat1[i].nextElementSibling.style.display = "none";
    }else{
        dat1[i].style.color = "#fff";
        dat1[i].parentElement.style.background = "green";
        dat1[i].nextElementSibling.style.display = "none";
    }
}
let mytable = document.getElementById('mytable');
let filter =  document.getElementById('search').textContent.toUpperCase();
console.log(filter);
mytable.addEventListener("keyup" , searchfunc);
function searchfunc() {
    let filter =  document.getElementById('search').value.toUpperCase();
    console.log(filter);
    let tr = document.getElementsByTagName('tr');
     for(var i = 1 ; i<tr.length ; i++){
        let name1 = tr[i].getElementsByTagName('td')[1];
        if(name1){
            let textvalue = name1.textContent;
            console.log("working");
            if(textvalue.toUpperCase().indexOf(filter)>-1){
                tr[i].style.display = "";
            }
            else{
                tr[i].style.display = "none";
            }
        }
       
    }
}
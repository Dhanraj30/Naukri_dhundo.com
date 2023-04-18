function addNewWEField() {
    
    let newNode=document.createElement('textarea');
    newNode.classList.add('form-control');
    newNode.classList.add('weField');
    newNode.classList.add('mt-2');
    newNode.setAttribute("rows", 3); 
    newNode.setAttribute("placeholder","Enter here"); /* put Enter here in place holder*/


    let weOb=document.getElementById("we");
    let weAddButtonOb=document.getElementById("weAddButton");

    weOb.insertBefore(newNode, weAddButtonOb); /* we add new node befor weAddBotton*/

}
function addNewEQField() {
    let newNode=document.createElement('textarea');
    newNode.classList.add('form-control');
    newNode.classList.add('eqField');
    newNode.classList.add('mt-2');
    newNode.setAttribute("rows", 3); 
    newNode.setAttribute("placeholder","Enter here"); 


    let eqOb=document.getElementById("eq");
    let eqAddButtonOb=document.getElementById("eqAddButton");

    eqOb.insertBefore(newNode, eqAddButtonOb); 
}
function addNewSKField() {
    let newNode=document.createElement('textarea');
    newNode.classList.add('form-control');
    newNode.classList.add('skField');
    newNode.classList.add('mt-2');
    newNode.setAttribute("rows", 3); 
    newNode.setAttribute("placeholder","Enter here"); 


    let skOb=document.getElementById("sk");
    let skAddButtonOb=document.getElementById("skAddButton");

    skOb.insertBefore(newNode, skAddButtonOb); 
}
function addNewPJField() {
    let newNode=document.createElement('textarea');
    newNode.classList.add('form-control');
    newNode.classList.add('pjField');
    newNode.classList.add('mt-2');
    newNode.setAttribute("rows", 3); 
    newNode.setAttribute("placeholder","Enter here"); 


    let pjOb=document.getElementById("pj");
    let pjAddButtonOb=document.getElementById("pjAddButton");

    pjOb.insertBefore(newNode, pjAddButtonOb); 
}
//generate resume func
function generate(){
    let nameField=document.getElementById("nameField").value;

    let nameT1=document.getElementById("nameT1");
    nameT1.innerHTML = nameField; //take name from name field from the form for nameT1 in template

    document.getElementById("contactT").innerHTML = document.getElementById("contactField").value; //direct
    document.getElementById("addressT").innerHTML = document.getElementById("addressField").value; 
    document.getElementById("emailT").innerHTML = document.getElementById("emailField").value;
    document.getElementById("gitT").innerHTML = document.getElementById("gitField").value;
    document.getElementById("linkedT").innerHTML = document.getElementById("linkedField").value;

    //we
    let wes=document.getElementsByClassName("weField");
    
    let str=''

    for(let e of wes){
        str = str + `<li> ${e.value} </li>`;
    }

    document.getElementById("weT").innerHTML = str;

    //eq
    let eqs=document.getElementsByClassName("eqField");
    
    let str1=''

    for(let e of eqs){
        str1 = str1 + `<li> ${e.value} </li>`;
    }

    document.getElementById("eqT").innerHTML = str1;
    
    //pj
    let pjs=document.getElementsByClassName("pjField");
    
    let str2=''

    for(let e of pjs){
        str2 = str2 + `<li> ${e.value} </li>`;
    }

    document.getElementById("pjT").innerHTML = str2;

    //sk
    let sks=document.getElementsByClassName("skField");
    
    let str3=''

    for(let e of sks){
        str3 = str3 + `<li> ${e.value} </li>`;
    }

    document.getElementById("skT").innerHTML = str3;
    
    document.getElementById("cv-form").style.display="none";
    document.getElementById("cv-templates").style.display="block";

}
//print
function printCV(){
    window.print();
}
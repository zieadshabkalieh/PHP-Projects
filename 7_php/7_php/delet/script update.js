
//update button
document.getElementById("btn3").addEventListener("click",update_row);
function update_row(){
//    document.getElementById("body").style.backgroundColor="red"
   document.getElementById("form3").style.opacity="1"; 
//    document.getElementById("num23").style.display="block"; 
   
   document.getElementById("ok3").addEventListener("click",ok_up);
document.getElementById("cancel3").addEventListener("click",cancel_up);
// var to=parseInt(document.getElementById("Total").innerText);
// console.log(to);

function ok_up(){
    document.getElementById("form3").style.opacity="0"; 
//  text3=document.createTextNode(t3);
}  
function cancel_up(){
    document.getElementById("form3").style.opacity="0"; 
}
}

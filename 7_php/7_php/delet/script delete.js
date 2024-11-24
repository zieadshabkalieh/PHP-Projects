
//update button
document.getElementById("btn2").addEventListener("click",delete_row);
function delete_row(){
//    document.getElementById("body").style.backgroundColor="red"
   document.getElementById("form2").style.opacity="1"; 
//    document.getElementById("num23").style.display="block"; 
   
   document.getElementById("ok2").addEventListener("click",ok_del);
document.getElementById("cancel2").addEventListener("click",cancel_del);
// var to=parseInt(document.getElementById("Total").innerText);
// console.log(to);

function ok_del(){
    document.getElementById("form2").style.opacity="0"; 
//  text3=document.createTextNode(t3);
}  
function cancel_del(){
    document.getElementById("form2").style.opacity="0"; 
}
}

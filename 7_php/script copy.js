var x=document.getElementById("thead1");
var y=document.getElementsByClassName("tbody1");
var b=false;

x.addEventListener('click',f1);
function f1(){
if(b){
    for (var i = y.length - 1; i >= 0; i--) {
        y[i].style.display="none";
        
	
	}
  
}
else{
    for (var i = y.length - 1; i >= 0; i--) {
        y[i].style.display="table-row";		
	}   
}
b=!b;
}

//..................................................
z=document.getElementById("p1");
w=document.getElementById("a1");

w.addEventListener('click',f2);

var c=false;
function f2(){
if(c){
    z.style.display="none";
    w.innerHTML="<p>read more</p>";
    // c=false;
}
else{
    z.style.display="block";
    w.innerHTML="<p>read less</p>"
    // c=true;
}
c=!c;
}
//add button

document.getElementById("btn1").addEventListener("click",add_row);
function add_row(){
   document.getElementById("form1").style.opacity="1"; 
   document.getElementById("num2").style.display="none";
   document.getElementById("div1").style.display="flex";
   document.getElementById("div2").style.display="none";
   document.getElementById("div3").style.display="none";

   document.getElementById("num1").style.display="block";
   document.getElementById("t1").style.display="block";
   document.getElementById("t3").style.display="block";


   document.getElementById("ok").addEventListener("click",ok);
   document.getElementById("cancel").addEventListener("click",cancel);
 
   function ok(){
       document.getElementById("form1").style.opacity="0"; 
    
   }

   function cancel(){
    document.getElementById("form1").style.opacity="0"; 
}
   
}


// -------------------------------------------------------------------




//delete button
document.getElementById("btn2").addEventListener("click",delete_row);
function delete_row(){
//    document.getElementById("body").style.backgroundColor="red"
   document.getElementById("form1").style.opacity="1"; 
   document.getElementById("num2").style.display="block";
   document.getElementById("div1").style.display="none";
   document.getElementById("div2").style.display="flex";
   document.getElementById("div3").style.display="none";

   document.getElementById("num1").style.display="none";
   document.getElementById("t1").style.display="none";
   document.getElementById("t3").style.display="none";
/*
   document.getElementById("num2").style.display="block"; 
   document.getElementById("cancel").style.display="none";
   document.getElementById("ok").style.display="none";
   document.getElementById("cancel2").style.display="inline";
   document.getElementById("cancel3").style.display="none";
   document.getElementById("ok2").style.display="inline";
   document.getElementById("ok3").style.display="none";
*/
   
   document.getElementById("ok2").addEventListener("click",ok_del);
document.getElementById("cancel2").addEventListener("click",cancel_del);
// var to=parseInt(document.getElementById("Total").innerText);
// console.log(to);

function ok_del(){
    document.getElementById("form1").style.opacity="0"; 
//  text3=document.createTextNode(t3);
}  
function cancel_del(){
    document.getElementById("form1").style.opacity="0"; 
}
}
// ---------------------------------------------------------------

//update button
document.getElementById("btn3").addEventListener("click",update_row);
function update_row(){
//    document.getElementById("body").style.backgroundColor="red"
   document.getElementById("form1").style.opacity="1"; 
   document.getElementById("num2").style.display="block";
   document.getElementById("div1").style.display="none";
   document.getElementById("div2").style.display="none";
   document.getElementById("div3").style.display="flex";

   document.getElementById("num1").style.display="block";
   document.getElementById("t1").style.display="block";
   document.getElementById("t3").style.display="block";
//    document.getElementById("num23").style.display="block"; 
   
   document.getElementById("ok3").addEventListener("click",ok_up);
document.getElementById("cancel3").addEventListener("click",cancel_up);
// var to=parseInt(document.getElementById("Total").innerText);
// console.log(to);

function ok_up(){
    document.getElementById("form1").style.opacity="0"; 
//  text3=document.createTextNode(t3);
}  
function cancel_up(){
    document.getElementById("form1").style.opacity="0"; 
}
}

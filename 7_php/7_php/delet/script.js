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
// document.getElementById("num2").style.opacity="0"; 
document.getElementById("btn1").addEventListener("click",add_row);
function add_row(){
   document.getElementById("form1").style.opacity="1"; 
//    document.getElementById("num2").style.opacity="0";



   document.getElementById("ok").addEventListener("click",ok);
   document.getElementById("cancel").addEventListener("click",cancel);
   var to=parseInt(document.getElementById("Total").innerText);
   // console.log(to);
   
   function ok(){
       document.getElementById("form1").style.opacity="0"; 
       var row = document.createElement("tr");
       e=   document.getElementById("tb");
       var data1,data2,data3,data4 ,text1,text2,text3,text4 ,
       t1,t2,t3,t4 ;
       
       t1=document.getElementById("num1").value;
       t2=document.getElementById("t1").value;
       t3=document.getElementById("t2").value;
       t4=document.getElementById("t3").value;
       // t5=document.getElementById("num2").value;
   
       data1=document.createElement("td");
       data2=document.createElement("td");
       data3=document.createElement("td");
       data4=document.createElement("td");
       // data4=document.createElement("td");
   
       row.appendChild(data1);
       row.appendChild(data2);
       row.appendChild(data3);
       row.appendChild(data4);
   
       text1=document.createTextNode(t1);
       text2=document.createTextNode(t2);
       text3=document.createTextNode(t3);
       text4=document.createTextNode(t4);
   
       data1.appendChild(text1);
       data2.appendChild(text2);
       data3.appendChild(text3);
       data4.appendChild(text4);
   
      
       var att =document.createAttribute("class");
       att.value="tbody1";
       row.setAttributeNode(att);
   
       e.appendChild(row);
   
    to++
    document.getElementById("Total").innerText=to;
     
   
   }

   function cancel(){
    document.getElementById("form1").style.opacity="0"; 
}
   
}







// -------------------------------------------------------------------




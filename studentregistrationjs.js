
function validation()
{
    //validating CGPA range------------------------------------------------------------

   var g = document.getElementById("gpa");        
   var m = document.getElementById("per1");
    var f = document.getElementById("per2");



   if(g.value > 4 || g.value < 0 || isNaN(g.value) )
   {

   	alert (" in CGPA field please insert NUMBERS only and gpa in between 0 and 4");
    
    return false;
   }

   
   if(m.value < 0 || m.value > 100 || isNaN(m.value) )
   {
    alert ("In MATRIC percentage field please insert NUMBERS only and Matric percentage in between 0 and 100");
    return false;
   }
   
   
    if(f.value < 0 || f.value > 100 || isNaN(f.value) )
   {
   alert ("In FSC percentage field please insert NUMBERS only and FSC percentage in between 0 and 100 ");
   return false;
   }

     else
   {
   	return true;
   }
   
}
   //validating MATRIC percentage range------------------------------------------------

/*function validation1()
{

   var m = document.getElementById("per1");                               

   if(m.value < 0 || m.value > 100 || isNaN(m.value) )
   {
   	alert ("Please insert NUMBERS only and Matric percentage in between 0 and 100");
   	return false;
   }
   else
   {
   	return true;
   }
   
  }

   //validating FSC percentage range----------------------------------------------------

function validation2()
{
    var f = document.getElementById("per2");

   if(f.value < 0 || f.value > 100 || isNaN(f.value) )
   {
   
   	alert ("Please insert NUMBERS only and FSC percentage in between 0 and 100 ");
   return false;
   }
   else
   {
   	return true;
   }
   
}

*/
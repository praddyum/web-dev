
function check1(){

	var innm= $("#inpnam").val();
	var inmail=$("#inpmail").val();
	var inpas=$("#inpass").val();
	var inm= inmail.substr(0,inmail.indexOf('@'));

  
	if(inpas.includes(innm)) {
     alert('Password could not contain username')
     return false;
}
     
     else if(inpas.includes(inm))
     {

         alert('Password could not contain email')
         return false;
     }
}




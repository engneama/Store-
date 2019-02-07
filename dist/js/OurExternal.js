//java script exernal sheet // 
 
    // for test file var y=alert("welcom");
 
			 function validation()
					{
							var Selet= document.getElementById("ourSlect").value;
							var Cat = document.getElementById("ItemName").value;
							var discrpt =document.getElementById("ItemDiscrption").value;             // validation for fisrt modal 
							if(Selet=="0")
								{   
									 alert("من فضلك اختار اسم التصنيف");
									 document.getElementById("ourSlect").style.borderColor = "red";
									 return false;
								}
						else if(Cat=="")
									   {   
									   alert("من فضلك ادخل اسم الصنف");
									   document.getElementById("ItemName").style.borderColor="red";
									   document.getElementById("ourSlect").style.borderColor = "white";

									  return false;
								}
					    else if(discrpt=="")
							   {
							   alert("من فضلك ادخل وصف الصنف");
								   document.getElementById("ItemDiscrption").style.borderColor="red";
								   document.getElementById("ourSlect").style.borderColor = "white";
								   document.getElementById("ItemName").style.borderColor="white";

									  return false; }

							else
								{
								return true;}
					} 
				  //----------------------------Validation cat ------------------------//
			  function validcat()
				  {
					     var storeSlect=document.getElementById("STselect").value;
				         var StoreNam=document.getElementById("Scat").value;
				   if(storeSlect=="0")
						  {
						  alert("اختار المخزن المضاف اليه ");
						  document.getElementById("STselect").style.borderColor="red";
						  return false;}
					  
			       else if(StoreNam=="")
					  {
					   alert(" ادخل اسم التصنيف الجديد");
					    document.getElementById("Scat").style.borderColor="red";
					    document.getElementById("STselect").style.borderColor="white";
					    return false; }
			        else
						{
							return true;
						}

				  }
			       //----------------------------Validation Store ------------------------//

			  function  validStote()
					   {
					         var NStName=document.getElementById("STSName").value;
							   if(NStName=="")
						    {
							  alert("ادخل اسم المخزن ");
							  document.getElementById("STSName").style.borderColor="red";
							  return false; }
							 else{
								   return true;} 
					   }
	           	   //----------------------------Validation silo ------------------------//

			  function  valSilo()
						  {
							  var SiloN=document.getElementById("SiloName").value;
							   if(SiloN=="")
						    {
							  alert("ادخل اسم الصومعه  ");
							  document.getElementById("SiloName").style.borderColor="red";
							  return false; }
							 else{
								 return true; } 
						  }
			 




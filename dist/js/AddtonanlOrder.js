  // java script طلب الاضافه
 // for test var y= alert("welcom");  




$(function () {
	        $('#datepicker').datepicker({
	            format: "dd/mm/yyyy",
	            autoclose: true,
	            todayHighlight: true,
		        showOtherMonths: true,
		        selectOtherMonths: true,
		        autoclose: true,
		        changeMonth: true,
		        changeYear: true,
               yearRange: '-100y:c+nn',
				
		        orientation: "button"
	        });
	    });
 
   
$('#datepicker').datepicker("setDate", new Date(2008,9,03) );

	////////////////////////////////////////-----------------JS validation------------///////////////////////////////////////////////////
/*
$(document).ready(function checkfields() {
	
		$('#SelectDate').on('input', function() {
	var input=$(this);
	var is_name=input.val();
	if(is_name){input.removeClass("invalid").addClass("valid");}
	else{input.removeClass("valid").addClass("invalid");}
});
	
	
	/*var FDate =document.getElementById("SelectDate").value;
		
		if (FDate=="")
			{
			
				
		   $('#SelectDate').css('border', '1px solid #f00');

				/*var	myalram = document.getElementById("Myalram");
				myalram.classList.add("active");
				myalram.innerHTML="يجب اختيار التاريخ";
				FDate.style.borderColor="red";
				return false;
 			}
		//else 
		//	{return true;}
			//!(FDate.format=="dd/mm/y)yyy") ||
		
				  
				  
*/


function AddaOrderValid()
 {     
 	    var Dateval=document.getElementById("datepickerinput").value;
 	    var DocType=document.getElementById("SelectDocType").value;
        var DocNum=document.getElementById("SelectDocNum").value;
	    var MyDate= Date.parse(Dateval);
	    var Firsttime = document.getElementById("Selecttime").value;
	    var Item =document.getElementById("SelectItem").value;
        var CAT = document.getElementById("SelectCat").value;
	    var Amount=document.getElementById("SelectAmount").value;
	    var SelectPlace=document.getElementById("Selectplace").value;
        var SelecStore=document.getElementById("SelectStore").value;

	 	
	          
	 if(Dateval=="")
		 {
			alert("ادخل تاريخ الاذن ");
		    document.getElementById("datepickerinput").style.borderColor="red";
		    return false;
		 }
	/*else if (Dateval.format!="dd/mm/yyyy") // check on formate date 
		 {     
			   alert("ادخل التاريخ بشكل صحيح ");
			   document.getElementById("datepickerinput").style.borderColor="red";
			    return false;
		 }*/
	else if (isNaN(MyDate) == true)

			 {
			     alert("ادخل التاريخ بشكل صحيح ");
			    document.getElementById("datepickerinput").style.borderColor="red";
			    return false;
			 }
	 
  else if (DocNum=="")
      {
		document.getElementById("SelectDocNum").style.borderColor="red";
  	   document.getElementById("datepickerinput").style.borderColor="white";
	    alert("ادخل رقم الاذن");
 		return false;
     }
  else if (DocNum.length>10) 
	 {
		document.getElementById("SelectDocNum").style.borderColor="red";
		document.getElementById("datepickerinput").style.borderColor="white";
	    alert(" رقم الاذن لا يزيد عن 10 ارقام ");
 		return false;
	 }
  else if(isNaN(DocNum))
		 {
		 document.getElementById("SelectDocNum").style.borderColor="red";
		document.getElementById("datepickerinput").style.borderColor="white";
	    alert("يجب ادخال ارقام فقط");
 		return false; 
		 }
   else if(DocType=="0")
		  {
			 document.getElementById("SelectDocType").style.borderColor="red";
			 document.getElementById("SelectDocNum").style.borderColor="white";
			 document.getElementById("datepickerinput").style.borderColor="white";
		 	 alert("يجب اختيار نوع الاذن");
 			 return false;
 		  }
 else if (Firsttime=="")
	 {
		 alert("ادخل رصيد اول المده");
		    document.getElementById("Selecttime").style.borderColor="red";
		    document.getElementById("datepickerinput").style.borderColor="white";
		    document.getElementById("SelectDocNum").style.borderColor="white";
			 document.getElementById("datepickerinput").style.borderColor="white";
		    return false;
	 }
 else if (isNaN(Firsttime)) // الفمروض هيرجع من الداتا بيز

	{
	        alert("يجب ادخال ارقام فقط");
		    document.getElementById("Selecttime").style.borderColor="red";
		    document.getElementById("datepickerinput").style.borderColor="white";
		    document.getElementById("SelectDocNum").style.borderColor="white";
			 document.getElementById("datepickerinput").style.borderColor="white";
		    return false;
	}
else if (Item=="0")
		 {
		 alert("اختار نوع الصنف");
		 document.getElementById("SelectItem").style.borderColor="RED";
		 document.getElementById("Selecttime").style.borderColor="WHITE";
		 document.getElementById("datepickerinput").style.borderColor="white";
		 document.getElementById("SelectDocNum").style.borderColor="white";
		 document.getElementById("datepickerinput").style.borderColor="white";
		    return false;
		 }
	 	
else if (CAT=="0")
		 {
		 alert("اختار نوع التصنيف");
		 document.getElementById("SelectCat").style.borderColor="red";
		 document.getElementById("SelectItem").style.borderColor="white";
		 document.getElementById("Selecttime").style.borderColor="WHITE";
		 document.getElementById("datepickerinput").style.borderColor="white";
		 document.getElementById("SelectDocNum").style.borderColor="white";
		 document.getElementById("datepickerinput").style.borderColor="white";
		    return false;
		 }
	 else if (SelecStore=="0")
			{
                  		      alert("اختار المخزن المضاف اليه ")

				document.getElementById("SelectStore").style.borderColor="red";
				     document.getElementById("Selectplace").style.borderColor="white";
			    	document.getElementById("SelectCat").style.borderColor="white";
			 	 document.getElementById("SelectItem").style.borderColor="white";
				 document.getElementById("Selecttime").style.borderColor="WHITE";
				 document.getElementById("datepickerinput").style.borderColor="white";
				 document.getElementById("SelectDocNum").style.borderColor="white";
				 document.getElementById("datepickerinput").style.borderColor="white";
		    return false;
			}
	 else if (SelectPlace =="")

    {
		      alert("ادخل الجهه الوارد منها   الصنف")
		      document.getElementById("Selectplace").style.borderColor="red";
              document.getElementById("SelectStore").style.borderColor="white";
				document.getElementById("SelectCat").style.borderColor="white";
				 document.getElementById("SelectItem").style.borderColor="white";
				 document.getElementById("Selecttime").style.borderColor="WHITE";
				 document.getElementById("datepickerinput").style.borderColor="white";
				 document.getElementById("SelectDocNum").style.borderColor="white";
				 document.getElementById("datepickerinput").style.borderColor="white";
		    return false;

	}
else if (Amount=="0")

    {
		      alert("ادخل الكميه الصادره من الصنف")
			  document.getElementById("SelectAmount").style.borderColor="red";
		document.getElementById("Selectplace").style.borderColor="white";
              document.getElementById("SelectStore").style.borderColor="white";
				document.getElementById("SelectCat").style.borderColor="white";
				 document.getElementById("SelectItem").style.borderColor="white";
				 document.getElementById("Selecttime").style.borderColor="WHITE";
				 document.getElementById("datepickerinput").style.borderColor="white";
				 document.getElementById("SelectDocNum").style.borderColor="white";
				 document.getElementById("datepickerinput").style.borderColor="white";
		    return false;
	
	}
	 
	 else if (isNaN(Amount))

    {
		      alert("الكميه يجب تدخل اراقم فقط ")
			  document.getElementById("SelectAmount").style.borderColor="red";
		document.getElementById("Selectplace").style.borderColor="white";
              document.getElementById("SelectStore").style.borderColor="white";
				document.getElementById("SelectCat").style.borderColor="white";
				 document.getElementById("SelectItem").style.borderColor="white";
				 document.getElementById("Selecttime").style.borderColor="WHITE";
				 document.getElementById("datepickerinput").style.borderColor="white";
				 document.getElementById("SelectDocNum").style.borderColor="white";
				 document.getElementById("datepickerinput").style.borderColor="white";
		    return false;
	
	}
	 
   else {
	   return true;
   }
 
 }

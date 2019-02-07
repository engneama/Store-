
function validation()
		  {  
			  	 'use strict';
			    var user=document.getElementById('UserName').value;
			    var password=document.getElementById('PassWord').value;

				
			   if(user=="")
				  {
					  alert("ادخل اسم المستخدم");
					  document.getElementById('UserName').style.borderColor="red";
					  return false;
				  }
			   if(password=="")
				  {   
					   alert("ادخل الباسورد");
 					  document.getElementById('PassWord').style.borderColor="red";
					  document.getElementById('UserName').style.borderColor="white";
 					  return false;
				  }
			  else
					      {
	                        return true;
                          }
				  }
		
 
    
 $(function (){
	     	 'use strict';
          $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
     
  $(function() // hide place holder on focuse form 
		   {
			 'use strict';
			 $('[placeholder]').focus(function()
									  
			{  
			   $(this).attr('data-text',$(this).attr('placeholder'));
			   $(this).attr('placeholder','');
												
			}).blur(function(){
			$(this).attr('placeholder',$(this).attr('data-text'));
		 });
	   });

 function checkForm() 
 {
 
if (document.form.subject.value==""){
 alert("PLease Enter the Subject");
 return false;
 }

if (document.form.message.value==""){
 alert("PLease Enter your message");
 return false;
 }


 
 return true;
 }

 
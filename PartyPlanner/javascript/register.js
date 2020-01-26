

 function checkForm() 
 
 {
 if (document.form.username.value==""){
 alert("please input username.");
 return false;
 }
 
 if (document.form.email.value==""){
 alert("please input your email address.");
 return false;
 }
 
 if (document.form.password.value==""){
 alert("please input your password.");
 return false;
 }

 
 if (document.form.address.value==""){
 alert("please input your Address");
 return false;
 }

if (document.form.tp.value==""){
 alert("please input your telephone Number");
 return false;
 }
 
 
 return true;
 
 
 }
 
 
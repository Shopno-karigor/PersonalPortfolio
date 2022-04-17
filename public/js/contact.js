function nameValidation () {
  var cname = document.getElementById("name").value;
  let matchPattern =cname.match(/\d+/g);
  let matchSpecialChars =cname.match(/[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/g);
  
if (matchPattern != null) {
    document.getElementById("formError").innerText="";
    document.getElementById("formError").innerText="Opps! A number in name. Is it you Admiraal Generaal Aladeen?";
    }
if(matchSpecialChars != null){
    document.getElementById("formError").innerText="";
    document.getElementById("formError").innerText="Opps! Maybe its not right.";
    }
if(matchPattern != null && matchSpecialChars != null){
    document.getElementById("formError").innerText="";
    document.getElementById("formError").innerText="Uhh! It cannot be a name.";
}   
if(matchPattern == null && matchSpecialChars == null){
    document.getElementById("formError").innerText="";
}
};

function emailValidation () {
  var cemail = document.getElementById("email").value;
  var cname = document.getElementById("name").value;
  let matchSpecialChars =cemail.match(/[ `!#$%^&*()_+\-=\[\]{};':"\\|,<>\/?~]/g);
  
if (matchSpecialChars != null) {
    document.getElementById("formError").innerText="";
    document.getElementById("formError").innerText="I am afraid "+cname+". Maybe I cannot reach you on this email.";
    }
if(matchSpecialChars == null){
    document.getElementById("formError").innerText="";
}
};

function emailPatternValidation () {
  var cemailpattern = document.getElementById("email").value;
  var cname = document.getElementById("name").value;
  let matchEmailPattern =cemailpattern.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
  
if (matchEmailPattern == null) {
    document.getElementById("formError").innerText="";
    document.getElementById("formError").innerText="I am afraid "+cname+". Maybe I cannot reach you on this email.";
    }
if(matchEmailPattern != null){
    document.getElementById("formError").innerText="";
}
};

function contactValidation () {
  var ccontact = document.getElementById("contact").value;
  var cname = document.getElementById("name").value;
  let matchSpecialChars =ccontact.match(/[ `!#$%^&*()\-=\[\]{};':"\\|,<>\/?~]/g);
  
if (matchSpecialChars != null) {
    document.getElementById("formError").innerText="";
    document.getElementById("formError").innerText="I am afraid "+cname+". Maybe I cannot reach you on this contact details.";
    }
if(matchSpecialChars == null){
    document.getElementById("formError").innerText="";
}
};

function commentValidation () {
  var ccomment = document.getElementById("comment").value;
  let matchSpecialChars =ccomment.match(/[`#$%^&*\-=\[\];':"\\|<>\/~]/g);
  
if (matchSpecialChars != null) {
    document.getElementById("formError").innerText="";
    document.getElementById("formError").innerText="Please! Do not write a script here.";
    }
if(matchSpecialChars == null){
    document.getElementById("formError").innerText="";
}
};
  
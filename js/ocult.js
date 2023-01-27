const urlParams= new URLSearchParams(window.location.search);
const errorParams=urlParams.get("error");



    if (errorParams == 0){
        var nav__account= document.querySelector(".nav__account");
        nav__account.style.display="none"
    }
    
    if (errorParams == 1){
        var form= document.getElementById("#input-form");
        form.style.borderBottomColor = "red";
    }
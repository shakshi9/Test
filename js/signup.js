function setErrorMessage(message){
    document.getElementById('errorMessage').innerHTML = message;
}

function validateForm(){
    var password  = document.forms['loginForm']['password'].value;
    var email  = document.forms['loginForm']['email'].value;

    var emailvalid = false;
    var passwordValid = false;
    

    if(password){
        if(password.length >5){
            passwordValid = true;
        }else{
            setErrorMessage('Password should have at least 5 characters long.');
            return false;
        }
    }else{
        setErrorMessage('Please input password');
        return false;
    }

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email){
        if(email.match(mailformat))
        {
        emailvalid =  true;
        }
        else
        {
            setErrorMessage('Email is not in the correct format');
        return false;
        }
    }else{
        setErrorMessage('Please input email');
        return false;
    }
    if(password.length >=5){
        submitForm();
    }   
}

function submitForm(){
    //send username and password to the API
     alert('Login Success');
}
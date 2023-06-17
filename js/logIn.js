const logInForms = document.querySelectorAll('.log-in-wraper');
const switch_log_ins = document.querySelectorAll('.switch_log_in');






/* validate logIn/signUp */

const logIn = document.querySelector('.log_in');
const logInMail = document.querySelector('#log_in--mail')
const logInPassword = document.querySelector('#log_in--password')




const signUp = document.querySelector('.sign_up');
const signUpFirstName = document.querySelector('#sign_up--first_name');
const signUpLastName = document.querySelector('#sign_up--last_name');
const signUpEmail = document.querySelector('#sign_up--email');
const signUpEmailConfirm = document.querySelector('#sign_up--email_confirm');
const signUpPassword = document.querySelector('#sign_up--password');
// const signUp = document.querySelector('#sign_up');

function validateMail(mail){
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
        return (true)
    }
        return (false)
}
function validateMail(mail){
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
        return (true)
    }
    return (false)
}
function validatePassword(password){
    if (/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)/.test(password)){
        return (true)
    }
    return (false)
}

//'/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*()\-_=+{};:,<.>])(?!.*[\\/\[\]<>|\'"\\x00-\\x1F])[\w!@#$%^&*()\-_=+{};:,<.>]{8,}$/
//'/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*()\-_=+{};:,<.>])(?!.*[\\/\[\]<>|\'"\\x00-\\x1F])[\w!@#$%^&*()\-_=+{};:,<.>]{8,}$/'




logIn.addEventListener('submit', (e)=>{
    e.preventDefault();
    if(validateMail(logInMail.value)){
        console.log('correct mail!');

    }
    else{
        console.log("incorect mail");
    }

    console.log(logInPassword.value);
    if(validatePassword(logInPassword.value)){
        
        console.log('correct password!');
        logIn.submit();

    }
    else{
        console.log("incorect password");

    }
    logIn.submit();

    
})


signUp.addEventListener('submit', (e)=>{
    e.preventDefault();
    if(validateMail(signUpEmail.value) && 
        signUpEmail.value === signUpEmailConfirm.value &&
        // validatePassword(signUpPassword.value))
        true)
        
    {
        console.log('correct form!');
        signUp.submit()
    }
    else{
        console.log("incorect form");
    }

})



switch_log_ins.forEach(i =>{
    i.addEventListener('click', (e) =>{
        logInForms.forEach(j => j.classList.toggle('hidden'));
        logIn.reset();
        signUp.reset();
        // if()s
    })
})

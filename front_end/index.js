// Sign in && Sign up
const btn_signin = document.getElementById('btn_signin');
const btn_signup = document.getElementById('btn_signup');
const signin = document.getElementById('signin');
const signup = document.getElementById('signup');
// Loading Page Defoalt
signin.style.display = "block";
signup.style.display = "none";
btn_signup.classList.remove('active');
btn_signin.classList.add('active');

btn_signin.addEventListener('click', () => {
    console.log('btn_signin');
    signup.style.display = "none";
    signin.style.display = "block";
    btn_signup.classList.remove('active');
    btn_signin.classList.add('active');
});
btn_signup.addEventListener('click', () => {
    console.log('btn_signup');
    signin.style.display = "none";
    signup.style.display = "block";
    btn_signup.classList.add('active');
    btn_signin.classList.remove('active');
});
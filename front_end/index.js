// Sign in && Sign up
const btn_sign_in = document.getElementById('btn_sign_up');
const btn_sign_up = document.getElementById('btn_sign_in');
const signin = document.getElementById('signin');
const signup = document.getElementById('signup');
// Loading Page Defoalt
signin.style.display = "block";
signup.style.display = "none";
btn_sign_in.classList.remove('active');
btn_sign_up.classList.add('active');

btn_sign_in.addEventListener('click', () => {
    signup.style.display = "block";
    signin.style.display = "none";
    btn_sign_up.classList.remove('active');
    btn_sign_in.classList.add('active');
});
btn_sign_up.addEventListener('click', () => {
    signin.style.display = "block";
    signup.style.display = "none";
    btn_sign_in.classList.remove('active');
    btn_sign_up.classList.add('active');
});
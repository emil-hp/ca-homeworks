var button = document.getElementById('signUp');
button.setAttribute("data-target", "#myModal");
button.setAttribute("data-toggle", "modal");

console.log(button.dataset.target);
console.log(button.dataset.toggle);

var submitBtn = document.querySelector("#submitBtn");
submitBtn.addEventListener("click", saveUserInfo());

function saveUserInfo() {
    var name = document.querySelector("#name");
    var email = document.querySelector("#email");
    var password = document.querySelector("#password");
    var confPassword = document.querySelector("#confPassword");
    var userInfo = [
        "Username:" + name.value,
        "Email:" + email.value,
        "Password:" + password.value,
        "Confirm password:" + confPassword.value]
        console.log(userInfo);
}
if (onclick){
    windowsAlert;
    let email = _;
    let password =;
}



const serverCall = new HttpService ("mock");

const buttonElement = document.querySelector("button");

const nameinput = document.querySelector("name");
const loginInput = document.querySelector("#staticEmail2");
const passwordInput = document.querySelector("#inputPassword2");

buttonElement.addEventListener("click", (e) => {
    e.preventDefault();
    serverCall.postRequest("register", {
        name: nameinput.value,
        username: loginInput.value,
        password: passwordInput.value,
    })
})
const passField = document.querySelector(".form input[type = 'password']");

const toogleBtn = document.querySelector(".form .field i");

toogleBtn.onclick = () => {
  if (passField.type == "password") {
    passField.type = "text";
    toogleBtn.classList.add("active");
  } else {
    passField.type = "password";
    toogleBtn.classList.remove("active");
  }
};

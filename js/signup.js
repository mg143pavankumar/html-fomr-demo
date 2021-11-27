const form = document.querySelector(".signup form");
const continueBtn = form.querySelector(".button input");

// preventing form from loading on button clicked
form.onsubmit = (e) => {
  e.preventDefault();
};

continueBtn.onclick = () => {
  let xhr = new XMLHttpRequest(); // creating XML object
  xhr.open("POST", "php/signup.php", true);
  xhr.onload = () => {};

  xhr.send();
};

/* -------------------------------------------------------------------------------- */
/* ! Apertura e chiusura adminbar
/* -------------------------------------------------------------------------------- */
const adminMain = document.querySelector(".adminmain");
const openMenu = document.querySelector(".openmenu");
const logo = document.querySelector(".logo");
const arrow = document.querySelector(".adminmenu-arrow");
const menuNames = document.querySelectorAll(".menu-name");

openMenu.addEventListener("click", () => {
  adminMain.classList.toggle("adminmain--open");
  menuNames.forEach((menuName) => menuName.classList.toggle("menu-name--open"));
  logo.classList.toggle("logo--open");
  arrow.classList.toggle("rotate-arrow");
});

/* -------------------------------------------------------------------------------- */
/* ! Current Page
/* -------------------------------------------------------------------------------- */
const currentPage = window.location.pathname.split("/").pop();
const menuItems = document.querySelectorAll(".adminmenu li");

menuItems.forEach((item) => {
  const link = item.querySelector("a");
  if (link) {
    const href = link.getAttribute("href");
    if (href && href.split("/").pop() === currentPage) {
      item.classList.add("current-admin-menu");
    } else {
      item.classList.remove("current-admin-menu");
    }
  }
});

/* -------------------------------------------------------------------------------- */
/* ! Validazione form
/* -------------------------------------------------------------------------------- */
//First Name
let firstNameInput = document.getElementById("first-name-input");
let firstNameError = document.getElementById("first-name-error");
let emptyFirstNameError = document.getElementById("empty-first-name");
//Last name
let lastNameInput = document.getElementById("last-name-input");
let lastNameError = document.getElementById("last-name-error");
let emptyLastNameError = document.getElementById("empty-last-name");

//Email
let emailInput = document.getElementById("email");
let emailError = document.getElementById("email-error");
let emptyEmailError = document.getElementById("empty-email");
//Password
let passwordInput = document.getElementById("password");
let passwordError = document.getElementById("password-error");
let emptyPasswordError = document.getElementById("empty-password");
//Verify Password
let verifyPasswordInput = document.getElementById("verify-password");
let verifyPasswordError = document.getElementById("verify-password-error");
let emptyVerifyPasswordError = document.getElementById("empty-verify-password");
//Submit
let submitButton = document.getElementById("submit-button");
//Valid
let validClasses = document.getElementsByClassName("valid");
let invalidClasses = document.getElementsByClassName("error");
//Password Verification
const passwordVerify = (password) => {
  const regex =
    /^(?=.+[a-z])(?=.+[A-Z])(?=.+[0-9])(?=.+[\$\%\^\&\!@\#\*\(\)\+\=`~\?\>\<])/;
  return regex.test(password) && password.length >= 8;
};

//Text verification (if input contains only text)
const textVerify = (text) => {
  const regex = /^[a-zA-Z]{3,}$/;
  return regex.test(text);
};

//Email verification
const emailVerify = (input) => {
  const regex = /^[a-z0-9_]+@[a-z]{3,}\.[a-z\.]{3,}$/;
  return regex.test(input);
};
//For empty input - accepts(input,empty error for that input and other errors)
const emptyUpdate = (
  inputReference,
  emptyErrorReference,
  otherErrorReference
) => {
  if (!inputReference.value) {
    //input is null/empty
    emptyErrorReference.classList.remove("hide");
    otherErrorReference.classList.add("hide");
    inputReference.classList.add("error");
  } else {
    //input has some content
    emptyErrorReference.classList.add("hide");
  }
};
//For error styling and displaying error message
const errorUpdate = (inputReference, errorReference) => {
  errorReference.classList.remove("hide");
  inputReference.classList.remove("valid");
  inputReference.classList.add("error");
};
//For no errors
const validInput = (inputReference) => {
  inputReference.classList.remove("error");
  inputReference.classList.add("valid");
};
//First name
firstNameInput.addEventListener("input", () => {
  if (textVerify(firstNameInput.value)) {
    //If verification returns true
    firstNameError.classList.add("hide");
    validInput(firstNameInput);
  } else {
    //for false
    errorUpdate(firstNameInput, firstNameError);
    //empty checker
    emptyUpdate(firstNameInput, emptyFirstNameError, firstNameError);
  }
});
//Last name
lastNameInput.addEventListener("input", () => {
  if (textVerify(lastNameInput.value)) {
    lastNameError.classList.add("hide");
    validInput(lastNameInput);
  } else {
    errorUpdate(lastNameInput, lastNameError);
    emptyUpdate(lastNameInput, emptyLastNameError, lastNameError);
  }
});
//Email
emailInput.addEventListener("input", () => {
  if (emailVerify(emailInput.value)) {
    emailError.classList.add("hide");
    validInput(emailInput);
  } else {
    errorUpdate(emailInput, emailError);
    emptyUpdate(emailInput, emptyEmailError, emailError);
  }
});
//Password
passwordInput.addEventListener("input", () => {
  if (passwordVerify(passwordInput.value)) {
    passwordError.classList.add("hide");
    validInput(passwordInput);
  } else {
    errorUpdate(passwordInput, passwordError);
    emptyUpdate(passwordInput, emptyPasswordError, passwordError);
  }
});
//Verify password
verifyPasswordInput.addEventListener("input", () => {
  if (verifyPasswordInput.value === passwordInput.value) {
    verifyPasswordError.classList.add("hide");
    validInput(verifyPasswordInput);
  } else {
    errorUpdate(verifyPasswordInput, verifyPasswordError);
    emptyUpdate(passwordInput, emptyVerifyPasswordError, verifyPasswordError);
  }
});

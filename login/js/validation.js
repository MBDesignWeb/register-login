/* -------------------------------------------------------------------------------- */
/* ! Validazione form
/* -------------------------------------------------------------------------------- */
// Nome
// let firstNameInput = document.getElementById("first-name-input");
// let firstNameError = document.getElementById("first-name-error");
// let emptyFirstNameError = document.getElementById("empty-first-name");

// Cognome
// let lastNameInput = document.getElementById("last-name-input");
// let lastNameError = document.getElementById("last-name-error");
// let emptyLastNameError = document.getElementById("empty-last-name");

// Email
// let emailInput = document.getElementsByid("email");
// let emailError = document.getElementsByid("email-error");
// let emptyEmailError = document.getElementsByid("empty-email");

// Password
// let passwordInput = document.getElementsByid("password");
// let passwordError = document.getElementsByid("password-error");
// let emptyPasswordError = document.getElementsByid("empty-password");

// Conferma password
// let verifyPasswordInput = document.getElementById("verify-password");
// let verifyPasswordError = document.getElementById("verify-password-error");
// let emptyVerifyPasswordError = document.getElementById("empty-verify-password");

// Submit
// let submitButton = document.getElementById("submit-button");

// Valid & Error
// let validClasses = document.getElementsByClassName("valid");
// let invalidClasses = document.getElementsByClassName("error");

// Verifica correttezza Password
// const passwordVerify = (password) => {
//   const regex =
//     /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\$\%\^\&\!@\#\*\(\)\+\=`~\?\>\<]).{8,}$/;
//   return regex.test(password) && password.length >= 8;
// };

// Verifica contenuto testo (se input contiene solo testo)
// const textVerify = (text) => {
//   const regex = /^[a-zA-z]{3,}$/;
//   return regex.test(text);
// };

// Verifica correttezza email
// const emailVerify = (input) => {
//   const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
//   return regex.test(input);
// };

// Input Vuoto
// const emptyUpdate = (
//   inputReference,
//   emptyErrorReference,
//   otherErrorReference
// ) => {
//   if (!inputReference.value) {
//     // Input nullo o vuoto
//     emptyErrorReference.classList.remove("hide");
//     otherErrorReference.classList.add("hide");
//     inputReference.classList.add("error");
//   } else {
//     //input ha lo stesso contenuto
//     emptyErrorReference.classList.add("hide");
//   }
// };

// Messaggio di errore
// const errorUpdate = (inputReference, errorReference) => {
//   errorReference.classList.remove("hide");
//   inputReference.classList.remove("valid");
//   inputReference.classList.add("error");
// };

// Nessun errore
// const validInput = (inputReference) => {
//   inputReference.classList.remove("error");
//   inputReference.classList.add("valid");
// };

// Nome
// firstNameInput.addEventListener("input", () => {
//   if (textVerify(firstNameInput.value)) {
//     // Se la condizion è vera convalida
//     firstNameError.classList.add("hide");
//     validInput(firstNameInput);
//   } else {
//     // Se è falsa errore testo
//     errorUpdate(firstNameInput, firstNameError);
//     // Se è vuota errore vuota
//     emptyUpdate(firstNameInput, emptyFirstNameError, firstNameError);
//   }
// });

// Cognome
// lastNameInput.addEventListener("input", () => {
//   if (textVerify(lastNameInput.value)) {
//     lastNameError.classList.add("hide");
//     validInput(lastNameInput);
//   } else {
//     errorUpdate(lastNameInput, lastNameError);
//     emptyUpdate(lastNameInput, emptyLastNameError, lastNameError);
//   }
// });

// Email
// emailInput.addEventListener("input", () => {
//   if (emailVerify(emailInput.value)) {
//     emailError.classList.add("hide");
//     validInput(emailInput);
//   } else {
//     errorUpdate(emailInput, emailError);
//     emptyUpdate(emailInput, emptyEmailError, emailError);
//   }
// });

// Password
// passwordInput.addEventListener("input", () => {
//   if (passwordVerify(passwordInput.value)) {
//     passwordError.classList.add("hide");
//     validInput(passwordInput);
//   } else {
//     errorUpdate(passwordInput, passwordError);
//     emptyUpdate(passwordInput, emptyPasswordError, passwordError);
//   }
// });

// Verify Password
// verifyPasswordInput.addEventListener("input", () => {
//   if (verifyPasswordInput.value === passwordInput.value) {
//     verifyPasswordError.classList.add("hide");
//     validInput(verifyPasswordInput);
//   } else {
//     errorUpdate(verifyPasswordInput, verifyPasswordError);
//     emptyUpdate(
//       verifyPasswordInput,
//       emptyVerifyPasswordError,
//       verifyPasswordError
//     );
//   }
// });
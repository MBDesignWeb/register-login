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

// Carica il documento HTML prima di lanciare il
document.addEventListener("DOMContentLoaded", () => {
  /* -------------------------------------------------------------------------------- */
  /* ! Validazione form
  /* -------------------------------------------------------------------------------- */
  // Nome
  const firstNameInput = document.getElementById("first-name-input");
  const firstNameError = document.getElementById("first-name-error");
  const emptyFirstNameError = document.getElementById("empty-first-name");

  // Cognome
  const lastNameInput = document.getElementById("last-name-input");
  const lastNameError = document.getElementById("last-name-error");
  const emptyLastNameError = document.getElementById("empty-last-name");

  // Email
  const emailInput = document.getElementById("email");
  const emailError = document.getElementById("email-error");
  const emptyEmailError = document.getElementById("empty-email");

  // Password
  const passwordInput = document.getElementById("password");
  const passwordError = document.getElementById("password-error");
  const emptyPasswordError = document.getElementById("empty-password");

  // Conferma password
  const verifyPasswordInput = document.getElementById("verify-password");
  const verifyPasswordError = document.getElementById("verify-password-error");
  const emptyVerifyPasswordError = document.getElementById(
    "empty-verify-password"
  );

  // Submit
  const submitButton = document.getElementById("submit-button");

  // Verifica correttezza Password
  const passwordVerify = (password) => {
    // Funzione per verificare la correttezza della password
    const regex =
      /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\$\%\^\&\!@\#\*\(\)\+\=`~\?\>\<]).{8,}$/; // Regex per verificare la complessità della password
    return regex.test(password) && password.length >= 8; // Verifica se la password soddisfa i criteri di complessità
  };

  // Verifica contenuto testo (se input contiene solo testo)
  function textVerify(text) {
    // Funzione per verificare se il testo contiene solo caratteri alfabetici e ha almeno 3 caratteri di lunghezza
    const regex = /^[a-zA-Z]{3,}$/; // Regex per controllare che il testo contenga solo lettere e abbia almeno 3 caratteri di lunghezza
    return regex.test(text); // Verifica se il testo soddisfa i criteri
  }

  // Verifica correttezza email
  const emailVerify = (input) => {
    // Funzione per verificare la correttezza dell'email
    const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // Regex per verificare il formato dell'email
    return regex.test(input); // Verifica se l'email soddisfa il formato
  };

  // Input Vuoto
  const emptyUpdate = (
    inputReference,
    emptyErrorReference,
    otherErrorReference
  ) => {
    // Funzione per gestire gli errori di input vuoti
    if (!inputReference.value) {
      // Se l'input è vuoto
      emptyErrorReference.classList.remove("hide"); // Mostra l'errore per input vuoto
      otherErrorReference.classList.add("hide"); // Nasconde eventuali altri errori
      inputReference.classList.add("error"); // Aggiunge la classe "error" all'input
    } else {
      emptyErrorReference.classList.add("hide"); // Altrimenti, nasconde l'errore per input vuoto
    }
  };

  // Messaggio di errore
  const errorUpdate = (inputReference, errorReference) => {
    // Funzione per mostrare l'errore
    errorReference.classList.remove("hide"); // Rimuove la classe "hide" per mostrare l'errore
    inputReference.classList.remove("valid"); // Rimuove la classe "valid" dall'input
    inputReference.classList.add("error"); // Aggiunge la classe "error" all'input
  };

  // Nessun errore
  const validInput = (inputReference) => {
    // Funzione per indicare che non ci sono errori nell'input
    inputReference.classList.remove("error"); // Rimuove la classe "error" dall'input
    inputReference.classList.add("valid"); // Aggiunge la classe "valid" all'input
  };

  // Nome
  if (firstNameInput) {
    // Se l'elemento per il nome esiste
    firstNameInput.addEventListener("input", () => {
      // Aggiunge un ascoltatore per l'evento di input
      if (textVerify(firstNameInput.value)) {
        // Se il testo del nome è valido
        firstNameError.classList.add("hide"); // Nasconde l'errore del nome
        validInput(firstNameInput); // Segnala che l'input è valido
      } else {
        errorUpdate(firstNameInput, firstNameError); // Mostra l'errore per il nome
        emptyUpdate(firstNameInput, emptyFirstNameError, firstNameError); // Gestisce l'errore per nome vuoto
      }
    });
  }

  // Cognome
  if (lastNameInput) {
    lastNameInput.addEventListener("input", () => {
      if (textVerify(lastNameInput.value)) {
        lastNameError.classList.add("hide");
        validInput(lastNameInput);
      } else {
        errorUpdate(lastNameInput, lastNameError);
        emptyUpdate(lastNameInput, emptyLastNameError, lastNameError);
      }
    });
  }

  // Email
  if (emailInput) {
    emailInput.addEventListener("input", () => {
      if (emailVerify(emailInput.value)) {
        emailError.classList.add("hide");
        validInput(emailInput);
      } else {
        errorUpdate(emailInput, emailError);
        emptyUpdate(emailInput, emptyEmailError, emailError);
      }
    });
  }

  // Password
  if (passwordInput) {
    passwordInput.addEventListener("input", () => {
      if (passwordVerify(passwordInput.value)) {
        passwordError.classList.add("hide");
        validInput(passwordInput);
      } else {
        errorUpdate(passwordInput, passwordError);
        emptyUpdate(passwordInput, emptyPasswordError, passwordError);
      }
    });
  }

  // Verify Password
  if (verifyPasswordInput) {
    verifyPasswordInput.addEventListener("input", () => {
      if (verifyPasswordInput.value === passwordInput.value) {
        verifyPasswordError.classList.add("hide");
        validInput(verifyPasswordInput);
      } else {
        errorUpdate(verifyPasswordInput, verifyPasswordError);
        emptyUpdate(
          verifyPasswordInput,
          emptyVerifyPasswordError,
          verifyPasswordError
        );
      }
    });
  }
});

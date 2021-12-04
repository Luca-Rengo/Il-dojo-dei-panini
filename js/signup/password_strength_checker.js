
// Sto usando gli id perchè con le classi non mi andava.

let password = document.getElementById("password");

let statusLevel = document.getElementById("password-strength-status");

// TODO: aggiungere controlli su caratteri speciali, ecc..

password.addEventListener("input", () => {
    if(password.value.length > 0){
        statusLevel.style.display = "block";
    } else {
        statusLevel.style.display = "none";
    }

    if(password.value.length < 5){
        statusLevel.textContent = "La tua password è molto debole.";
        password.style.borderColor = "red";
        statusLevel.style.color = "red";
    } 
    else if(password.value.length >= 5 && password.value.length < 12){
        statusLevel.textContent = "La tua password è debole.";
        password.style.borderColor = "#e36c1c";
        statusLevel.style.color = "#e36c1c";
    }
    else if(password.value.length >= 12 && password.value.length < 20){
        statusLevel.textContent = "La tua password è buona.";
        password.style.borderColor = "#f0dc0f";
        statusLevel.style.color = "#f0dc0f";
    }
    else if(password.value.length >= 20){
        statusLevel.textContent = "La tua password è forte.";
        password.style.borderColor = "#15ea4a";
        statusLevel.style.color = "#15ea4a";
    }
})
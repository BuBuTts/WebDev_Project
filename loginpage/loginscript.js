// script.js
document.addEventListener("DOMContentLoaded", function() {
    var loginButton = document.getElementById("loginButton");
    if (loginButton) {
        loginButton.addEventListener("click", function() {
            // Redirect to the home page (home.html) if userdetail is true
            window.location.href = "../homepage/homepage.html";
        });
    }
});
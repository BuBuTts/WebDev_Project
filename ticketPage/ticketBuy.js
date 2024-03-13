
document.addEventListener("DOMContentLoaded", function() {
    var buyButton = document.querySelector("#buyButton");
    var cancelButton = document.querySelector("#cancelButton");

        
        // Hide buy and cancel buttons by default
    buyButton.style.display = "none";
    cancelButton.style.display = "none";


        // Event listener for tab change
    document.querySelectorAll('.account-settings-links a[data-toggle="list"]').forEach(function(tab) {
        tab.addEventListener('click', function(e) {
            if (tab.getAttribute('href') === "#booking-wallet") {
                buyButton.style.display = "none";
                cancelButton.style.display = "none";
                nextButton.style.display = 'none';
            }else if(tab.getAttribute('href')== '#booking-general'){
                buyButton.style.display = "none";
                cancelButton.style.display = "none";
            }else {
                buyButton.style.display = "inline-block"; // Or 'block' depending on your layout
                cancelButton.style.display = "inline-block"; // Or 'block' depending on your layout
            }
        });
    });
    });


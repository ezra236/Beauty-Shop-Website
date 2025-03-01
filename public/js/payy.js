document.addEventListener("DOMContentLoaded", function() {
    // Get URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    
    let image = urlParams.get("image");
    let title = urlParams.get("title");
    let price = urlParams.get("price");
    let quantity = urlParams.get("quantity");

    // Display the data
    if (image && title && price && quantity) {
        document.getElementById("display-image").src = decodeURIComponent(image);
        document.getElementById("display-title").innerText = decodeURIComponent(title);
        document.getElementById("display-price").innerText = "Total Price: " + decodeURIComponent(price);
        document.getElementById("display-quantity").innerText = "Quantity: " + decodeURIComponent(quantity);
    }
});

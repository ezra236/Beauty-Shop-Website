// Get stored payment details from localStorage
function getPaymentDetails() {
    const paymentDetails = JSON.parse(localStorage.getItem('paymentDetails')) || { items: [], totalPrice: '0.00' };
    return paymentDetails;
}

// Display the payment items and total price
function displayPaymentDetails() {
    const paymentDetails = getPaymentDetails();
    const itemsList = document.getElementById('itemsList');
    const totalPriceElement = document.getElementById('totalPrice');

    // Clear previous items
    itemsList.innerHTML = '';

    // Display each item in the cart
    paymentDetails.items.forEach(item => {
        const itemElement = document.createElement('div');
        itemElement.classList.add('item');
        itemElement.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <span>${item.name}</span>
            <span>${item.price}</span>
        `;
        itemsList.appendChild(itemElement);
    });

    // Display total price
    totalPriceElement.textContent = `Ksh${paymentDetails.totalPrice}`;
}

// Complete Payment - This can redirect to a success page or show a confirmation
document.getElementById('completePaymentButton').addEventListener('click', () => {
    alert("Payment Complete!");
    localStorage.removeItem('cartItems'); // Clear the cart after payment
    localStorage.removeItem('paymentDetails'); // Clear payment details
    window.location.href = 'thank_you.html'; // Redirect to a thank you page (create this page if necessary)
});

// Back to Cart - Go back to the cart page
document.getElementById('backButton').addEventListener('click', () => {
    window.location.href = 'cart.html'; // Go back to the cart page (create this page if necessary)
});

// Load and display payment details on page load
window.addEventListener('load', () => {
    displayPaymentDetails();
});

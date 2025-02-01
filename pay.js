function getQueryParams() {
    const params = new URLSearchParams(window.location.search);
    const items = [];
    let i = 1;

    // Loop through all the item parameters
    while (params.has(`item${i}_name`)) {
        const name = params.get(`item${i}_name`);
        const price = parseFloat(params.get(`item${i}_price`));
        const imageSrc = params.get(`item${i}_imageSrc`);
        items.push({ name, price, imageSrc });
        i++;
    }
    return items;
}

// Display the items and calculate the total price
function displayItems() {
    const items = getQueryParams();
    const orderItemsContainer = document.getElementById('orderItems');
    const totalPriceContainer = document.getElementById('totalPrice');
    let totalPrice = 0;

    // Clear previous items
    orderItemsContainer.innerHTML = '';

    // Display each item
    items.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('item');
        itemDiv.innerHTML = `
            <img src="${item.imageSrc}" alt="${item.name}">
            <div class="item-info">
                <h3>${item.name}</h3>
                <p>$${item.price.toFixed(2)}</p>
            </div>
        `;
        orderItemsContainer.appendChild(itemDiv);

        totalPrice += item.price;
    });

    // Display the total price
    totalPriceContainer.innerHTML = `Total: $${totalPrice.toFixed(2)}`;
}

// Proceed to payment (this can be linked to a payment gateway or form submission)
document.getElementById('checkoutButton').addEventListener('click', function() {
    alert('Proceeding to payment...');
    // You can redirect to an actual payment page or API here
});

// Initialize page content
displayItems();








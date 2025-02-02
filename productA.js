document.addEventListener("DOMContentLoaded", function () {
    let menuItems = document.querySelectorAll('.menu-item');
    let contentBlocks = document.querySelectorAll('.content-block');
    let activeBlock = null; // Track the currently visible block
    let mouseInsideBlock = false; // Track if the mouse is inside a block

    // Function to hide all blocks
    function hideAllBlocks() {
        if (!mouseInsideBlock) { // Only hide if the mouse is truly outside
            contentBlocks.forEach(block => {
                block.classList.remove('show');
                block.style.top = '-100%';
            });
            activeBlock = null; // Reset the active block
        }
    }

    // Function to show a specific block
    function showBlock(target) {
        let block = document.getElementById(target);
        if (block && block !== activeBlock) {
            contentBlocks.forEach(block => block.classList.remove('show')); // Hide others
            block.classList.add('show');
            block.style.top = '100px';
            activeBlock = block; // Update the active block
        }
    }

    // Event listeners for menu items
    menuItems.forEach(item => {
        const targetBlock = item.getAttribute('data-target');

        // Show block on hover
        item.addEventListener('mouseover', function () {
            showBlock(targetBlock);
        });

        // Hide blocks when the mouse leaves the menu item if it's not over a block
        item.addEventListener('mouseleave', function (event) {
            if (!activeBlock || !activeBlock.contains(event.relatedTarget)) {
                hideAllBlocks();
            }
        });
    });

    // Event listeners for content blocks
    contentBlocks.forEach(block => {
        // Mark when the mouse enters the block
        block.addEventListener('mouseenter', function () {
            mouseInsideBlock = true; // Mouse is inside the block
        });

        // Detect when the mouse leaves the block
        block.addEventListener('mouseleave', function (event) {
            mouseInsideBlock = false; // Mouse has left the block
            if (!menuItems.some(item => item.contains(event.relatedTarget))) {
                hideAllBlocks(); // Hide only if not moving to a menu item
            }
        });
    });

    // Fallback global event to ensure blocks hide if needed
    document.addEventListener('mousemove', function (event) {
        if (!activeBlock) return; // Skip if no active block
        const insideBlock = activeBlock.contains(event.target);
        const insideMenu = Array.from(menuItems).some(item => item.contains(event.target));
        if (!insideBlock && !insideMenu) {
            hideAllBlocks();
        }
    });
});




document.addEventListener("DOMContentLoaded", function () {
    // Toggle content blocks based on menu items
    document.querySelectorAll('.menu-items').forEach(item => {
        item.addEventListener('click', function() {
            const targetBlock = document.getElementById(item.getAttribute('data-target'));
            
            // Hide all content blocks first
            document.querySelectorAll('.content-block').forEach(block => {
                block.classList.remove('show');
            });

            // Show the clicked block
            targetBlock.classList.add('show');
            
            // Hide the content part in the clicked block and show only the sidebar
            targetBlock.querySelector('.contentr').style.display = 'none';
            targetBlock.querySelector('.sidebar').style.display = 'block';
        });
    });

    // Close button functionality to hide all content blocks
    const closeButton = document.querySelector('.close-btn'); // Select the close button

    closeButton.addEventListener('click', function() {
        // Hide all content blocks when the 'X' button is clicked
        document.querySelectorAll('.content-block').forEach(block => {
            block.classList.remove('show');
        });
    });
});





document.addEventListener("DOMContentLoaded", function () {
    const dashboardToggle = document.getElementById("dashboard-toggle");
    const mobileMenu = document.getElementById("mobile-menu");
    const backButton = document.querySelector(".back-btn"); // Select the back button

    // Toggle menu visibility
    dashboardToggle.addEventListener("click", function () {
        if (mobileMenu.classList.contains("show")) {
            mobileMenu.classList.remove("show");
        } else {
            mobileMenu.classList.add("show");
        }
    });

    // Close the menu when clicking outside
    document.addEventListener("click", function (event) {
        if (!mobileMenu.contains(event.target) && event.target !== dashboardToggle) {
            mobileMenu.classList.remove("show");
        }
    });

    // Close the menu when the back button is clicked
    backButton.addEventListener("click", function () {
        mobileMenu.classList.remove("show");
    });
});







    const classicScroll = document.getElementById('classicScroll');
    const leftBtn = document.getElementById('leftBtn');
    const rightBtn = document.getElementById('rightBtn');
    
    const scrollAmount = 200;  // Adjust scroll amount here
    
    leftBtn.addEventListener('click', function() {
        classicScroll.scrollLeft -= scrollAmount;  // Scroll left by the set amount
    });
    
    rightBtn.addEventListener('click', function() {
        classicScroll.scrollLeft += scrollAmount;  // Scroll right by the set amount
    });


  


    const items = document.querySelectorAll('.classic-item img');

    items.forEach(item => {
        const originalSrc = item.src;
        const hoverSrc = item.getAttribute('data-hover');
        
        item.addEventListener('mouseenter', () => {
            item.src = hoverSrc;
        });
    
        item.addEventListener('mouseleave', () => {
            item.src = originalSrc;
        });
    });

    



const carouselTrack = document.getElementById('carouselTrack');
const scrollLeftBtn = document.getElementById('scrollLeftBtn');
const scrollRightBtn = document.getElementById('scrollRightBtn');

const scrollStep = 200; // Adjust scroll step here

scrollLeftBtn.addEventListener('click', function () {
    carouselTrack.scrollLeft -= scrollStep; // Scroll left
});

scrollRightBtn.addEventListener('click', function () {
    carouselTrack.scrollLeft += scrollStep; // Scroll right
});

// Update hover image functionality
const hoverImages = {
    carouselItem1: { original: 'purp.jpg', hover: 'ap.jpg' },
    carouselItem2: { original: 't4.jpg', hover: 'b11.jpg' },
    carouselItem3: { original: 't10.jpg', hover: 'lip2.jpg' },
    carouselItem4: { original: 't1w.jpg', hover: 'ap2.jpg' },
    carouselItem5: { original: 'drop.jpg', hover: 'ap3.jpg' },
    carouselItem6: { original: 'lip.jpg', hover: 'ap1.jpg' },
    carouselItem7: { original: 'bm3.jpg', hover: 'lips.jpg' },
    carouselItem8: { original: 'g.jpg', hover: 'ap3.jpg' }
};

function updateImage(itemId, newSrc) {
    const image = document.getElementById(itemId);
    image.classList.add('fade-out');
    setTimeout(() => {
        image.src = newSrc;
        image.classList.remove('fade-out');
    }, 100);
}

document.querySelectorAll('.carousel-item img').forEach(image => {
    const itemId = image.id;

    image.addEventListener('mouseenter', () => {
        updateImage(itemId, hoverImages[itemId].hover);
    });

    image.addEventListener('mouseleave', () => {
        updateImage(itemId, hoverImages[itemId].original);
    });
});





// Function to show the Block Pay div with the item details
function showBlockPay(name, price, imageSrc) {
    // Set the content inside blockPay
    document.getElementById('blockName').textContent = name;
    document.getElementById('blockPrice').textContent = price;
    document.getElementById('blockImage').src = imageSrc;

    // Show the blockPay by moving it to the right
    document.getElementById('blockPay').style.right = '0';
}

// Close the Block Pay div when the close button is clicked
document.getElementById('closeBlockPay').addEventListener('click', function() {
    document.getElementById('blockPay').style.right = '-150%';
});

// Attach the event listeners to all Quick Shop buttons
const quickShopButtons = document.querySelectorAll('.ezra-button');

quickShopButtons.forEach(button => {
    button.addEventListener('click', function() {
        // Find the closest parent item (either classic-item or carousel-item)
        const item = button.closest('.classic-item') || button.closest('.carousel-item');
        
        // Get the details from the item
        const name = item.querySelector('h3').textContent; // Product name (h3)
        const price = item.querySelector('.price, .product-price').textContent; // Price (price or product-price)
        const image = item.querySelector('img').src; // Image source (img)

        // Call the function to display the details in the sliding panel
        showBlockPay(name, price, image);
    });
});






// Function to show the Block Pay div with the item details
function showBlockPay(name, price, imageSrc) {
    document.getElementById('blockName').textContent = name;
    document.getElementById('blockPrice').textContent = price;
    document.getElementById('blockImage').src = imageSrc;

    document.getElementById('blockPay').style.right = '0';
}

// Close the Block Pay div
document.getElementById('closeBlockPay').addEventListener('click', function () {
    document.getElementById('blockPay').style.right = '-150%';
});

// Show the Block Check div
function showBlockCheck() {
    document.getElementById('blockCheck').style.right = '0';
}

// Close the Block Check div
document.getElementById('closeBlockCheck').addEventListener('click', function () {
    document.getElementById('blockCheck').style.right = '-150%';
});

// Add item to bag and store locally
document.getElementById('addToBag').addEventListener('click', function () {
    const name = document.getElementById('blockName').textContent;
    const priceText = document.getElementById('blockPrice').textContent;
    const imageSrc = document.getElementById('blockImage').src;

    // Ensure price is a valid number, strip any non-numeric characters
    const price = parseFloat(priceText.replace(/[^0-9.-]+/g, "")) || 0; // Default to 0 if parsing fails

    // Generate a unique ID for the item
    const itemId = Date.now();

    // Store item details locally
    const item = { id: itemId, name, price, imageSrc };
    const bagItems = JSON.parse(localStorage.getItem('bagItems')) || [];
    bagItems.push(item);
    localStorage.setItem('bagItems', JSON.stringify(bagItems));

    // Display the Block Check
    showBlockCheck();
    displayBagItems();
});

// Display bag items in Block Check
function displayBagItems() {
    const bagItems = JSON.parse(localStorage.getItem('bagItems')) || [];
    const bagItemsContainer = document.getElementById('bagItems');
    bagItemsContainer.innerHTML = '';

    // Calculate total price
    let totalPrice = 0;
    bagItems.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('bag-item');
        itemDiv.innerHTML = `
            <img src="${item.imageSrc}" alt="${item.name}">
            <div>
                <h4>${item.name}</h4>
                <p>$${item.price.toFixed(2)}</p> <!-- Ensure correct price format -->
            </div>
            <button class="removeItem" data-id="${item.id}">Remove</button>
        `;
        bagItemsContainer.appendChild(itemDiv);

        // Add to total price
        totalPrice += item.price;
    });

    // Display total price
    const totalDiv = document.createElement('div');
    totalDiv.classList.add('total-price');
    totalDiv.innerHTML = `<h4>Total: $${totalPrice.toFixed(2)}</h4>`; // Ensure correct total format
    bagItemsContainer.appendChild(totalDiv);

    // Attach event listeners to Remove buttons
    document.querySelectorAll('.removeItem').forEach(button => {
        button.addEventListener('click', function () {
            const itemId = parseInt(this.dataset.id);
            removeBagItem(itemId);
        });
    });
}

// Remove item from bag and update the UI
function removeBagItem(itemId) {
    let bagItems = JSON.parse(localStorage.getItem('bagItems')) || [];
    bagItems = bagItems.filter(item => item.id !== itemId);
    localStorage.setItem('bagItems', JSON.stringify(bagItems));
    displayBagItems();
}

// Event listener for the Checkout button
document.getElementById('checkoutButton').addEventListener('click', function () {
    // Get all items in the bag from localStorage
    const bagItems = JSON.parse(localStorage.getItem('bagItems')) || [];

    // Prepare the URL for pay.html and pass the item details as query parameters
    const itemDetails = bagItems.map((item, index) => {
        return `item${index + 1}_name=${encodeURIComponent(item.name)}&item${index + 1}_price=${encodeURIComponent(item.price)}&item${index + 1}_imageSrc=${encodeURIComponent(item.imageSrc)}`;
    }).join('&');

    // Redirect to pay.html with the item details
    window.location.href = `pay.html?${itemDetails}`;
});

// Attach event listeners to Quick Shop buttons
document.querySelectorAll('.ezra-button').forEach(button => {
    button.addEventListener('click', function () {
        const item = button.closest('.classic-item') || button.closest('.carousel-item');
        const name = item.querySelector('h3').textContent;
        const price = item.querySelector('.price, .product-price').textContent;
        const image = item.querySelector('img').src;

        showBlockPay(name, price, image);
    });
});

// Initialize bag items on page load
document.addEventListener('DOMContentLoaded', displayBagItems);








// Event listener for the nav-icon (icon1)
document.getElementById('icon1').addEventListener('click', showBlockCheck);



// Event listener to show Block Check when the nav-icon3 is clicked
document.getElementById('icon2').addEventListener('click', showBlockCheck);





const reviewButton = document.querySelector('.review-buttont');
    const reviewBlock = document.getElementById('review-block');
    const closeBtn = document.getElementById('close-btnr');

    reviewButton.addEventListener('click', () => {
      reviewBlock.classList.add('open');
    });

    closeBtn.addEventListener('click', () => {
      reviewBlock.classList.remove('open');
    });




// Open the block
document.getElementById('signInLink').addEventListener('click', function (e) {
    e.preventDefault(); // Prevent default anchor behavior
    const signInBlock = document.getElementById('signInBlock');
    signInBlock.classList.add('active'); // Add the "active" class
});


// Close the block
document.getElementById('closeBtns').addEventListener('click', function () {
    const signInBlock = document.getElementById('signInBlock');
    signInBlock.classList.remove('active'); // Remove the "active" class
});




function changeImage(imagePath) {
    const mainImage = document.getElementById('main-image');
    
    // Add the fade-in class to trigger the animation
    mainImage.classList.remove('fade-in');
    void mainImage.offsetWidth; // Trigger reflow to restart the animation
    mainImage.src = imagePath; // Update the source of the main image
    mainImage.classList.add('fade-in');
}

// Adding event listeners for mobile and desktop
const scrollItems = document.querySelectorAll('.scroll-items');
scrollItems.forEach(item => {
    item.addEventListener('click', () => {
        const imagePath = item.getAttribute('data-image');
        changeImage(imagePath);
    });
});








document.querySelector(".add-to-cart-btn").addEventListener("click", function (event) {
    event.preventDefault(); // Prevent default behavior
    let prodBlock = document.querySelector(".prod-block");
    prodBlock.classList.remove("hide"); // Ensure it's not in hiding mode
    prodBlock.style.visibility = "visible"; // Make it interactive
    prodBlock.classList.add("show"); // Animate opening
});

document.querySelector(".close-btnrt").addEventListener("click", function () {
    let prodBlock = document.querySelector(".prod-block");
    prodBlock.classList.remove("show");
    prodBlock.classList.add("hide"); // Start closing animation

});





function increaseQuantity() {
    let quantityElement = document.getElementById("quantity");
    let quantity = parseInt(quantityElement.textContent);
    quantityElement.textContent = quantity + 1;
}
function decreaseQuantity() {
    let quantityElement = document.getElementById("quantity");
    let quantity = parseInt(quantityElement.textContent);
    if (quantity > 1) {
        quantityElement.textContent = quantity - 1;
    }
}





function buyNow() {
    let imageSrc = document.getElementById("product-image").src;
    let title = document.getElementById("product-title").innerText;
    let price = document.getElementById("product-price").innerText.replace("KSh ", "");
    let quantity = parseInt(document.getElementById("quantity").innerText);
    let totalPrice = parseInt(price) * quantity;

    // Create URL with query string parameters
    let url = new URL("pay2.html", window.location.href);
    url.searchParams.append("image", encodeURIComponent(imageSrc));
    url.searchParams.append("title", encodeURIComponent(title));
    url.searchParams.append("price", encodeURIComponent("KSh " + totalPrice));
    url.searchParams.append("quantity", encodeURIComponent(quantity));

    // Redirect to pay2.html with parameters in URL
    window.location.href = url;
}
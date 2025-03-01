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





document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.menu-items');
  
    menuItems.forEach(item => {
      item.addEventListener('click', function() {
        // Toggle the "expanded" class on click
        this.classList.toggle('expanded');
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







// Get all dots and promo containers
const dots = document.querySelectorAll('.dot');
const promoContainers = document.querySelectorAll('.promo-container');
const scrollContainer = document.querySelector('.scroll-container');

// Function to handle dot click and scroll to corresponding promo container
dots.forEach(dot => {
    dot.addEventListener('click', () => {
        const index = dot.getAttribute('data-index');
        const targetPosition = promoContainers[index].offsetLeft;
        scrollContainer.scrollTo({
            left: targetPosition,
            behavior: 'smooth'
        });

        // Set active class on clicked dot
        dots.forEach(d => d.classList.remove('active'));
        dot.classList.add('active');
    });
});

// Function to update the active dot as user scrolls through the containers
scrollContainer.addEventListener('scroll', () => {
    let index = Math.round(scrollContainer.scrollLeft / window.innerWidth);
    dots.forEach(d => d.classList.remove('active'));
    if (dots[index]) {
        dots[index].classList.add('active');
    }
});



const box1 = document.getElementById('box1');
const box2 = document.getElementById('box2');
const box3 = document.getElementById('box3');
const box4 = document.getElementById('box4');
const monica = document.getElementById('monica');

let lastClickedBox = null; // Track the last clicked box

// Function to update Monica content
function updateMonicaContent(headerText, paragraphText, buttonLink) {
    monica.innerHTML = `
      <h1>${headerText}</h1>
      <p>${paragraphText}</p>
      <button class="shop1" onclick="window.location.href='${buttonLink}'">Shop Now</button>
    `;
  }
  
  // Update each box with a unique link
  function toggleBox(clickedBox) {
    if (clickedBox === lastClickedBox) {
      const boxes = [box1, box2, box3, box4];
      const currentIndex = boxes.indexOf(clickedBox);
      const nextBox = boxes[(currentIndex + 1) % boxes.length];
      toggleBox(nextBox);
      return;
    }
  
    clickedBox.classList.add('clicked');
  
    [box1, box2, box3, box4].forEach(box => {
      if (box !== clickedBox) {
        box.classList.remove('clicked');
      }
    });
  
    if (clickedBox.classList.contains('clicked')) {
      monica.style.display = 'block';
      if (clickedBox === box1) {
        monica.style.left = '5%';
        updateMonicaContent('YOUR WINNING ROUTINE', 'Whether you got dry, oil or combo skin', 'lipG.html');
      } else if (clickedBox === box2) {
        monica.style.left = '21%';
        updateMonicaContent('ALWAYS BETTER TOGETHER', 'Its legendary lipcare', 'Shampoo.php');
      } else if (clickedBox === box3) {
        monica.style.left = '38%';
        updateMonicaContent('HAIR FOR THE HYDRATION', 'Secure Our reparative lineup', 'body.html');
      } else if (clickedBox === box4) {
        monica.style.left = '55%';
        updateMonicaContent('BOLD SCENT YOU WONT FORGET', 'Step out in Ckay spicy', 'All-products.html');
      }
    }
  
    lastClickedBox = clickedBox;
  }
  
  // Load default content on page load
  window.addEventListener('load', () => {
    box1.classList.add('clicked');
    monica.style.display = 'block';
    monica.style.left = '5%';
    updateMonicaContent('YOUR WINNING ROUTINE', 'Whether you got dry, oil or combo skin', 'lipG.html');
    lastClickedBox = box1;
  });
  

// Add event listeners for the boxes
box1.addEventListener('click', function() {
  toggleBox(box1);
});

box2.addEventListener('click', function() {
  toggleBox(box2);
});

box3.addEventListener('click', function() {
  toggleBox(box3);
});

box4.addEventListener('click', function() {
  toggleBox(box4);
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
    
    
    

    const exceptional = document.getElementById('exceptional');
    const leftArrow = document.getElementById('leftArrow');
    const rightArrow = document.getElementById('rightArrow');
    const items = exceptional.children;
    const totalItems = items.length;
    
    let currentIndex = 0;
    
    // Function to update the scroll position
    function updateScroll() {
      const offset = -currentIndex * 80; // Calculate the offset for scrolling
      exceptional.style.transform = `translateX(${offset}%)`;
    }
    
    // Event listener for the left arrow
    leftArrow.addEventListener('click', () => {
      if (currentIndex > 0) { // Allow scroll only if there is something to scroll back to
        currentIndex--;
        updateScroll();
      }
    });
    
    // Event listener for the right arrow
    rightArrow.addEventListener('click', () => {
      if (currentIndex === 0) { // Allow scroll only once to the right
        currentIndex++;
        updateScroll();
      }
    });
    
    // Add event listeners to unmute/play the video on hover
    Array.from(items).forEach(item => {
      const video = item.querySelector('video');
    
      item.addEventListener('mouseover', () => {
        video.muted = false; // Unmute the video
        video.play(); // Ensure the video plays on hover
      });
    
      item.addEventListener('mouseout', () => {
        video.muted = true; // Mute the video back
        video.pause(); // Pause the video when the mouse leaves
      });
    });
    



// Store the original and hover image sources in an object
const imageSources = {
    item1: { original: 'b7.jpg', hover: 'ap.jpg' },
    item2: { original: 'drop.jpg', hover: 'b11.jpg' }, // Adjust hover image path as needed
    item3: { original: 'lip.jpg', hover: 'lip2.jpg' }, // Adjust hover image path as needed
    item4: { original: 'bm3.jpg', hover: 'ap2.jpg' }, // Adjust hover image path as needed
    item5: { original: 'g.jpg', hover: 'ap3.jpg' }, // Adjust hover image path as needed
    item6: { original: 'b20.jpg', hover: 'ap1.jpg' }, // Adjust hover image path as needed
    item7: { original: 'bm1.jpg', hover: 'lips.jpg' }, // Adjust hover image path as needed
    item8: { original: 'skinca.jpg', hover: 'ap3.jpg' } // Adjust hover image path as needed
};

// Function to change the image source after fading out
function changeImage(itemId, newSrc) {
    const itemImage = document.getElementById(itemId);
    
    // Fade out the image
    itemImage.classList.add('fade-out');
    
    // Wait for the fade-out transition to finish before changing the image
    setTimeout(function() {
        itemImage.src = newSrc; // Change the image source
        itemImage.classList.remove('fade-out'); // Fade in the new image
    }, 100); // Matches the transition duration
}

// Add event listeners for hover effect on each item image
document.querySelectorAll('.classic-item img').forEach(itemImage => {
    const itemId = itemImage.id;

    // Mouse enter event to change to hover image
    itemImage.addEventListener('mouseenter', function() {
        changeImage(itemId, imageSources[itemId].hover);  // Change to hover image
    });

    // Mouse leave event to revert to original image
    itemImage.addEventListener('mouseleave', function() {
        changeImage(itemId, imageSources[itemId].original);  // Revert to original image
    });
});




document.addEventListener('DOMContentLoaded', () => {
    const mobileExceptionalItems = document.querySelectorAll('.mobile-exceptional-item');

    mobileExceptionalItems.forEach(item => {
        const video = item.querySelector('video');

        // Play and unmute video on hover
        item.addEventListener('mouseover', () => {
            video.muted = false; // Unmute the video
            video.play();        // Play the video
        });

        // Pause and mute video when mouse leaves
        item.addEventListener('mouseout', () => {
            video.muted = true;  // Mute the video
            video.pause();       // Pause the video
        });

        // Toggle play/pause on click
        item.addEventListener('click', () => {
            if (video.paused) {
                video.muted = false; // Unmute when playing
                video.play();
            } else {
                video.muted = true; // Mute when paused
                video.pause();
            }
        });
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
    document.getElementById('blockPay').style.right = '-100%';
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




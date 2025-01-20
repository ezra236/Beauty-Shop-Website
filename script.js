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
function updateMonicaContent(headerText, paragraphText) {
  monica.innerHTML = `
    <h1>${headerText}</h1>
    <p>${paragraphText}</p>
    <button class="shop1">Shop Now</button>
  `;
}

// Function to toggle the clicked state
function toggleBox(clickedBox) {
  if (clickedBox === lastClickedBox) {
    // Determine the next or previous box to display
    const boxes = [box1, box2, box3, box4];
    const currentIndex = boxes.indexOf(clickedBox);
    const nextBox = boxes[(currentIndex + 1) % boxes.length];
    toggleBox(nextBox); // Automatically activate the next box
    return;
  }

  // Toggle the clicked class on the clicked box
  clickedBox.classList.add('clicked');

  // Remove 'clicked' class from all other boxes
  [box1, box2, box3, box4].forEach(box => {
    if (box !== clickedBox) {
      box.classList.remove('clicked');
    }
  });

  // Update the position of the Monica element based on the clicked box
  if (clickedBox.classList.contains('clicked')) {
    monica.style.display = 'block';
    if (clickedBox === box1) {
      monica.style.left = '5%';
      updateMonicaContent('YOUR WIINING ROUTINE', 'Whether you got dry, oil or combo skin');
    } else if (clickedBox === box2) {
      monica.style.left = '21%';
      updateMonicaContent('ALWAYS BETTER TOGETHER', 'Its legendary lipcare');
    } else if (clickedBox === box3) {
      monica.style.left = '38%';
      updateMonicaContent('HAIR FOR THE HYDRATION', 'Secure Our reparative lineup');
    } else if (clickedBox === box4) {
      monica.style.left = '55%';
      updateMonicaContent('BOLD SCENT YOU WONT FORGET', 'Step out in Ckay spicy');
    }
  }

  // Update the last clicked box
  lastClickedBox = clickedBox;
}

// Add the 'clicked' class to box1 when the page loads
window.addEventListener('load', () => {
  box1.classList.add('clicked');
  monica.style.display = 'block';
  monica.style.left = '5%';
  updateMonicaContent('YOUR WIINING ROUTINE', 'Whether you got dry, oil or combo skin');
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




const buttons = document.querySelectorAll('.ezra-button');
    const blockPay = document.getElementById('blockPay');
    const payImage = document.getElementById('payImage');
    const payName = document.getElementById('payName');
    const payPrice = document.getElementById('payPrice');
    const closePay = document.getElementById('closePay');

    // Add click event listeners to all buttons
    buttons.forEach(button => {
        button.addEventListener('click', (e) => {
            // Get the parent classic-item container
            const item = button.closest('.classic-item');

            // Get the details of the clicked item
            const imageSrc = item.querySelector('img').src;
            const name = item.querySelector('h3').innerText;
            const price = item.querySelector('.price').innerText;

            // Update block pay with the item's details
            payImage.src = imageSrc;
            payName.textContent = name;
            payPrice.textContent = price;

            // Show block pay with a transition
            blockPay.classList.add('active');
        });
    });

    // Add click event listener to close button
    closePay.addEventListener('click', () => {
        blockPay.classList.remove('active');
    });
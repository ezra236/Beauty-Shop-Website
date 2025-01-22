 // Get the URL query parameters
 const urlParams = new URLSearchParams(window.location.search);
        
 // Function to display the item details
 function displayItems() {
     const paymentDetailsContainer = document.getElementById('paymentDetails');
     let itemsHTML = '';

     // Loop through all query parameters
     urlParams.forEach((value, key) => {
         if (key.startsWith('name')) {
             const index = key.replace('name', '');
             const name = decodeURIComponent(value);
             const price = decodeURIComponent(urlParams.get(`price${index}`));
             const imageSrc = decodeURIComponent(urlParams.get(`imageSrc${index}`));

             itemsHTML += `
                 <div class="item">
                     <img src="${imageSrc}" alt="${name}">
                     <h4>${name}</h4>
                     <p>Price: $${price}</p>
                 </div>
             `;
         }
     });

     paymentDetailsContainer.innerHTML = itemsHTML;
 }

 // Display the items when the page loads
 displayItems();
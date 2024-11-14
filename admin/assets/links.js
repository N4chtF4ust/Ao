
function redirect(a){
    fetch('../assets/links.json')

    
    .then(response => {
        // Check if the response is okay (status 200-299)
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json(); // Parse the response body as JSON
    })
    .then(data => {
        // Access the path from the JSON data

    
        Array(data).forEach(element => {
            const navElement = document.querySelector('nav');

            // Get all child div elements inside the nav
            const allChildDivs = Array.from(navElement.children); // Convert HTMLCollection to Array
            
            // Find the index of the clicked element
            const index = allChildDivs.indexOf(a);
            
            console.log(data[`path${index}`]);
            
       

            window.location.href = data[`path${index}`];
            
        
        
            
        });
 
    })
    

}

function redirect(path){
    fetch('../assets/links.json')

    
    .then(response => {
        // Check if the response is okay 
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
            const allChildDivs = Array.from(navElement.children); 
            
            // Find the index of the clicked element
            const index = allChildDivs.indexOf(path);

            console.log('index of child ='+ index);
            
            console.log('The path is: '+ data[`path${index}`]);
            ``
            window.location.href = data[`path${index}`];
            
            
        });
 
    })
    

 
    

}



dragElement(document.getElementById("draggable"));

function dragElement(elmnt) {
    var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  
    // Check if the header is defined, otherwise, use the whole element for dragging
    var header = document.getElementById(elmnt.id + "header");
    if (header) {
      header.onmousedown = dragMouseDown;
    } else {
      elmnt.onmousedown = dragMouseDown;
    }
  
    function dragMouseDown(e) {
      e = e || window.event;
    
  
      // Get the current mouse position at the start of dragging
      pos3 = e.clientX;
      pos4 = e.clientY;
  
      // Attach mousemove and mouseup events to document to track movement
      document.onmouseup = closeDragElement;
      document.onmousemove = elementDrag;
    }
  
    function elementDrag(e) {
      e = e || window.event;
      e.preventDefault(); // Prevent default action (e.g., text selection)
  
      // Calculate how far the mouse has moved since the last event
      pos1 = pos3 - e.clientX;
      pos2 = pos4 - e.clientY;
  
      // Update the mouse position for the next move
      pos3 = e.clientX;
      pos4 = e.clientY;
  
      // Set the new position of the element, ensuring it's relative to the document
      elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
      elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
    }
  
    function closeDragElement() {
      // Remove event listeners after mouseup
      document.onmouseup = null;
      document.onmousemove = null;
    }
  }

 






  


  
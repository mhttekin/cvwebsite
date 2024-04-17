
document.addEventListener('DOMContentLoaded', function() {
  console.log("DOM fully loaded and parsed");

  const clearButton = document.getElementById('clearb');
    if (clearButton) {
    clearButton.addEventListener('click', function(event) {
      event.preventDefault();
      console.log("Clear button clicked");
      const confirmClear = confirm('Are you sure you want to clear everything?');
      if (confirmClear) {
        
        document.getElementById('title').value = ''; 
        document.getElementById('big1').value = ''; 
      }
    });
  }
});


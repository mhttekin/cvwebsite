
document.addEventListener('DOMContentLoaded', function() {
  console.log("DOM fully loaded and parsed");

  const addButton = document.getElementById('addBtn');
  if (addButton) {
    addButton.addEventListener('click', function() {
      console.log("Add button clicked");
      window.location.href = '/php/addEntry.php'; 
    });
  }

  const logoffButton = document.getElementById('logoff');
  if (logoffButton) {
    logoffButton.addEventListener('click', function() {
      console.log("Logoff button clicked");
      window.location.href = '/php/logoff.php';
    });
  }

  const clearButton = document.getElementById('clearb');
  if (clearButton) {
    clearButton.addEventListener('click', function(event) {
      event.preventDefault();
      console.log("Clear button clicked");
      const confirmClear = confirm('Are you sure you want to clear everything?');
      if (confirmClear) {
        console.log("Clearing inputs");
        document.getElementById('title').value = '';
        document.getElementById('big1').value = '';
      }
    });
  } else {
    console.log("Clear button not found");
  }
});


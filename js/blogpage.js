document.addEventListener('DOMContentLoaded', function() {
   
  const addButton = document.getElementById('addBtn');
  if (addButton) {
    addButton.addEventListener('click', function() {
          window.location.href = '/php/addEntry.php'; // Change to your actual path
    });
  }

  const logoffButton = document.getElementById('logoff');
  if (logoffButton) {
      logoffButton.addEventListener('click', function() {
          window.location.href = '/php/logoff.php'; // Change to your actual path
      });
  }
});

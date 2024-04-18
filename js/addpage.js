
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('form1');
  const title = document.getElementById('title');
  const content = document.getElementById('big1');

  form.addEventListener('submit', function(event) {
    let formValid = true;
    if(title.value.trim() === '') {
      title.classList.add('hiya');
      formValid = false;
    } else {
      titleInput.classList.remove('hiya');
    }
    if(content.value.trim() === '') {
      content.classList.add('hiya');
      formValid = false;
    } else {
      content.classList.remove('hiya');
    }
    if(!formValid) {
      event.preventDefault();
      alert('Fill the highlighted areas.');
    }

  });

  const clearB = document.getElementById('clearb');
    if (clearB) {
    clearB.addEventListener('click', function(event) {
      event.preventDefault();
      const confirmClear = confirm('Are you sure you want to clear everything?');
      if (confirmClear) {
        title.value = '';
        content.value = '';
        title.classList.remove('hiya');
        content.classList.remove('hiya');
      }
    });
  }
});



document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('form1');
  const title = document.getElementById('title');
  const content = document.getElementById('big1');
  const inputs = [title, content];
  
  function valInp() {
    let allCool = true;
    inputs.forEach(input => {
      if(!input.value.trim()) {
        console.log("adding");
        input.classList.add('hiya');
        allCool = false;
      } else {
        input.classList.remove('hiya');
      }
    });
    return allCool;
  }
  form.addEventListener('submit', function(event){
    if(!valInp()) {
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
        inputs.forEach(input => {
          input.value = '';
          input.classList.remove('hiya');
        });
      }
    });
  }
  inputs.forEach(input => {
    input.addEventListener('input', function(){
      if(input.value.trim()) {
        input.classList.remove('hiya');
      }
    });
  });
});


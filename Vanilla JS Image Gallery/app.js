const current = document.getElementById('current');
const imgs = document.querySelectorAll('.imgs img');
const opacity = 0.6;

//Set first image opacity
// imgs[0].style.opacity = opactiy;


imgs.forEach(img => 
  img.addEventListener('click', imgClick));

  function imgClick(e) {
    
    //Reset opacity of all images
    imgs.forEach(img => (img.style.opacity = 1));
   
    //change current image to src of clicked image
    current.src = e.target.src;

    //Add fade-in clas
    current.classList.add('fade-in');

    //Remove fade-in class after.5s
    setTimeout(() => current.classList.remove('fade-in'), 500);

    //change opacity to const opacity
    e.target.style.opacity = opacity;
  }
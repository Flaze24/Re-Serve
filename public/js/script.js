"use strict"



let contact_sec=document.querySelector("#contact_sec");
let about_sec=document.querySelector("#about_sec");
let restaurants_sec=document.querySelector("#restaurants_sec");

document.addEventListener('DOMContentLoaded', function(){
    
     fadeIn(restaurants_sec, "block");
     fadeIn(about_sec, "block");
     fadeIn(contact_sec, "block")
    
  
});


function fadeOut(el){
  el.style.opacity = 1;

  (function fade() {
    if ((el.style.opacity -= .1) < 0) {
      el.style.display = 'none';
      el.classList.add('is-hidden');
    } else {
      requestAnimationFrame(fade);
    }
  })();
}

// fade in

function fadeIn(el, display){
  if (el.classList.contains('is-hidden')){
    el.classList.remove('is-hidden');
  }
  el.style.opacity = 0;
  el.style.display = display || "block";

  (function fade() {
    var val = parseFloat(el.style.opacity);
    if (!((val += .1) > 1)) {
      el.style.opacity = val;
      requestAnimationFrame(fade);
    }
  })();
}

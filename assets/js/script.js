let header = document.querySelector('.header')

window.addEventListener('scroll', appearsOnScroll);

function appearsOnScroll(){
  if(window.scrollY > 50){
    header.classList.add('scroll');
  }
  else{
    header.classList.remove('scroll');
  }
}

let input = document.querySelector(".input-search");
let button = document.querySelector(".btn-search");
let buttonSubmit = document.querySelector('.btn-submit');

button.addEventListener('click', test);

function test(){
  input.classList.toggle('open');
  button.classList.add('hidden');
  buttonSubmit.classList.add('show');
}
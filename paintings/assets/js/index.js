

// Мобильная навигация //
const navBtn = document.querySelector('.mobile-nav-btn');
const nav = document.querySelector('.mobile-nav');
const menuIcon = document.querySelector('.nav-icon');
navBtn.onclick = function () {
	nav.classList.toggle('mobile-nav--open');
	menuIcon.classList.toggle('nav-icon--active');
	document.body.classList.toggle('no-scroll');
    console.log(nav.classList)
};


// Фильтер //
const button = document.querySelectorAll('.reproduction__btn');
const contentBoxes = document.querySelectorAll('.reproduction__grid')

button.forEach(item=>item.addEventListener('click', event=> {
    const buttonTarget = event.target.getAttribute('data-tab');
	console.log('сдшс');
    
    button.forEach(element=>element.classList.remove('active'));
    contentBoxes.forEach(element=>element.classList.add('hidden'));

    item.classList.add('active');

    document.querySelector('#t' + buttonTarget).classList.remove('hidden');
    console.log('#t' + buttonTarget);


}))

    

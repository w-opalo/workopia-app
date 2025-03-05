const hanburger = document.getElementById('hamburger');
const alert = document.getElementById('alert');

hanburger.addEventListener('click', function () {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
})

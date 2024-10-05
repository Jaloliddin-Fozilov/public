const toTop = document.querySelector('.to-top');
const openMenuBtn = document.querySelector('.open-menu-btn');
const menu = document.querySelector('.menu');
const openMenu = document.querySelector('#open-menu');

openMenuBtn.addEventListener('click', () => {
    if (openMenu.classList.contains('fa-bars')) {
        openMenu.setAttribute('class', 'fa-solid fa-x')
        openMenuBtn.classList.add('active')
    }
    else {
        openMenu.setAttribute('class', 'fa-solid fa-bars')
        openMenuBtn.classList.remove('active')
    }
    menu.classList.toggle('active');
})


const playBtn = document.querySelector('.tube-link')
const backdrop = document.querySelector('.backdrop')
const modal = document.querySelector('.modal')

function openModal() {
    backdrop.style.display = 'block'
    modal.style.display = 'block'

}

function closeModal() {
    backdrop.style.display = 'none'
    modal.style.display = 'none'
}

playBtn.onclick = openModal
backdrop.onclick = closeModal

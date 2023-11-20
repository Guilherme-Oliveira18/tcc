function mostra() {const navBtn = document.querySelector('#menu');
const menuBar = document.querySelector('#mobile-menu-2');

navBtn.addEventListener('click', () => {
  const isExpanded = JSON.parse(navBtn.getAttribute('aria-expanded'));
  navBtn.setAttribute('aria-expanded', !isExpanded);
  menuBar.classList.toggle('hidden');
  menuBar.classList.toggle('block');
})
}
export default mostra();

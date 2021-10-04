const openMenu = document.querySelector('.open-sidebar')
const closeMenu = document.querySelector('.close-sidebar')
const sidebar = document.querySelector('.sidebar')
const site = document.querySelector('.site')


openMenu.addEventListener('click', function(){
  console.log("toggle")
  sidebar.classList.toggle('show')
})

closeMenu.addEventListener('click', function(){
  sidebar.classList.toggle('show')
})
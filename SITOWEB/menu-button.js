$menuButton = document.querySelector("#menuButton");
$toggableMenu = document.querySelector("#toggableMenu");

let toggleStatus = false;

$menuButton.addEventListener('click', () => {
    toggleStatus = toggleStatus ? false : true;
    toggleStatus ? $toggableMenu.style.display = 'flex' : $toggableMenu.style.display = 'none';
})
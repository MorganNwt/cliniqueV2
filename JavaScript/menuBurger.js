var sideNav = document.getElementById('mySideNav');
var openBtn = document.getElementById('openBtn');
var closeBtn = document.getElementById('closeBtn');

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/* set the width of the side navigation to 250px */
function openNav(){
    sideNav.classList.add('active');
}

/*Set teh width of the side navigation to 0 */
function closeNav(){
    sideNav.classList.remove('active');
}
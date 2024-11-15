let currentIndex = 0;
const members = document.querySelectorAll('.profil_item');
const totalMembers = members.length;

function showMember(index) {
    const carouselContent = document.getElementById('carousel_content');
    const offset = -index * 100;  // Move 100% every time
    carouselContent.style.transform = `translateX(${offset}%)`;
}

// Loop to the first member
function nextMember() {
    currentIndex = (currentIndex + 1) % totalMembers;  
    showMember(currentIndex);
}

function previousMember() {
    currentIndex = (currentIndex === 0) ? totalMembers - 1 : currentIndex - 1;
    showMember(currentIndex);
}

//  Added auto-scroll
setInterval(() => {
    nextMember();
}, 10000);  // Changes member every 10 seconds
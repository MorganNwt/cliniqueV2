document.querySelectorAll('.pics_container img').forEach(image => {
    image.onclick = () => {
        const popup = document.querySelector('.popup_pics');
        popup.style.display = 'block';
        popup.querySelector('img').src = image.src;
    }
});

//  Close the pop-up on click in interior pics
document.querySelector('.popup_pics img').onclick = (event) => {
    document.querySelector('.popup_pics').style.display = 'none';
}

// Close the pop-up on click in interior pics to '.popup_image'
document.querySelector('.popup_pics').onclick = (event) => {
    if (event.target === event.currentTarget) {
        event.currentTarget.style.display = 'none';
    }
}

// Close the pop-up when clicking on the close button (span)
document.querySelector('.popup_pics span').onclick = (event) => {
    document.querySelector('.popup_pics').style.display = 'none';
}
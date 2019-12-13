AOS.init();
document.querySelector('.audio').addEventListener('click', () => {
    const video = document.querySelector('video');
    if (video.muted) {
        video.muted = false;
    }
    else {
        video.muted = true;
    }
    document.querySelector('.audio i').classList.toggle('fa-volume-up');
    document.querySelector('.audio i').classList.toggle('fa-volume-mute');
});

document.querySelector('#contact').addEventListener('click', () => {
    // Fazer mais animações, de fade-in de baixo para cima
    document.querySelector('#contact i').classList.toggle('fa-times');
    document.querySelector('#contact-menu').classList.toggle('d-none');
});
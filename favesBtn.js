const toggleButton1 = document.getElementById('toggleButton1');

toggleButton1.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled1') === 'true';
    localStorage.setItem('isToggled1', !isToggled);
    
});

const toggleButton2 = document.getElementById('toggleButton2');

toggleButton2.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled2') === 'true';
    localStorage.setItem('isToggled2', !isToggled);
});


const toggleButton3 = document.getElementById('toggleButton3');

toggleButton3.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled3') === 'true';
    localStorage.setItem('isToggled3', !isToggled);
});


const toggleButton4 = document.getElementById('toggleButton4');

toggleButton4.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled4') === 'true';
    localStorage.setItem('isToggled4', !isToggled);
});


const toggleButton5 = document.getElementById('toggleButton5');

toggleButton5.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled5') === 'true';
    localStorage.setItem('isToggled5', !isToggled);
});


const toggleButton6 = document.getElementById('toggleButton6');

toggleButton6.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled6') === 'true';
    localStorage.setItem('isToggled6', !isToggled);
});


const toggleButton7 = document.getElementById('toggleButton7');

toggleButton7.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled7') === 'true';
    localStorage.setItem('isToggled7', !isToggled);
});


const toggleButton8 = document.getElementById('toggleButton8');

toggleButton8.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled8') === 'true';
    localStorage.setItem('isToggled8', !isToggled);
});


const toggleButton9 = document.getElementById('toggleButton9');

toggleButton9.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled9') === 'true';
    localStorage.setItem('isToggled9', !isToggled);
});


const toggleButton10 = document.getElementById('toggleButton10');

toggleButton10.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled10') === 'true';
    localStorage.setItem('isToggled10', !isToggled);
});


const toggleButton11 = document.getElementById('toggleButton11');

toggleButton11.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled11') === 'true';
    localStorage.setItem('isToggled11', !isToggled);
});


const toggleButton12 = document.getElementById('toggleButton12');

toggleButton12.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled12') === 'true';
    localStorage.setItem('isToggled12', !isToggled);
});

const toggleButton13 = document.getElementById('toggleButton13');

toggleButton13.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled13') === 'true';
    localStorage.setItem('isToggled13', !isToggled);
});

const toggleButton14 = document.getElementById('toggleButton14');

toggleButton14.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled14') === 'true';
    localStorage.setItem('isToggled14', !isToggled);
});

const toggleButton15 = document.getElementById('toggleButton15');

toggleButton15.addEventListener('click', () => {
    const isToggled = localStorage.getItem('isToggled15') === 'true';
    localStorage.setItem('isToggled15', !isToggled);
});

const likeButtons = document.querySelectorAll('.like');
const heartIcons = document.querySelectorAll('[id^="toggleButton"]');

likeButtons.forEach((likeButton, index) => {
    likeButton.addEventListener('click', () => {
        // Toggle the "active" class on the clicked "like" element
        likeButton.classList.toggle('active');

        // Toggle the appearance of the heart icon based on the presence of the "active" class
        if (likeButton.classList.contains('active')) {
            heartIcons[index].style.color = 'red';
        } else {
            heartIcons[index].style.color = 'gray';
        }
    });
});

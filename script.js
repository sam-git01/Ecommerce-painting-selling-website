let search = document.querySelector('.search-box');

document.querySelector('#search-icon').onClick = () =>{
    search.classList.toggle('active');
} 

function scrollToSection(sectionId) {
    document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
}

document.getElementById('commission-form').addEventListener('submit', function (event) {
    event.preventDefault();
    alert('Thank you for your submission! We will contact you shortly.');
});

document.getElementById('login-form').addEventListener('submit', function (event) {
    event.preventDefault();
    alert('Login successful! Welcome back.');
});

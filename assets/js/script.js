document.getElementById('hamburger').addEventListener('click', function() {
    var navLinks = document.getElementById('nav-links');
    navLinks.classList.toggle('active');
});

function toggleAnswer(card) {
    const answer = card.querySelector('.faq-answer');
    const toggleSign = card.querySelector('.faq-toggle');
    if (answer.style.display === 'block') {
        answer.style.display = 'none'; // Hide the answer
        toggleSign.textContent = '+'; // Show plus sign
    } else {
        answer.style.display = 'block'; // Show the answer
        toggleSign.textContent = 'X'; // Show X sign
    }
}


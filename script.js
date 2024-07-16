document.addEventListener("DOMContentLoaded", function () {
    const interestButtons = document.querySelectorAll('.btn-primary'); 

    interestButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default behavior (scrolling to the top)
            button.classList.toggle('interested'); 
            if (button.classList.contains('interested')) {
                button.textContent = 'Interested';
                button.style.backgroundColor = 'green'; 
                  setTimeout(() => {
                    button.classList.remove('interested');
                    button.textContent = 'Interest';
                    button.style.backgroundColor = ''; // Reset background color to default
                }, 2000); 
            } else {
                button.textContent = 'Interest'; 
                button.style.backgroundColor = ''; // Reset background color to default
            }
        });
    });
});
const toggleButton = document.getElementById('toggleMode');
const body = document.body;

toggleButton.addEventListener('click', () => {
    const isLightMode = body.classList.contains('light-mode');

    if (isLightMode) {
        body.classList.remove('light-mode');
        body.classList.add('dark-mode');
        toggleButton.textContent = 'Light Mode';
    } else {
        body.classList.remove('dark-mode');
        body.classList.add('light-mode');
        toggleButton.textContent = 'Dark Mode';
    }
});

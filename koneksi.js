const toggleButton = document.getElementById('toggleMode');
const body = document.body;

// Check and apply saved mode from localStorage
const savedMode = localStorage.getItem('mode');
if (savedMode === 'dark') {
    body.classList.add('dark-mode');
}

toggleButton.addEventListener('click', () => {
    body.classList.toggle('dark-mode');

    // Save the mode to localStorage
    if (body.classList.contains('dark-mode')) {
        localStorage.setItem('mode', 'dark');
    } else {
        localStorage.setItem('mode', 'light');
    }
});
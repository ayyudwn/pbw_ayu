document.getElementById('loginForm').addEventListener('submit', async function (event) {
    event.preventDefault(); // Mencegah form dari pengiriman default

    const username = document.getElementById('user').value;
    const password = document.getElementById('pass').value;

    try {
        const response = await fetch('login.html', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                user: username,
                pass: password,
            }),
        });

        const result = await response.text();
        const feedback = document.getElementById('feedback');

        if (response.ok) {
            feedback.className = 'alert alert-success';
            feedback.textContent = 'Login successful! Redirecting...';
            setTimeout(() => {
                // Ubah halaman tujuan ke index.php
                window.location.href = 'index.php';
            }, 2000);
        } else {
            feedback.className = 'alert alert-danger';
            feedback.textContent = result || 'Login failed. Please try again.';
        }
    } catch (error) {
        console.error('Error:', error);
        const feedback = document.getElementById('feedback');
        feedback.className = 'alert alert-danger';
        feedback.textContent = 'An error occurred. Please try again.';
    }
});

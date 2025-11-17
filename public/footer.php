</div> <!-- container -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const body = document.body;
    const navbar = document.getElementById('navbar');
    const toggle = document.getElementById('themeToggle');
    const icon = document.getElementById('themeIcon');

    function applyTheme(theme) {
        body.classList.remove('light', 'dark');
        body.classList.add(theme);

        navbar.classList.remove('light', 'dark');
        navbar.classList.add(theme);

        if (theme === 'dark') {
            icon.classList.replace('bi-moon-fill', 'bi-sun-fill');
        } else {
            icon.classList.replace('bi-sun-fill', 'bi-moon-fill');
        }
    }

    const savedTheme = localStorage.getItem('theme') || 'light';
    applyTheme(savedTheme);

    toggle.addEventListener('click', () => {
        const newTheme = body.classList.contains('dark') ? 'light' : 'dark';
        applyTheme(newTheme);
        localStorage.setItem('theme', newTheme);
    });
});
</script>

</body>
</html>

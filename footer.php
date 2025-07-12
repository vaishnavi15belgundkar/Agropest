<style>
     /* Footer */
        footer {
            background: #1a1a1a;
            color: white;
            text-align: center;
            padding: 40px 20px;
            margin-top: 0;
        }

        footer p {
            font-size: 1.1rem;
            opacity: 0.8;

        }
</style>
<footer>
        <p class="fade-in">© 2024 Agro Pest. All Rights Reserved. | Empowering Farmers, Nurturing Growth</p>
    </footer>

<script>
// Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
</script>
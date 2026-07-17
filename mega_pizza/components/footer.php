    </main>
    
    <!-- Rodapé Premium -->
    <footer class="text-white py-5 mt-auto" style="background-color: #050505; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-4">
            <div class="row gy-5">
                <div class="col-lg-4 col-md-6 pe-lg-5">
                    <img src="<?= BASE_URL ?>public/img/logo.png" alt="Mega Pizza Logo" height="60" class="mb-4 opacity-75">
                    <p class="text-secondary small line-height-lg"><?= traduzir('footer_desc') ?></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="font-heading fw-bold text-white mb-4"><?= traduzir('footer_nav') ?></h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="<?= BASE_URL ?>index.php" class="text-secondary text-decoration-none transition-all hover-text-gold"><?= traduzir('nav_home') ?></a></li>
                        <li class="mb-2"><a href="<?= BASE_URL ?>index.php#menu" class="text-secondary text-decoration-none transition-all hover-text-gold"><?= traduzir('nav_menu') ?></a></li>
                        <li class="mb-2"><a href="<?= BASE_URL ?>contactos.php" class="text-secondary text-decoration-none transition-all hover-text-gold"><?= traduzir('nav_contactos') ?></a></li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-12">
                    <h5 class="font-heading fw-bold text-white mb-4"><?= traduzir('footer_cont') ?></h5>
                    <div class="d-flex mb-3">
                        <i class="bi bi-geo-alt-fill text-accent me-3 mt-1"></i>
                        <p class="text-secondary small mb-0">Av. Gonçalo Rodrigues Caldeira, 17<br>6100-732 Sertã</p>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="bi bi-telephone-fill text-accent me-3 mt-1"></i>
                        <p class="text-secondary small mb-0">274 603 714</p>
                    </div>
                    <div class="d-flex">
                        <i class="bi bi-envelope-fill text-accent me-3 mt-1"></i>
                        <p class="text-secondary small mb-0">reservas@megapizza.pt</p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5 pt-4" style="border-top: 1px solid rgba(255,255,255,0.05);">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-secondary small mb-0">&copy; <?= date('Y') ?> <?= traduzir('footer_rights') ?></p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <a href="https://www.instagram.com/m.pizzaserta/" target="_blank" class="text-secondary me-3 transition-all hover-text-gold"><i class="bi bi-instagram fs-5"></i></a>
                    <a href="https://www.facebook.com/mpizzaserta" target="_blank" class="text-secondary me-3 transition-all hover-text-gold"><i class="bi bi-facebook fs-5"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script para mudar fundo da navbar no scroll -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.glass-nav');
            
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.style.background = 'rgba(10, 10, 10, 0.9)';
                    navbar.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.5)';
                } else {
                    navbar.style.background = 'rgba(10, 10, 10, 0.4)';
                    navbar.style.boxShadow = 'none';
                }
            });
        });
    </script>
</body>
</html>

<section class="hero-100vh" style="background-image: url('<?= BASE_URL ?>public/img/banner_1.png');">
    <div class="hero-overlay"></div>
    <div class="container hero-content text-center">
        <!-- Selo EN2 Destaque -->
        <div class="mb-4 d-inline-flex flex-column align-items-center transition-all hover-scale" title="Paragem Obrigatória na Rota N2">
            <!-- Marco N2 Maior -->
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; background-color: #FFCC00; color: #111; font-weight: 900; width: 80px; height: 100px; border-radius: 40px 40px 6px 6px; border: 4px solid #fff; box-shadow: 0 15px 35px rgba(0,0,0,0.6); font-family: 'Montserrat', sans-serif; line-height: 1;">
                <span style="font-size: 20px; border-bottom: 3px solid #111; padding-bottom: 2px; margin-bottom: 5px; width: 45px; text-align: center;">N</span>
                <span style="font-size: 40px; letter-spacing: -2px;">2</span>
            </div>
            <span class="badge bg-dark text-white mt-3 shadow-lg px-3 py-2 text-uppercase" style="font-size: 0.75rem; letter-spacing: 2px; border: 1px solid rgba(255,255,255,0.2);">A sua paragem na EN2</span>
        </div>

        <h1 class="hero-title text-white mb-4"><?= traduzir('hero_title') ?></h1>
        <p class="hero-subtitle mb-5 mx-auto" style="max-width: 700px;"><?= traduzir('hero_subtitle') ?></p>
        <a href="#menu" class="btn btn-premium btn-lg rounded-pill px-5 py-3 shadow-glow mt-2"><?= traduzir('hero_btn') ?></a>
    </div>
</section>

<!-- Menus e Sanduíches (Sanwish) -->
<section class="py-5 bg-surface">
    <div class="container py-4">
        <div class="text-center mb-5 pb-3">
            <h2 class="display-4 fw-bold font-heading text-white"><?= traduzir('menus_title') ?></h2>
            <div class="mx-auto mt-4" style="width: 60px; height: 3px; background-color: var(--accent-red);"></div>
            <p class="text-secondary mt-3 mx-auto" style="max-width: 600px;"><?= traduzir('menus_desc') ?></p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-md-6">
                <div class="premium-card p-0 border-0 shadow-lg text-center bg-transparent">
                    <img src="<?= BASE_URL ?>public/img/menu_1.jpg" class="img-fluid rounded-4 w-100" alt="Menu 1 - Sanduíches">
                </div>
            </div>
            <div class="col-md-6">
                <div class="premium-card p-0 border-0 shadow-lg text-center bg-transparent">
                    <img src="<?= BASE_URL ?>public/img/menu_2.jpg" class="img-fluid rounded-4 w-100" alt="Menu 2 - Sanduíches">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menu / Carrossel de Pizzas -->
<section id="menu" class="py-5" style="background-color: var(--bg-dark);">
    <div class="container py-5">
        <div class="text-center mb-5 pb-3">
            <h2 class="display-4 fw-bold font-heading text-white"><?= traduzir('pizzas_title') ?></h2>
            <div class="mx-auto mt-4" style="width: 60px; height: 3px; background-color: var(--accent-red);"></div>
        </div>

        <div id="pizzaCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner pb-5">
                
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row g-5 justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="premium-card">
                                <div class="card-img-container">
                                    <img src="<?= BASE_URL ?>public/img/pizza_1.jpg" alt="<?= traduzir('pizza1_title') ?>">
                                </div>
                                <div class="card-body-premium text-center">
                                    <h3 class="font-heading fs-4 mb-2"><?= traduzir('pizza1_title') ?></h3>
                                    <p class="text-secondary mb-4 small"><?= traduzir('pizza1_desc') ?></p>
                                    <div class="price-tag mb-4">12.50€</div>
                                    <button class="btn btn-premium w-100 rounded-pill"><?= traduzir('btn_pedir') ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-none d-md-block">
                            <div class="premium-card">
                                <div class="card-img-container">
                                    <img src="<?= BASE_URL ?>public/img/pizza_2.jpg" alt="<?= traduzir('pizza2_title') ?>">
                                </div>
                                <div class="card-body-premium text-center">
                                    <h3 class="font-heading fs-4 mb-2"><?= traduzir('pizza2_title') ?></h3>
                                    <p class="text-secondary mb-4 small"><?= traduzir('pizza2_desc') ?></p>
                                    <div class="price-tag mb-4">14.00€</div>
                                    <button class="btn btn-premium w-100 rounded-pill"><?= traduzir('btn_pedir') ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-none d-lg-block">
                            <div class="premium-card">
                                <div class="card-img-container">
                                    <img src="<?= BASE_URL ?>public/img/pizza_3.jpg" alt="<?= traduzir('pizza3_title') ?>">
                                </div>
                                <div class="card-body-premium text-center">
                                    <h3 class="font-heading fs-4 mb-2"><?= traduzir('pizza3_title') ?></h3>
                                    <p class="text-secondary mb-4 small"><?= traduzir('pizza3_desc') ?></p>
                                    <div class="price-tag mb-4">13.50€</div>
                                    <button class="btn btn-premium w-100 rounded-pill"><?= traduzir('btn_pedir') ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row g-5 justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="premium-card">
                                <div class="card-img-container">
                                    <img src="<?= BASE_URL ?>public/img/pizza_4.jpg" alt="<?= traduzir('pizza4_title') ?>">
                                </div>
                                <div class="card-body-premium text-center">
                                    <h3 class="font-heading fs-4 mb-2"><?= traduzir('pizza4_title') ?></h3>
                                    <p class="text-secondary mb-4 small"><?= traduzir('pizza4_desc') ?></p>
                                    <div class="price-tag mb-4">15.00€</div>
                                    <button class="btn btn-premium w-100 rounded-pill"><?= traduzir('btn_pedir') ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-none d-md-block">
                            <div class="premium-card">
                                <div class="card-img-container">
                                    <img src="<?= BASE_URL ?>public/img/pizza_6.jpg" alt="<?= traduzir('pizza6_title') ?>">
                                </div>
                                <div class="card-body-premium text-center">
                                    <h3 class="font-heading fs-4 mb-2"><?= traduzir('pizza6_title') ?></h3>
                                    <p class="text-secondary mb-4 small"><?= traduzir('pizza6_desc') ?></p>
                                    <div class="price-tag mb-4">14.50€</div>
                                    <button class="btn btn-premium w-100 rounded-pill"><?= traduzir('btn_pedir') ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-none d-lg-block">
                            <div class="premium-card">
                                <div class="card-img-container">
                                    <img src="<?= BASE_URL ?>public/img/pizza_7.jpg" alt="<?= traduzir('pizza7_title') ?>">
                                </div>
                                <div class="card-body-premium text-center">
                                    <h3 class="font-heading fs-4 mb-2"><?= traduzir('pizza7_title') ?></h3>
                                    <p class="text-secondary mb-4 small"><?= traduzir('pizza7_desc') ?></p>
                                    <div class="price-tag mb-4">16.00€</div>
                                    <button class="btn btn-premium w-100 rounded-pill"><?= traduzir('btn_pedir') ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- Controles do Carrossel Elegantes -->
            <button class="carousel-control-prev" type="button" data-bs-target="#pizzaCarousel" data-bs-slide="prev" style="width: 8%; justify-content: flex-start; margin-left: 15px; z-index: 10;">
                <div class="bg-surface rounded-circle d-flex align-items-center justify-content-center border shadow" style="width: 50px; height: 50px; border-color: rgba(255,255,255,0.1)!important; pointer-events: none;">
                    <i class="bi bi-chevron-left text-white fs-4"></i>
                </div>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#pizzaCarousel" data-bs-slide="next" style="width: 8%; justify-content: flex-end; margin-right: 15px; z-index: 10;">
                <div class="bg-surface rounded-circle d-flex align-items-center justify-content-center border shadow" style="width: 50px; height: 50px; border-color: rgba(255,255,255,0.1)!important; pointer-events: none;">
                    <i class="bi bi-chevron-right text-white fs-4"></i>
                </div>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </div>
</section>

<!-- Banner Secundário / Info -->
<section class="py-5 bg-surface">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative">
                    <img src="<?= BASE_URL ?>public/img/banner_2.jpg" class="img-fluid rounded-4 shadow-lg w-100" alt="Forno a lenha" style="object-fit: cover; height: 500px;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 rounded-4" style="box-shadow: inset 0 0 50px rgba(0,0,0,0.5);"></div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h4 class="text-gold text-uppercase tracking-wide mb-2 small fw-bold"><?= traduzir('tradicao_tag') ?></h4>
                <h2 class="display-5 fw-bold text-white mb-4 font-heading"><?= traduzir('tradicao_title') ?></h2>
                <p class="lead text-secondary mb-4" style="font-weight: 300;"><?= traduzir('tradicao_p1') ?></p>
                <p class="text-secondary mb-5"><?= traduzir('tradicao_p2') ?></p>
                <a href="<?= BASE_URL ?>contactos.php" class="btn btn-outline-gold btn-lg rounded-pill px-5"><?= traduzir('tradicao_btn') ?></a>
            </div>
        </div>
    </div>
</section>

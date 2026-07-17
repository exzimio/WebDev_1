<!-- Cabeçalho Contactos -->
<section class="py-5" style="background: linear-gradient(180deg, var(--bg-dark) 0%, var(--bg-surface) 100%); padding-top: 150px !important;">
    <div class="container text-center text-white pb-4">
        <h4 class="text-gold text-uppercase tracking-wide mb-2 small fw-bold"><?= traduzir('cont_tag') ?></h4>
        <h1 class="display-3 fw-bold font-heading"><?= traduzir('cont_title') ?></h1>
        <p class="lead text-secondary mt-3 mx-auto" style="max-width: 600px;"><?= traduzir('cont_subtitle') ?></p>
    </div>
</section>

<!-- Informações e Formulário -->
<section class="py-5 bg-surface pb-5">
    <div class="container py-4">
        <div class="row g-5">
            <!-- Formulário -->
            <div class="col-lg-6">
                <div class="premium-card h-100 p-5 d-flex flex-column justify-content-center">
                    <h3 class="font-heading fw-bold mb-4 text-white"><?= traduzir('cont_form_title') ?></h3>
                    <form>
                        <div class="mb-4">
                            <label for="nome" class="form-label text-secondary small text-uppercase tracking-wide"><?= traduzir('cont_form_name') ?></label>
                            <input type="text" class="form-control form-control-lg form-control-dark" id="nome" placeholder="<?= traduzir('cont_form_name_ph') ?>">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label text-secondary small text-uppercase tracking-wide"><?= traduzir('cont_form_email') ?></label>
                            <input type="email" class="form-control form-control-lg form-control-dark" id="email" placeholder="<?= traduzir('cont_form_email_ph') ?>">
                        </div>
                        <div class="mb-5">
                            <label for="mensagem" class="form-label text-secondary small text-uppercase tracking-wide"><?= traduzir('cont_form_msg') ?></label>
                            <textarea class="form-control form-control-dark" id="mensagem" rows="5" placeholder="<?= traduzir('cont_form_msg_ph') ?>"></textarea>
                        </div>
                        <button type="submit" class="btn btn-premium btn-lg w-100 rounded-pill shadow-glow"><?= traduzir('cont_form_btn') ?></button>
                    </form>
                </div>
            </div>

            <!-- Mapa e Info -->
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column">
                    <div class="row g-4 mb-4 flex-grow-1">
                        <div class="col-sm-6">
                            <div class="premium-card h-100 p-4 text-center d-flex flex-column justify-content-center align-items-center">
                                <div class="rounded-circle mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: rgba(229, 57, 53, 0.1);">
                                    <i class="bi bi-geo-alt-fill text-accent fs-3"></i>
                                </div>
                                <h5 class="font-heading fw-bold text-white"><?= traduzir('cont_visit') ?></h5>
                                <p class="text-secondary mb-0 mt-2 small">Av. Gonçalo Rodrigues Caldeira, 17<br>6100-732 Sertã</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="premium-card h-100 p-4 text-center d-flex flex-column justify-content-center align-items-center">
                                <div class="rounded-circle mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: rgba(245, 176, 65, 0.1);">
                                    <i class="bi bi-clock-fill text-gold fs-3"></i>
                                </div>
                                <h5 class="font-heading fw-bold text-white"><?= traduzir('cont_hours') ?></h5>
                                <p class="text-secondary mb-0 mt-2 small"><?= traduzir('cont_hours_desc') ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Google Maps Iframe -->
                    <div class="premium-card flex-grow-1 p-0" style="min-height: 300px;">
                        <iframe 
                            src="https://maps.google.com/maps?q=M%20Pizza%20Serta&t=&z=16&ie=UTF8&iwloc=&output=embed" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Imagem Extra (Espaço) -->
<section class="py-5" style="background-color: var(--bg-dark);">
    <div class="container text-center py-4">
        <h3 class="font-heading fw-bold mb-5 text-white"><?= traduzir('cont_space') ?></h3>
        <div class="premium-card p-0 d-inline-block border-0">
             <img src="<?= BASE_URL ?>public/img/espaco_1.jpg" class="img-fluid" alt="O nosso espaço" style="max-height: 500px; width: 100%; object-fit: cover;">
        </div>
    </div>
</section>

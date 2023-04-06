<main>
    <section class="principal">
        <div class="principal__imagen">
            <img class="img" src="assets/img/profile.png" alt="Imagen del perfil">
        </div>
        <?php
        $index = true;
        require_once('views/about.php')
        ?>
    </section>
    <?php require_once('views/projects.php') ?>
    <?php require_once('views/contact.php') ?>
</main>
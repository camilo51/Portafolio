<section class="proyectos">
    <h2>projects</h2>
    <div class="proyectos__contenedor <?php echo ($index) ? 'proyectos__contenedor--index' : null ?>"></div>

    <?php if (isset($index)) : ?>
        <div class="proyectos__boton">
            <a class="btn btn--proyecto" href="/projects">More projects</a>
        </div>
    <?php endif ?>
</section>
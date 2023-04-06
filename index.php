<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link rel="icon" href="img/icons/js.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <meta name="description" content="Desarrollador web junior (técnico auxiliar). Estudié media técnica en
    desarrollo de software con el Politécnico Colombiano Jaime Isaza Cadavid. Tengo habilidades en lenguajes de programación como: JavaScript, Java. Además de lenguajes
    de maquetación como: HTML y CSS.">
    <meta name="keywords" content="Desarrollador web, técnico auxiliar, desarrollo de software, JavaScript, Java, HTML, CSS">
</head>

<body>
    <?php 
        require_once('views/header.php');
    
        if ($_SERVER['REQUEST_URI'] === '/') {
            include('views/inicio.php');
        }
        if ($_SERVER['REQUEST_URI'] === '/about') {
            include('views/about.php');
        }
        if ($_SERVER['REQUEST_URI'] === '/projects') {
            include('views/projects.php');
        }
        if ($_SERVER['REQUEST_URI'] === '/contact') {
            include('views/contact.php');
        }
        
        require_once('views/footer.php');
    ?>


    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/proyectos.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('title'); ?></title>


        <!-- Fonts do google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
        <!-- CSS da aplicação-->
        <link rel="stylesheet" type="text/css" href="/css/styles.css">

        <!-- Javascript da aplicação -->
        <script src="/js/app.js"></script>

    </head>
    <body>
        <header>
            <navbar class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/hdcevents_logo.svg" alt="HDC Events">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Criar Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </navbar>
        </header>
        <div class="container-flui">
            <div class="row">
                <?php if(session('msg')): ?>
                    <p class="msg"><?php echo e(session('msg')); ?></p>
                <?php endif; ?>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        <footer>
            <p>HDC Events &copy; 2020</p>
        </footer>

        <!-- Ion Icons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

</html>
<?php /**PATH C:\CURSOS\LARAVEL\laravel4noobs\hdcevents\resources\views/layouts/main.blade.php ENDPATH**/ ?>
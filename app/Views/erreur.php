<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?=$titre?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="<?=css_url('erreur')?>" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="menu">
            <p class="website_name">OnGere - Coiffure</p>
            <div class="menu_links">
                <a href="<?=base_url();?>" class="link">Accueil</a>
                <a href="<?=base_url('Coiffure');?>" class="link">Coiffures</a>
                <a href="<?=base_url('Boutique');?>" class="link">Boutique</a>
            </div>
            <div class="menu_icon">
                <span class="icon"></span>
            </div>
        </div>
    </nav>

    <section class="wrapper">
        <div class="container">

            <div id="scene" class="scene" data-hover-only="false">

                <div class="circle" data-depth="1.2"></div>

                <div class="one" data-depth="0.9">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>

                <div class="two" data-depth="0.60">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>

                <div class="three" data-depth="0.40">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>

                <p class="p404" data-depth="0.50">Oups</p>
                <p class="p404" data-depth="0.10">Oups</p>

            </div>

            <div class="text">
                <article>
                    <p>
                        Nous n'avons pas trouver cette page.
                        <br>Pas de panique, direction 
                        <a href="<?=base_url();?>" class="accueil"> l'accueil</a>
                    </p>
                </article>
            </div>

        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="<?=js_url('erreur')?>"></script>

</body>

</html>
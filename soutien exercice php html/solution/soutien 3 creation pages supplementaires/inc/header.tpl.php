<?php  require 'data.php' ?>
<body>

<header>
    <H1>PHP SOUTIEN: ARRAY(Tableaux) et foreach, DATA, Include/Requiere, Fonctions </H1>
    <nav>
        <ul>
                <?php foreach ($barre_de_navigation as $label => $url):?>
                   
                
                    <li class="navli <?php if ($page_active == $label) {echo 'active';} ?>"><a href="<?= $url ?>"> <?= $label ?></a></li>
                <?php endforeach ?>
        </ul>

    </nav>
</header>
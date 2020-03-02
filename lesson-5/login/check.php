<?php

    include('../engine/reg/check_authorisation.php');

    $h1 = 'Авторизация. Проверка ';
    $title = $h1;

    include('../templates/header.php');
?>

    <main>

        <?php
            if ($errors != '') {

                echo $errors;
                include('../templates/log_form.php');

            }
        ?>

    </main>

<?php
    include('../templates/footer.php');
?>
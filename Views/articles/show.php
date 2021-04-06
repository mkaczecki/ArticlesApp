<?php include('template/header.php') ?>
<div class="row px-0 mx-0 py-5">
    <?php
    if(isset($data) && $data != []) {
        $article = $data;
            echo "
            <article class=\"col-12  col-md-8 offset-md-2 border-bottom py-4\">
                <p class=\"h2 text-uppercase fw-bold text-gray\" style=\"font-family: 'Righteous', cursive;\">
                    " . $article['title'] . "
                </p>
                <p class=\"text-muted pb-4\">
                    Ostatnia aktualizacja: " . $article['updated'] . "
                </p>
                <p class=\"h5 text-dark\">
                    " . $article['content'] . "
                </p>
            </article>
        ";

    } else {
        echo "This article is not available.";
    }
    ?>
</div>
</body>
</html>
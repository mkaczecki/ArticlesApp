<?php include('template/header.php') ?>
<div class="row px-0 mx-0 py-5 align-items-center">
    <?php
    if(isset($data) && $data != []) {
        foreach ($data as $article) {
            $date = date_create($article['updated']);
            $dateFormat = date_format($date,"d M Y ");
            $timeFormat = date_format($date, 'H:i');
            $stringDate = $dateFormat." o godz: ".$timeFormat;

            echo "
            <article class=\"col-12  col-md-8 offset-md-1 border-bottom py-4\">
                <p class=\"h2 text-uppercase fw-bold text-gray\" style=\"font-family: 'Righteous', cursive;\">
                    " . $article['title'] . "
                </p>
                <p class=\"text-muted pb-4\">
                    Ostatnia aktualizacja: " . $stringDate . "
                </p>
                <p class=\"h5 text-justify text-dark\">
                    " . $article['content'] . "
                </p>
            </article>
            <div class=\"col-12 col-md-2\">
                <a href=\"/articles/". $article['id'] . "\" style=\"hover: background-color: transparent !important;\" class=\"btn btn-outline-dark w-100 py-2 mb-2\">Wyświetl</a>
                <a href=\"/articles/edit/". $article['id'] . "\" style=\"hover: background-color: transparent !important;\" class=\"btn btn-outline-dark w-100 py-2 mb-2\">Edytuj</a>
                <a href=\"/articles/delete/". $article['id'] . "\" style=\"hover: background-color: transparent !important;\" class=\"btn btn-outline-dark w-100 py-2\">Usuń</a>
            </div>
        ";
        }
    } else {
        echo "
            <div class=\"col-12  col-md-8 offset-md-2 border-bottom py-4\">
                No articles available.
            </div>
        ";
    }
    ?>
</div>
</body>
</html>
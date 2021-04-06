<?php include('template/header.php') ?>
<div class="row px-0 mx-0 py-5">
    <div class="col-4 offset-4">
        <?php if(isset($data) && $data != []){
            $article = $data;
        } ?>
        <form class="form-control px-3" method="post" action="/articles/update">
            <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
            <label for="category_id">Kategoria</label>
            <select class="w-100 py-1 mb-4 mt-1 form-control" name="category_id" required>
                <option value="1">Polska</option>
                <option value="2">Europa</option>
                <option value="3">Świat</option>
            </select>
            <label for="title">Tytuł</label>
            <input value="<?php echo $article['title']; ?>" class="w-100 py-1 mb-4 mt-1 form-control" type="text" name="title" required>
            <label for="content">Treść</label>
            <textarea style="resize: none;" class="w-100 py-1 mb-4 mt-1 form-control" name="content" required minlength="10" maxlength="5000" rows=8">
                <?php echo $article['content']; ?>
            </textarea>
            <select class="w-100 py-1 mb-4 mt-1 form-control" name="status" required>
                <option value="1">Aktywny</option>
                <option value="0">Nieaktywny</option>
            </select>
            <button type="submit" class="rounded btn btn-dark text-white py-2 w-100 mt-4 mb-3">Zaktualizuj</button>
        </form>
    </div>
</div>
</body>
</html>
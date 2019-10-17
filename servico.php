<?php require_once('header.php'); ?>
<section class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="mt-5"><?php echo (isset($_GET['id'])) ? getNome($_GET['id']) : ''; ?></h1>
            <p>descricao</p>
        </div>
    </div>
</section>
<?php require_once("footer.php"); ?>
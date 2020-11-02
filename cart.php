<?php require 'inc/head.php';
require 'inc/data/products.php';
if (empty($_SESSION) || !isset($_SESSION['loginname']) || empty($_SESSION['loginname'])) {
    header('Location: index.php');
}
?>
<section class="cookies container-fluid">
    <div class="row text-center">
        <?php if (isset($_SESSION['add_to_cart'])): ?>
            <?php foreach ($_SESSION['add_to_cart'] as $id): ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $catalog[$id]['name']; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $catalog[$id]['name']; ?></h3>
                            <p><?= $catalog[$id]['description']; ?></p>
                        </figcaption>
                    </figure>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <span>You haven't cookies, do your choice in the shop !</span>
        <?php endif; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

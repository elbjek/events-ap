
<?php require "partials/header.view.php"; ?>
<?php require "partials/hero.view.php"; ?>

<div class="index max-width ">
    <h2>Latest events</h2>
    <div class="row justify-content between">
        <?php foreach ($events as $event):?> 

        <?php if($event->prices_id==1):?>

        <div class="card col-md-4">
            <div class="img card-img-top">
                <img src="storage/<?= $event->image ?>">
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $event->artist ?></h5>
            <?php if(strlen($event->short_desc) > 125): ?>
                <p class="card-text"><?= substr($event->short_desc,0,125) ?> ...</p>
            <?php endif; ?>
                <a href="/concert?id=<?= $event->id ?>" class="btn" >See more</a> 
            </div>
        </div>   

        <?php endif; ?>
        <?php endforeach; ?>


    </div>
</div>

<?php require "partials/footer.view.php" ?>

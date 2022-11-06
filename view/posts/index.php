<div class="all-post">
    <div class="card-area">
        <div class="col">
            <div class="row">
                <?php
                if ($posts['status'] == 200) {
                    foreach ($posts['data'] as $post) {
                ?>
                        <div class="col">
                            <div class="card">

                                <img class="card-img-top" src="<?= $post['cover'] ?>" alt="Card image cap">

                                <div class="card-body">
                                    <h5 class="card-title"><?= $post['title'] ?></h5>
                                    <p class="card-text">
                                        <?php 
                                           echo content_echo($post['content'],200);
                                        ?>
                                    </p>
                                    <a href="<?=SITE_URL?>post/readmore/<?=$post['id']?>" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <span>
                        <h3><?= $posts['message'] ?></h3>
                    </span>
                <?php
                }
                ?>

            </div>
        </div>

    </div>
</div>
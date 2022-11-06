<div class="signle-post-area">
    <?php
        if($post['status'] == 200){
            $single = $post['data'][0];
            ?>
                <div class="post-cover">
                    <img src="<?=SITE_URL.$single['cover']?>"/>
                </div>
                <div class="post-meta">
                    <h3><?=$single['title']?></h3>
                    <small>Posted on: <?=$single['date']?></small><br/>
                    <small>category: <?=$single['category']?></small><br/>
                    <small>Posted by: <?=ucfirst($single['postedby'])?></small>
                </div>
                <div class="post-content">
                    <p>
                        <?=$single['content'];?>
                    </p>
                </div>
            <?php
        }else{
            ?>
                <span>
                    <h3><?=$post['message']?></h3>
                </span>
            <?php
        }
    ?>
</div>
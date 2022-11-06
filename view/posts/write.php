<div class="write-a-post">
    <?php if($response){ ?>
    <div class="alert alert-primary" role="alert">
        <?=$response['message'];?>
    </div>
    <?php } ?>
    <form method="post" action="<?= SITE_URL ?>post/write" enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Shot Description</label>
                        <input type="text" name="short_desc" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category">
                            <option value="All">Select Category</option>
                            <option value="Education">Education</option>
                            <option value="Love">Love</option>
                            <option value="Information">Information</option>
                            <option value="Technology">Technology</option>
                            <option value="Social">Social</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Cover</label>
                        <input type="file" name="cover" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-3">
                <div class="form-group">
                    <label>Content</label>
                    <textarea rows="10" name="content" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="row">
                <div class="col-md-2">
                    <input type="submit" class="btn  btn-primary" name="write_post" value="Post">
                </div>
                <div class="col-md-2">
                    <a href="<?= SITE_URL ?>home" class="btn btn-warning">Cancel</a>
                </div>
            </div>

        </div>
    </form>
</div>
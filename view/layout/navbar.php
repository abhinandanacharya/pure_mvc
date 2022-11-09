<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Pure MVC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link <?=($source == 'home')? 'active' : '' ?>" aria-current="page" href="<?=SITE_URL?>home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=($source == 'post')? 'active' : '' ?>" href="<?=SITE_URL?>post">Posts</a>
            </li>
            <?php if(isset($_SESSION['Auth'])){ ?>
            <li class="nav-item">
                <a class="nav-link <?=($source == 'logout')? 'active' : '' ?>" href="<?=SITE_URL?>auth/logout">Logout</a>
            </li>
            <?php }else { ?>
                <li class="nav-item">
                <a class="nav-link" href="<?=SITE_URL?>auth/">Login</a>
            </li>
            <?php } ?>
        </ul>

    </div>
</nav>
</header>
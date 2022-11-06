<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link <?=($source == 'home')? 'active' : '' ?>" aria-current="page" href="<?=SITE_URL?>home">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=($source == 'post')? 'active' : '' ?>" href="<?=SITE_URL?>post">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=($source == 'category')? 'active' : '' ?>" href="<?=SITE_URL?>category">Categoey</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=($source == 'account')? 'active' : '' ?>">Account</a>
            </li>
        </ul>

    </div>
</nav>
</header>
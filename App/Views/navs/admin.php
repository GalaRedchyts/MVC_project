<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Posts
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="<?= url('admin/posts')?>">All Posts</a></li>
        <li><a class="dropdown-item" href="<?= url('admin/posts/create')?>">New Posts</a></li>
    </ul>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       Categories
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="<?= url('admin/categories')?>">All Categories</a></li>
        <li><a class="dropdown-item" href="<?= url('admin/categories/create')?>">New Category</a></li>
    </ul>
</li>
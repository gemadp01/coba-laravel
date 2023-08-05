<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'text-dark' : '' }}" aria-current="page"
                    href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts') ? 'text-dark' : '' }}" href="/dashboard/posts">
                    <span data-feather="file-text"></span>
                    My Posts
                </a>
            </li>

        </ul>



    </div>
</nav>

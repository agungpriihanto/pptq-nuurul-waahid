<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-2">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <i class="bi bi-house-fill fs-5 me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <i class="bi bi-file-earmark-post fs-5 me-2"></i> Post
                </a>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/pesan*') ? 'active' : '' }}" href="/dashboard/pesan">
                    <i class="bi bi-chat-left-fill fs-5 me-2"></i>Pesan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/psb*') ? 'active' : '' }}" href="/dashboard/psb">
                    <i class="bi bi-person-lines-fill fs-5 me-2"></i> DATA PSB 23/24
                </a>
            </li>
            </li>
            <li class="nav-item">
                <a class="btn btn-danger m-3" href="/logout">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Logout <i class="bi bi-box-arrow-right fs-5"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

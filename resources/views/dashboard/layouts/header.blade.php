<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-blue-800">
        HaiuCare Indonesia
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="">
        <div class="">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn-logout nav-link px-3 border-0 bg-dark text-white"> 
                </span> Logout 
                <span data-feather="log-out" class="align-text-bottom">
                </button>
            </form>
            <!-- <a class="nav-link px-3" href="/logout">Logout</a> -->
        </div>
    </div>
</header>
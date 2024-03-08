<nav class="navbar navbar-expand-lg py-3 bg-white">
    <div class="container">
        <a class="navbar-brand logo" href="admin-dashboard.html">
            <img src="assets/images/logo.png" alt="Logo">
            <h5 class="text-dark fw-bold mb-0">Quizz</h5>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('kuis.index')}}">List Kuis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin-list-pengguna.html">Pengguna</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <ul class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="true">
                        Muhammad Yunus
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end border mt-3" data-bs-popper="static">
                        <li>
                            <a href="#" class="dropdown-item">
                                Logout
                            </a>
                        </li>
                    </ul>
                </ul>
            </ul>
        </div>
    </div>
</nav>
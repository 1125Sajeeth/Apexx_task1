<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.svg.png') }}" alt="">
            </a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="resourcesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Resources
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="resourcesDropdown">
                            <li><a class="dropdown-item" href="#">Resource 1</a></li>
                            <li><a class="dropdown-item" href="#">Resource 2</a></li>
                            <li><a class="dropdown-item" href="#">Resource 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Success stories</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="companyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="companyDropdown">
                            <li><a class="dropdown-item" href="#">About Us</a></li>
                            <li><a class="dropdown-item" href="#">Careers</a></li>
                            <li><a class="dropdown-item" href="#">Contact</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn btn-outline-dark me-2" type="button">Login</button>
                    <button class="btn btn-primary" type="button">Create free account</button>
                </div>
            </div>
        </div>
    </nav>
</header>

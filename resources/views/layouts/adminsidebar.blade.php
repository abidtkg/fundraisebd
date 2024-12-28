<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">{{ config('app.name') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2 active" aria-current="page" href="#">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2" href="#">
                        <i class="bi bi-arrow-bar-down"></i>
                        Donations
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2" href="#">
                        <i class="bi bi-file-text"></i>
                        FundRaise Issues
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2" href="#">
                        <i class="bi bi-people"></i>
                        Fund Raisers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2" href="#">
                        <i class="bi bi-graph-up"></i>
                        Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2" href="#">
                        <i class="bi bi-braces"></i>
                        API Integrations
                    </a>
                </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                <span>Saved reports</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                    <i class="bi bi-check-circle"></i>
                </a>
            </h6>
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link gap-2" href="#">
                        <i class="bi bi-file-earmark-text"></i>
                        Current month
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  gap-2" href="#">
                        <i class="bi bi-file-earmark-text"></i>
                        Last quarter
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2" href="#">
                        <i class="bi bi-file-earmark-text"></i>
                        Social engagement
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2" href="#">
                        <i class="bi bi-file-earmark-text"></i>
                        Year-end Report
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2" href="#">
                        <i class="bi bi-gear-wide-connected"></i>
                        Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2" href="#">
                        <i class="bi bi-door-open"></i>
                        Sign out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
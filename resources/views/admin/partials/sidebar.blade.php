<aside class="menu-sidebar2">
    <div class="logo justify-content-center">
        <h2 class="">
            <a href="#" class="text-white">
                Dev Admin
            </a>
        </h2>
    </div>

    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src="{{ asset('images/no-image.png') }}" alt="" />
            </div>
            <h4 class="name">john doe</h4>
            <a href="#">Sign out</a>
        </div>

        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Web Models
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>

                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="#">
                                <i class="fas fa-circle"></i>Sample
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-users-cog"></i>User Management
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>

                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="table.html">
                                <i class="fas fa-circle"></i>Users</a>
                        </li>
                    </ul>
                </li>
                
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user-shield"></i>Admin Management
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>

                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="#">
                                <i class="fas fa-circle"></i>Admins
                            </a>
                        </li>

                        <li>
                            <a href="register.html">
                                <i class="fas fa-circle"></i>Roles and Permissions
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fa fa-file-alt"></i>Activity Logs
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<div class="sidebar-area" id="sidebar-area">
            <div class="logo position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="d-block text-decoration-none position-relative">
                    <img src="assets/images/logo-icon.png" alt="logo-icon">
                    <span class="logo-text text-secondary fw-semibold">Fila</span>
                </a>
                <button
                    class="sidebar-burger-menu-close bg-transparent py-3 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y"
                    id="sidebar-burger-menu-close">
                    <span class="border-1 d-block for-dark-burger"
                        style="border-bottom: 1px solid #475569; height: 1px; width: 25px; transform: rotate(45deg);"></span>
                    <span class="border-1 d-block for-dark-burger"
                        style="border-bottom: 1px solid #475569; height: 1px; width: 25px; transform: rotate(-45deg);"></span>
                </button>
                <button class="sidebar-burger-menu bg-transparent p-0 border-0" id="sidebar-burger-menu">
                    <span class="border-1 d-block for-dark-burger"
                        style="border-bottom: 1px solid #475569; height: 1px; width: 25px;"></span>
                    <span class="border-1 d-block for-dark-burger"
                        style="border-bottom: 1px solid #475569; height: 1px; width: 25px; margin: 6px 0;"></span>
                    <span class="border-1 d-block for-dark-burger"
                        style="border-bottom: 1px solid #475569; height: 1px; width: 25px;"></span>
                </button>
            </div>

            <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
                <ul class="menu-inner">
                    <li class="menu-title small text-uppercase">
                        <span class="menu-title-text">MAIN</span>
                    </li>
                    <li class="menu-item open">
                        <a href="javascript:void(0);" class="menu-link active">
                            <span class="material-symbols-outlined menu-icon">dashboard</span>
                            <span class="title">Dashboard</span>
                            <span class="count">11</span>
                        </a>
                    </li>


                    <li class="menu-title small text-uppercase">
                        <span class="menu-title-text">APPS</span>
                    </li>


                    <li class="menu-item">
                        <a href="{{ route('Admin.products.index') }}" class="menu-link">
                            <span class="material-symbols-outlined menu-icon">perm_contact_calendar</span>
                            <span class="title">Product</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('Admin.categories.index') }}" class="menu-link">
                            <i class="bi bi-tags-fill"></i>
                            <span class="title">Category</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{route('Admin.users.index')}}" class="menu-link">
                            <span class="material-symbols-outlined menu-icon">chat</span>
                            <span class="title">User</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle active">
                            <span class="material-symbols-outlined menu-icon">settings</span>
                            <span class="title">Settings</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="account-settings.html" class="menu-link">
                                    Account Settings
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="change-password.html" class="menu-link">
                                    Change Password
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="connections.html" class="menu-link">
                                    Connections
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="privacy-policy.html" class="menu-link">
                                    Privacy Policy
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="terms-conditions.html" class="menu-link">
                                    Terms & Conditions
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="menu-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="menu-link"
                                style="background:none; border:none; cursor:pointer;">
                                <span class="material-symbols-outlined menu-icon">logout</span>
                                <span class="title">Logout</span>
                            </button>
                        </form>
                    </li>


                </ul>
            </aside>
        </div>

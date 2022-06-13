<aside class="l-navbar showed" id="nav-bar">
    <nav class="nav">
        <div>
            <div class="logo">
                <a href="#" class="nav__logo hstack">
                    <i class='i-logo nav__icon'></i>
                    <i class="nav__logo-name i-tohoku"></i>
                </a>
            </div>

            <div class="nav__list mt-4">
                <a href="{{ route('admin.dashboard') }}" class="nav__link">
                    <i class='i-dashboard nav__icon'></i>
                    <span class="nav__name">Dashboard</span>
                </a>
                <div class="accordion">
                    <a href="#" class="hstack gap-4 m-4">
                        <i class='i-arrow rotate nav__icon' id="arrows1"></i>
                        <span class="accordion-name">Customers</span>
                    </a>
                </div>
                <div class="panel">
                    <a href="{{ route('admin.user') }}" class="nav__link">
                        <i class='i-m-user nav__icon'></i>
                        <span class="nav__name">User</span>
                    </a>

                    <a href="{{ route('admin.e-commerse') }}" class="nav__link">
                        <i class='i-e-commerse nav__icon'></i>
                        <span class="nav__name">E-Commerse</span>
                    </a>

                    <a href="{{ route('admin.official') }}" class="nav__link">
                        <i class='i-official nav__icon'></i>
                        <span class="nav__name">Official Store</span>
                    </a>
                </div>
                <div class="line">
                    <span class="accordion-name">Shopping</span>
                </div>

                    <a href="{{ route('admin.product') }}" class="nav__link">
                        <i class='i-product nav__icon'></i>
                        <span class="nav__name">Products</span>
                    </a>

                    <a href="{{ route('admin.category') }}" class="nav__link">
                        <i class='i-category nav__icon'></i>
                        <span class="nav__name">Category</span>
                    </a>

                    <a href="{{ route('admin.promo') }}" class="nav__link">
                        <i class='i-promo nav__icon'></i>
                        <span class="nav__name">Promo</span>
                    </a>

                    <a href="{{ route('admin.order') }}" class="nav__link">
                        <i class='i-order nav__icon'></i>
                        <span class="nav__name">Order</span>
                    </a>

                    <a href="{{ route('admin.payment') }}" class="nav__link">
                        <i class='i-payment nav__icon'></i>
                        <span class="nav__name">Payment Method</span>
                    </a>

                    <a href="{{ route('admin.invoice') }}" class="nav__link">
                        <i class='i-invoice nav__icon'></i>
                        <span class="nav__name">Invoice</span>
                    </a>

                <div class="accordion">
                    <a href="#" class="hstack gap-4 m-4 dropdown">
                        <i class='i-arrow rotate nav__icon' id="arrows2"></i>
                        <span class="accordion-name">Pages</span>
                    </a>
                </div>
                <div class="panel">
                    <a href="{{ route('admin.landing-page') }}" class="nav__link">
                        <i class='i-landing-page nav__icon'></i>
                        <span class="nav__name">Landing Page</span>
                    </a>

                    <a href="{{ route('admin.home') }}" class="nav__link">
                        <i class='i-home nav__icon'></i>
                        <span class="nav__name">Home</span>
                    </a>
                </div>
                <div class="line">
                    <span class="accordion-name">Services</span>
                </div>
                <a href="{{ route('admin.email') }}" class="nav__link">
                    <i class='i-email nav__icon'></i>
                    <span class="nav__name">Email</span>
                </a>

                <a href="{{ route('admin.chat') }}" class="nav__link">
                    <i class='i-chat nav__icon'></i>
                    <span class="nav__name">Chatting Service</span>
                </a>

                <a href="{{ route('admin.help') }}" class="nav__link">
                    <i class='i-help nav__icon'></i>
                    <span class="nav__name">Help</span>
                </a>
            </div>
        </div>
    </nav>
</aside>

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Seller panel</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="{{ url('home') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>

                </li>
                <li class=" navigation-header"><span>Orders</span>
                </li>
                <li class=" nav-item"><a href="{{ url('allOrders') }}"><i class="fa fa-opencart"></i></i><span class="menu-title" data-i18n="Data List">Orders</span></a>
               
            </li>


                <li class=" navigation-header"><span>Product Management</span>
                </li>
                <li class="nav-item"><a href="{{ url('product') }}"><i class="fa fa-cart-plus"></i></i><span class="menu-title" data-i18n="Chat">Products</span></a>
            </li>
                <li><a href="{{ url('productreview') }}"><i class="fa fa-star"></i><span class="menu-item" data-i18n="List View">Products Reviews</span></a>
                </li>
                <li><a href="{{ url('productoverview') }}"><i class="fa fa-star"></i><span class="menu-item" data-i18n="List View">Products Overview</span></a>
                </li>


                </li>

                <li class=" navigation-header"><span>User Realted utitlity</span>
                </li>
                <li><a href={{ url('cencellation') }}><i class="fa fa-times-circle-o"></i><span class="menu-item" data-i18n="Select">Cancellation</span></a>
                </li>

  <!--               <li><a href='/dashboard-purchasehistory'><i class="fa fa-history"></i><span class="menu-item" data-i18n="Checkbox">Purchase History</span></a>
                </li> -->
                <li><a href="{{ url('Settlement-report') }}"><i class="fa fa-history"></i><span class="menu-item" data-i18n="Checkbox">Settlement Report</span></a>
                </li>
                <li class=" navigation-header"><span>Transactions</span>
                </li>
                <li class=" nav-item"><a href="{{ url('sellinghistory') }}"><i class="fa fa-shopping-basket"></i><span class="menu-title" data-i18n="Colors">sellinghistory</span></a>
            </li>
                <li class=" nav-item"><a href="{{ url('transactions') }}"><i class="fa fa-money"></i><span class="menu-title" data-i18n="Colors">transactions</span></a>
            </li>
             <!--    <li><a href="form-checkbox.html"><i class="fa fa-hourglass-end"></i><span class="menu-item" data-i18n="Checkbox">Pending Amount</span></a>
                </li> -->
              <!--   <li class=" navigation-header"><span>Contact</span>
                </li>
                <li><a href='/dashboard-contactforissue'><i class="fa fa-shopping-basket"></i><span class="menu-item" data-i18n="Select">Contact For Problem</span></a>
                </li>
                <li><a href='/dashboard-contactissue'><i class="fa fa-exclamation-triangle"></i><span class="menu-item" data-i18n="Switch">Contact Issue</span></a>
                </li> -->
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
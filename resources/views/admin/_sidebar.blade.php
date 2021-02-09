<section>
    <!-- sidebar menu start -->
    <div class="sidebar-menu sticky-sidebar-menu">

        <!-- logo start -->
        <div class="logo">
            <h1><a href="{{route('adminhome')}}">Collective</a></h1>
        </div>

        <!-- if logo is image enable this -->
        <!-- image logo --
        <div class="logo">
          <a href="index.html">
            <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
          </a>
        </div>
        <!-- //image logo -->

        <div class="logo-icon text-center">
            <a href="{{route('adminhome')}}" title="logo"><img src="{{asset('assets')}}/admin/images/logo.png" alt="logo-icon"> </a>
        </div>
        <!-- //logo end -->

        <div class="sidebar-menu-inner">

            <!-- sidebar nav start -->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="{{route('adminhome')}}"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
                </li>
                <li><a href="{{route('admin_category')}}"><i class="fa fa-table"></i> <span>Category</span></a></li>
                <li><a href="{{route('admin_products')}}"><i class="fa fa-th"></i> <span>Products</span></a></li>
                <li class="menu-list">
                    <a href="{{route('admin_reservations')}}"><i class="fa fa-cogs"></i>
                        <span>Seçenekler <i class="lnr lnr-chevron-right"></i></span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{route('admin_reservations')}}">Tüm Rezervasyonlar</a> </li>
                        <li><a href="{{route('admin_reservation_list',['status'=>'new'])}}">Yeni Rezervasyonlar</a> </li>
                        <li><a href="{{route('admin_reservation_list',['status'=>'accepted'])}}">Kabul Edilen Rezervasyonlar</a> </li>
                        <li><a href="{{route('admin_reservation_list',['status'=>'canceled'])}}">İptal Edilen Rezervasyonlar</a> </li>
                        <li><a href="{{route('admin_reservation_list',['status'=>'completed'])}}">Tamamlanan Rezervasyonlar</a> </li>
                        <li><a href="{{route('admin_reservation_list',['status'=>'shipping'])}}">Paketlenen Rezervasyonlar</a> </li>
                    </ul>
                </li>
                <li><a href="{{route('admin_setting')}}"><i class="fa fa-th"></i> <span>Setting</span></a></li>
                <li><a href="{{route('admin_message')}}"><i class="fa fa-th"></i> <span>Contact Message</span></a></li>
                <li><a href="{{route('admin_review')}}"><i class="fa fa-th"></i> <span>Review</span></a></li>
                <li><a href="{{route('admin_faq')}}"><i class="fa fa-th"></i> <span>FAQ</span></a></li>
            </ul>
            <!-- //sidebar nav end -->
            <!-- toggle button start -->
            <a class="toggle-btn">
                <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
                <i class="fa fa-angle-double-right menu-collapsed__right"></i>
            </a>
            <!-- //toggle button end -->
        </div>
    </div>
    <!-- //sidebar menu end -->
</section>

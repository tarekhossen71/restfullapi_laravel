<template lang="">
    <div class="page-wrapper">
            <!-- START HEADER-->
            <header class="header">
                <div class="page-brand">
                    <a class="link" href="index.html">
                        <span class="brand">Admin
                            <span class="brand-tip">CAST</span>
                        </span>
                        <span class="brand-mini">AC</span>
                    </a>
                </div>
                <div class="flexbox flex-1">
                    <!-- START TOP-LEFT TOOLBAR-->
                    <ul class="nav navbar-toolbar">
                        <li>
                            <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                        </li>
                        <li>
                            <form class="navbar-search" action="javascript:;">
                                <div class="rel">
                                    <span class="search-icon"><i class="ti-search"></i></span>
                                    <input class="form-control" placeholder="Search here...">
                                </div>
                            </form>
                        </li>
                    </ul>
                    <!-- END TOP-LEFT TOOLBAR-->
                    <!-- START TOP-RIGHT TOOLBAR-->
                    <ul class="nav navbar-toolbar">
                        <li class="dropdown dropdown-inbox">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i>
                                <span class="badge badge-primary envelope-badge">9</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                                <li class="dropdown-menu-header">
                                    <div>
                                        <span><strong>9 New</strong> Messages</span>
                                        <a class="pull-right" href="mailbox.html">view all</a>
                                    </div>
                                </li>
                                <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                    <div>
                                        <a class="list-group-item">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="/public/assets/img/users/u1.jpg" />
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-strong"> </div>Jeanne Gonzalez<small class="text-muted float-right">Just now</small>
                                                    <div class="font-13">Your proposal interested me.</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="/public/assets/img/users/u2.jpg" />
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-strong"></div>Becky Brooks<small class="text-muted float-right">18 mins</small>
                                                    <div class="font-13">Lorem Ipsum is simply.</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="/public/assets/img/users/u3.jpg" />
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-strong"></div>Frank Cruz<small class="text-muted float-right">18 mins</small>
                                                    <div class="font-13">Lorem Ipsum is simply.</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="/public/assets/img/users/u4.jpg" />
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-strong"></div>Rose Pearson<small class="text-muted float-right">3 hrs</small>
                                                    <div class="font-13">Lorem Ipsum is simply.</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-notification">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o rel"><span class="notify-signal"></span></i></a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                                <li class="dropdown-menu-header">
                                    <div>
                                        <span><strong>5 New</strong> Notifications</span>
                                        <a class="pull-right" href="javascript:;">view all</a>
                                    </div>
                                </li>
                                <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                    <div>
                                        <a class="list-group-item">
                                            <div class="media">
                                                <div class="media-img">
                                                    <span class="badge badge-success badge-big"><i class="fa fa-check"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-13">4 task compiled</div><small class="text-muted">22 mins</small></div>
                                            </div>
                                        </a>
                                        <a class="list-group-item">
                                            <div class="media">
                                                <div class="media-img">
                                                    <span class="badge badge-default badge-big"><i class="fa fa-shopping-basket"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-13">You have 12 new orders</div><small class="text-muted">40 mins</small></div>
                                            </div>
                                        </a>
                                        <a class="list-group-item">
                                            <div class="media">
                                                <div class="media-img">
                                                    <span class="badge badge-danger badge-big"><i class="fa fa-bolt"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-13">Server #7 rebooted</div><small class="text-muted">2 hrs</small></div>
                                            </div>
                                        </a>
                                        <a class="list-group-item">
                                            <div class="media">
                                                <div class="media-img">
                                                    <span class="badge badge-success badge-big"><i class="fa fa-user"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="font-13">New user registered</div><small class="text-muted">2 hrs</small></div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user">
                            <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                                <img src="/public/assets/img/admin-avatar.png" />
                                <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                                <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                                <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                                <li class="dropdown-divider"></li>
                                <a class="dropdown-item" href="login.html"><i class="fa fa-power-off"></i>Logout</a>
                            </ul>
                        </li>
                    </ul>
                    <!-- END TOP-RIGHT TOOLBAR-->
                </div>
            </header>
            <!-- END HEADER-->
            <!-- START SIDEBAR-->
            <nav class="page-sidebar" id="sidebar">
                <div id="sidebar-collapse">
                    <div class="admin-block d-flex">
                        <div>
                            <img src="/public/assets/img/admin-avatar.png" width="45px" />
                        </div>
                        <div class="admin-info">
                            <div class="font-strong">James Brown</div><small>Administrator</small></div>
                    </div>
                    <ul class="side-menu metismenu">
                        <li>
                            <a class="active" href="index.html"><i class="sidebar-item-icon fa fa-th-large"></i>
                                <span class="nav-label">Dashboard</span>
                            </a>
                        </li>
                        <li class="heading">FEATURES</li>
                        <li>
                            <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                                <span class="nav-label">Basic UI</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-2-level collapse">
                                <li>
                                    <a href="colors.html">Colors</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="panels.html">Panels</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="alerts_tooltips.html">Alerts &amp; Tooltips</a>
                                </li>
                                <li>
                                    <a href="badges_progress.html">Badges &amp; Progress</a>
                                </li>
                                <li>
                                    <a href="lists.html">List</a>
                                </li>
                                <li>
                                    <a href="cards.html">Card</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- END SIDEBAR-->
            <div class="content-wrapper">
                <!-- START PAGE CONTENT-->
                <div class="page-content fade-in-up">
                    <router-view></router-view>
                </div>
                <!-- END PAGE CONTENT-->
                <footer class="page-footer">
                    <div class="font-13">2024 © <b>AdminCAST</b> - All rights reserved.</div>
                    <a class="px-4" href="">CODERS</a>
                    <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
                </footer>
            </div>
        </div>
</template>
<script>
export default {
    
}
</script>
<style lang="">
    
</style>
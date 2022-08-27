<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('bsb/images/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bhayu
                <span class="label bg-light-blue">Admin</span>
            </div>
            <div class="email">bhayufebri@gmail.com</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <!-- <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li> -->
                    <li>
                        <a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                class="material-icons">input</i>Sign Out</a>


                        <form id="logout-form" action=# method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li id="menuHome">
                <a href="{{ route('payment.index')}}">
                    <i class="material-icons">home</i>
                    <span>Payment OY</span>
                </a>
            </li>

            <li id="menuSerpul">
                <a href="{{ route('serpul.index')}}">
                    <i class="material-icons">home</i>
                    <span>Serpul</span>
                </a>
            </li>





        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2020 <a href="javascript:void(0);">Bhayu Studio</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1
        </div>
    </div>
    <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
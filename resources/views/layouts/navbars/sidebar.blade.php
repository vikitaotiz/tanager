<div class="sidebar" data-image="{{ asset('light-bootstrap/img/sidebar-5.jpg') }}>
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/home" class="simple-text">
                TANAGER
            </a>
        </div>
        <ul class="nav">

            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>{{ __("Dashboard") }}</p>
                </a>
            </li>

            <li class="nav-item @if($activePage == 'frontend') active @endif">
                <a class="nav-link" href="{{route('frontend')}}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>{{ __("Front End (Menu)") }}</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#laravelExamples" @if($activeButton =='laravel') aria-expanded="true" @endif>
                    <i class="nc-icon nc-settings-gear-64">
                    </i>
                    <p>
                        {{ __('User Management') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse @if($activeButton =='laravel') show @endif" id="laravelExamples">
                    <ul class="nav">
                        <li class="nav-item @if($activePage == 'user') active @endif">
                            <a class="nav-link" href="{{route('profile.edit')}}">
                                <i class="nc-icon nc-single-02"></i>
                                <p>{{ __("User Profile") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'user-management') active @endif">
                            <a class="nav-link" href="{{route('user.index')}}">
                                <i class="nc-icon nc-circle-09"></i>
                                <p>{{ __("Users") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item @if($activePage == 'reservations') active @endif">
                <a class="nav-link" href="{{route('reservations.index')}}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>{{ __("Reservations") }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>

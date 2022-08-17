<header class="main-header">
    <a href="#" class="logo">
        <span class="logo-mini"><b>TK</b></span>
        <span class="logo-lg"><b>{{ config('app.name') }}</b></span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('AdminLTE-2/dist/img/user2-160x160.jpg') }}" class="user-image"
                            alt="User Image">
                        <span class="hidden-xs">{{ Auth()->user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="{{ asset('AdminLTE-2/dist/img/user2-160x160.jpg') }}" class="img-circle"
                                alt="User Image">
                            <p>
                                {{ Auth()->user()->name }}
                                <small>{{ Auth()->user()->email }}</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profil</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat"
                                    onclick="document.getElementById('logout-form').submit()">
                                    Keluar
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<form action="{{ route('logout') }}" method="post" style="display: none" id="logout-form">
    @csrf
</form>
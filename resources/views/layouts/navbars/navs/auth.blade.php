<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> {{ $navName }} </a>

        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="mr-auto nav navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class=""></i>
                        <span class="d-lg-none">{{ __('') }}</span>
                    </a>
                </li>
                <li class="dropdown nav-item">
                    
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="#">{{ __('') }}</a>
                        <a class="dropdown-item" href="#">{{ __('') }}</a>
                        <a class="dropdown-item" href="#">{{ __('') }}</a>
                        <a class="dropdown-item" href="#">{{ __('') }}</a>
                        <a class="dropdown-item" href="#">{{ __('') }}</a>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class=""></i>
                        <span class="">&nbsp;{{ __('') }}</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href=" {{route('profile.edit') }} ">
                        <span class="no-icon">{{ __('Account') }}</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="no-icon">{{ __('Options') }}</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('profile.edit')}}">{{ __('Profile') }}</a>
                        <a class="dropdown-item" href="{{route('schools.index')}}">{{ __('View Schools') }}</a>
                        <a class="dropdown-item" href="{{route('questions.upload')}}">{{ __('Upload Questions') }}</a>
                        <a class="dropdown-item" href="#">{{ __('') }}</a>
                        <div class="divider"></div>
                        <a class="dropdown-item" href="#">{{ __('') }}</a>
                    </div>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Log out') }} </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
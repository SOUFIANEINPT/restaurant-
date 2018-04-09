<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          {{ _('Home ') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
           @auth
           <li><a class="nav-link {{ active('table.index') }}"  href="{{ route('table.index') }}">{{ __('Tables') }}</a></li>
           <li><a class="nav-link {{ active('reserve.index') }}"  href="{{ route('table.index') }}">{{ __('My reservations') }}</a></li>
           <li><a class="nav-link {{ active('facture.index') }}"  href="{{ route('table.index') }}">{{ __('Factures') }}</a></li>    
           @can('admin')
               <li><a class="nav-link {{ active('admin.create') }}"  href="{{ route('admin.create') }}">{{ __('Creat User') }}</a></li>
               <li><a class="nav-link {{ active('admin.index') }}"  href="{{ route('admin.index') }}">{{ __('Users') }}</a></li>
               @endcan
           @endauth
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                  <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>

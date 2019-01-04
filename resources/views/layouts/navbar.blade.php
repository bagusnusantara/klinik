<header id="header">
  <div class="header-top">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-sm-6 col-4 header-top-left">
          <a href="tel:+9530123654896"><span class="lnr lnr-phone-handset"></span> <span class="text"><span class="text">+953 012 3654 896</span></span></a>
          <a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text"><span class="text">support@colorlib.com</span></span></a>
        </div>
        <div class="col-lg-6 col-sm-6 col-8 header-top-right">
          <!-- Authentication Links -->

        <!-- <a href="{{ url('logout') }}" class="primary-btn text-uppercase">Logout</a> -->
        </div>
      </div>
    </div>
</div>
  <div class="container main-menu">
    <div class="row align-items-center justify-content-between d-flex">
      <div id="logo">
        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-has-children"><a href="">Dashboard</a>
            <!-- <ul>
                <li><a href="elements.html">Keluhan</a></li>
              <li class="menu-has-children"><a href="">Diagnosis</a>
                <ul>
                  <li><a href="#">Isi Diagnosis</a></li>
                  <li><a href="#">Isi Tabel TPR</a></li>
                </ul>
              </li>
            </ul> -->
          </li>
          <li><a href="{{ url('Periksa')}}">Periksa</a></li>
          <li><a href="{{ url('RekamMedis')}}">Rekam Medis</a></li>
          <li>@guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a  class="menu-has-children" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul>
                        <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </li>
                  </ul>

              </li>
          @endguest</li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </div>
</header><!-- #header -->

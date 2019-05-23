<div class="uk-visible@s  uk-preserve-color" style="background-color: #212121;">

    <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky uk-navbar-transparent trsp; cls-inactive: uk-navbar-transparent uk-light; top: 200">

        <nav class="uk-navbar-container">
            <div class="uk-container uk-container-expand">
                <div uk-navbar>
                    <div class="uk-navbar-left">
                        <a href="" class="uk-navbar-item uk-logo">
                          <img src="{{asset('img/logo-prosperindo-white.png')}}" class="logo" alt="">
                        </a>
                    </div>
                    <ul class="uk-navbar-nav uk-margin-medium-left">
                        <li class="uk-active"><a href="#">Home</a></li>
                        <li><a href="#">About US</a></li>
                        <li><a href="#">TanaNaga</a></li>
                        <li><a href="#">GoloMori</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="uk-hidden@s  uk-preserve-color" style="background-color: #212121;">

    <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky uk-navbar-transparent trsp; cls-inactive: uk-navbar-transparent uk-light; top: 200">

        <nav class="uk-navbar-container">
            <div class="uk-container uk-container-expand">
                <div uk-navbar>
                  <div class="uk-navbar-left">
                      <a class="uk-navbar-toggle uk-light" href="#" uk-toggle="target: #offcanvas-nav-primary">
                          <span uk-navbar-toggle-icon></span>
                      </a>
                  </div>
                  <div class="uk-navbar-center">
                    <a href="" class="uk-navbar-item uk-logo">
                      <img src="{{asset('img/logo-prosperindo-white.png')}}" class="logo" alt="">
                    </a>
                  </div>
                </div>
            </div>
        </nav>
    </div>
</div>


<div id="offcanvas-nav-primary" uk-offcanvas="mode: push; overlay: true">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">

        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
            <li class="uk-active"><a href="#">Home</a></li>
            <li class="uk-nav-header">About US</li>
            <li class="uk-nav-header">TanaNaga</li>
            <li class="uk-nav-header">GoloMori</li>
            <li class="uk-nav-header">Contact Us</li>
        </ul>

    </div>
</div>

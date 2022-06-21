<header id="header" class="full-header transparent-header dark" data-sticky-class="not-dark" data-responsive-class="not-dark">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="{{ route('home') }}" class="standard-logo" data-dark-logo="/assets/img/logo-dark.png"><img src="/assets/img/logo.png" alt="Canvas Logo"></a>
                    <a href="{{ route('home') }}" class="retina-logo" data-dark-logo="/assets/img/logo-dark@2x.png"><img src="/assets/img/logo@2x.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <div class="header-misc">
                    <a href="#" class="button bg-white text-dark button-light button-rounded color"><i class="icon-call"></i>+993 61 387036</a>
                </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu not-dark with-arrows">

                    <ul class="menu-container not-dark">
                        <li class="menu-item current"><a class="menu-link" href="{{ route('home') }}"><div>Baş sahypa</div></a></li>
                        <li class="menu-item mega-menu"><a class="menu-link" href="#"><div>Hosting</div></a>
                            <div class="mega-menu-content mega-menu-style-2 border-top-0">
                                <div class="container">
                                    <div class="row">
                                        <ul class="sub-menu-container mega-menu-column col-lg-3">
                                            <li class="menu-item">
                                                <div class="widget">
                                                    <div class="feature-box not-dark fbox-center mb-0">
                                                        <div class="fbox-icon mb-4">
                                                            <img src="{{ asset('assets/img/svg/web.svg')}}" class="rounded-0 bg-transparent text-left" alt="Image" style="width: 52px;">
                                                        </div>
                                                        <div class="fbox-content">
                                                            <h3 class="font-weight-medium"><a href="{{ route('service') }}">Web Hosting</a></h3>
                                                            <p class="d-none d-lg-block mb-0 font-weight-light">Aýry-aýry adamlara we guramalara Bütindünýä Kerebi web sahypasyna girmäge mümkinçilik berýän internet hosting hyzmatynyň bir görnüşidir.</p>
                                                            <a href="single-service.html" class="btn btn-link mt-2 color p-0">Birnäçe maglumat &#8250;</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="sub-menu-container mega-menu-column col-lg-3">
                                            <li class="menu-item">
                                                <div class="widget">
                                                    <div class="feature-box not-dark fbox-center mb-0">
                                                        <div class="fbox-icon mb-4">
                                                            <img src="{{ asset('assets/img/svg/cloud.svg')}}" class="rounded-0 bg-transparent text-left" alt="Image" style="width: 52px;">
                                                        </div>
                                                        <div class="fbox-content">
                                                            <h3 class="font-weight-medium"><a href="{{ route('service') }}">Cloud Hosting</a></h3>
                                                            <p class="d-none d-lg-block mb-0 font-weight-light">Paýlaşylan hostingden has köp peýdaly bulut hosting teklipleri, birnäçe serweriň çeşmelerini ulanmaga mümkinçilik berýär.</p>
                                                            <a href="single-service.html" class="btn btn-link mt-2 color p-0">Birnäçe maglumat &#8250;</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="sub-menu-container mega-menu-column col-lg-3">
                                            <li class="menu-item">
                                                <div class="widget">
                                                    <div class="feature-box not-dark fbox-center mb-0">
                                                        <div class="fbox-icon mb-4">
                                                            <img src="{{ asset('assets/img/svg/dedicated.svg')}}" class="rounded-0 bg-transparent text-left" alt="Image" style="width: 52px;">
                                                        </div>
                                                        <div class="fbox-content">
                                                            <h3 class="font-weight-medium"><a href="{{ route('service') }}">Dedicated Hosting</a></h3>
                                                            <p class="d-none d-lg-block mb-0 font-weight-light">Bagyşlanan serwer ýa-da dolandyrylýan hosting hyzmaty, müşderiniň hiç kim bilen paýlaşylmadyk ähli serweri kärendesine alýan internet hostinginiň bir görnüşidir.</p>
                                                            <a href="single-service.html" class="btn btn-link mt-2 color p-0">Birnäçe maglumat &#8250;</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="sub-menu-container mega-menu-column col-lg-3">
                                            <li class="menu-item">
                                                <div class="widget">
                                                    <div class="feature-box not-dark fbox-center mb-0">
                                                        <div class="fbox-icon mb-4">
                                                            <img src="{{ asset('assets/img/svg/shared.svg')}}" class="rounded-0 bg-transparent text-left" alt="Image" style="width: 52px;">
                                                        </div>
                                                        <div class="fbox-content">
                                                            <h3 class="font-weight-medium"><a href="{{ route('service') }}">Shared Hosting</a></h3>
                                                            <p class="d-none d-lg-block mb-0 font-weight-light">Paýlaşylan web hosting hyzmaty, köp web sahypasy internete birikdirilen bir web serwerinde ýaşaýan web hosting hyzmatyny aňladýar.</p>
                                                            <a href="single-service.html" class="btn btn-link mt-2 color p-0">Birnäçe maglumat &#8250;</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="{{ route('services') }}"><div>Hyzmatlar</div></a></li>
                        <li class="menu-item mega-menu"><a class="menu-link" href="{{ route('about-us') }}"><div>Biz Barada</div></a></li>
                        <li class="menu-item mega-menu">
                            <a class="menu-link" href="#"><div>Habarlaşmak</div></a>
                            <div class="mega-menu-content mega-menu-style-2">
                                <div class="container ">
                                    <div class="row">
                                        <ul class="sub-menu-container mega-menu-column col-lg-3">
                                            <li class="menu-item">
                                                <div class="widget">

                                                    <h4 style="color:rgba(0,0,0,0.8)">Biziň Salgymyz</h4>

                                                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3cb6623204820ffa13352f34823e0330a3ccf0288576465fa18af803983a832c&amp;source=constructor" width="100%" height="350"></iframe>

                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="sub-menu-container mega-menu-column col-lg-6">
                                            <li class="menu-item">
                                                <div class="widget">

                                                    <h4 style="color:rgba(0,0,0,0.8)">Bize e-poçta iberiň</h4>

                                                    <div class="form-widget" data-loader="button">
                                                        <div class="form-result"></div>

                                                        <form class="row mb-0" name="template-contactform" action="{{ route('feedback') }}" method="POST">
                                                            @csrf
                                                            <div class="col-md-6 form-group">
                                                                <input type="text" name="name" class="form-control required" placeholder="Adyňyz">
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <input type="email" name="email" class="required email form-control" placeholder="E-Poçta">
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <input type="text" name="subject" class="required form-control" placeholder="Temaňyz">
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <input type="text" name="phone_number" class="form-control" placeholder="Telefon belgi">
                                                            </div>

                                                            <div class="w-100"></div>

                                                            <div class="col-12 form-group">
                                                                <textarea class="required form-control" name="message" rows="3" cols="30" placeholder="Goşmaça maglumat üçin"></textarea>
                                                            </div>
                                                            <div class="col-12 form-group">
                                                                <button class="button button-3d button-small m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" >Ugratmak</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="sub-menu-container mega-menu-column col-lg-3">
                                            <li class="menu-item">
                                                <div class="widget" style="color:rgba(0,0,0,0.8)">

                                                    <h4 style="color:rgba(0,0,0,0.8)">Biziň Baş Binamyz</h4>

                                                    <address>
                                                        <strong>Salgymyz:</strong><br>
                                                        Aşgabat ş. N.Andalyp köç.<br>
                                                        169-njy u.ý.j-nyň 3-nji öýi<br>
                                                    </address>
                                                    <abbr title="Phone Number"><strong>Telefon:</strong></abbr> (+993)61 38-70-36<br>
                                                    <abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
                                                    <abbr title="Email Address"><strong>E-Poçta:</strong></abbr> hosting@tm.com
                                                    <div class="bottommargin-sm"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>

                </nav><!-- #primary-menu end -->

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->

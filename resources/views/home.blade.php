@extends('layouts.layout')
@section('content')
<section id="slider" class="slider-element bg-angle include-header">

    <!-- Slider Background Map
    ============================================= -->
    <img class="img-map parallax position-absolute" src="{{ asset('assets/img/svg/map-light.svg')}}') }}" alt="Image" data-0="opacity: 0.05;margin-top:0px" data-800="opacity: 0.5;margin-top:150px">

    <!-- Slider Background Cloud
    ============================================= -->
    <div class="cloud-wrap">
        <div class="c1"><div class="cloud"></div></div>
        <div class="c2"><div class="cloud"></div></div>
        <div class="c3"><div class="cloud"></div></div>
        <div class="c4"><div class="cloud"></div></div>
        <div class="c5"><div class="cloud"></div></div>
    </div>

    <!-- Slider Titiles
    ============================================= -->
    <div class="vertical-middle container dark">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-5">
                <div class="slider-title">
                    <h2 class="text-white text-rotater mb-3" data-separator="," data-rotate="fadeIn" data-speed="3500">Build your own<br> <span class="t-rotate text-white">Awesome,Beautiful,Great</span> Website.</h2>
                    <p>Wirtual çözgütler üçin ahyrky liderlik ukyplaryny dramatiki taýdan birleşdiriň. Wirtual prosesi gowulaşdyrmak däl-de, ýokary girdejili pikirleri ynamly üýtgediň.</p>
                </div>
                <a href="{{ route('about-us') }}" class="button bg-white text-dark button-light button-rounded button-large color ml-0">Has giňişleýin<i class="icon-line-arrow-right font-weight-semibold"></i></a>
            </div>
            <div class="col-md-5 d-none d-md-block">
                <img src="{{ asset('assets/img/3.png') }}" alt="Image">
            </div>
        </div>
    </div>

</section><!-- #slider end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap py-5">

        <div class="container clearfix">

            <!-- Slider negetive Box
            ============================================= -->
            <div class="row justify-content-center slider-box-wrap clearfix">
                <div class="col-10">
                    <div class="slider-bottom-box">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-4 mb-3 mb-lg-0">
                                <h2 class="mb-3 h1 font-weight-light">Aýratynlyklar</h2>
                                <p class="font-weight-normal text-muted mb-0">IT infrastrukturany ygtybarly bulut gurşawyna ýerleşdiriň. Hasaplaýyş mümkinçilikleriňizi gowulandyryň we bulut çözgütleri bilen IT-e az sarp ediň.</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <ul class="iconlist m-0">
                                    <li><img src="{{ asset('assets/img/svg/checked.svg')}}" width="20" height="20" alt="Image" class="mr-2">Elýeterli Çözgütler.</li>
                                    <li class="pt-3"><img src="{{ asset('assets/img/svg/checked.svg')}}" width="20" height="20" alt="Image" class="mr-2">Tejribeli Gurluşy.</li>
                                    <li class="pt-3"><img src="{{ asset('assets/img/svg/checked.svg')}}" width="20" height="20" alt="Image" class="mr-2">Dolandyryş Hyzmatlary.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <ul class="iconlist m-0">
                                    <li class="pt-3 pt-lg-0"><img src="{{ asset('assets/img/svg/checked.svg')}}" width="20" height="20" alt="Image" class="mr-2">Ýokary Mümkinçilikler</li>
                                    <li class="pt-3"><img src="{{ asset('assets/img/svg/checked.svg')}}" width="20" height="20" alt="Image" class="mr-2">Goşmaça Hyzmatlar</li>
                                    <li class="pt-3"><img src="{{ asset('assets/img/svg/checked.svg')}}" width="20" height="20" alt="Image" class="mr-2">Ýönekeý Dolandyryş</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section
            ============================================= -->
            <div class="heading-block center topmargin-lg mx-auto border-bottom-0 clearfix" style="max-width: 700px">
                <h2>Iň gowy Hyzmatlary size hödürleýäris.</h2>
                <p>Giňeldilen nokatlar bolmazdan köp funksiýaly shemalary başarnykly kabul ediň. Web-mümkinçilikli peýdalar üçin hyzmatdaşlyk çeşmelerini yzygiderli çekiň.</p>
            </div>
            <div class="row col-mb-50 mb-0 mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box not-dark">
                        <div class="fbox-icon">
                            <img src="{{ asset('assets/img/svg/web.svg')}}" class="rounded-0 bg-transparent text-left" alt="Image" style="height: 52px;">
                        </div>
                        <div class="fbox-content">
                            <h3 class="font-weight-medium text-dark">Web Hosting</h3>
                            <p class="font-weight-light">Aýry-aýry adamlara we guramalara Bütindünýä Kerebi web sahypasyna girmäge mümkinçilik berýän internet hosting hyzmatynyň bir görnüşidir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box not-dark">
                        <div class="fbox-icon">
                            <img src="{{ asset('assets/img/svg/cloud.svg')}}" class="rounded-0 bg-transparent text-left" alt="Image" style="height: 52px;">
                        </div>
                        <div class="fbox-content">
                            <h3 class="font-weight-medium text-dark">Cloud Hosting</h3>
                            <p class="font-weight-light">Paýlaşylan hostingden has köp peýdaly bulut hosting teklipleri, birnäçe serweriň çeşmelerini ulanmaga mümkinçilik berýär.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box not-dark">
                        <div class="fbox-icon">
                            <img src="{{ asset('assets/img/svg/dedicated.svg')}}" class="rounded-0 bg-transparent text-left" alt="Image" style="height: 52px;">
                        </div>
                        <div class="fbox-content">
                            <h3 class="font-weight-medium text-dark">Dedicated Hosting</h3>
                            <p class="font-weight-light">Bagyşlanan serwer ýa-da dolandyrylýan hosting hyzmaty, müşderiniň paýlaşylmadyk ähli serwerini kärendesine alýan internet hostinginiň bir görnüşidir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box not-dark">
                        <div class="fbox-icon">
                            <img src="{{ asset('assets/img/svg/shared.svg')}}" class="rounded-0 bg-transparent text-left" alt="Image" style="height: 52px;">
                        </div>
                        <div class="fbox-content">
                            <h3 class="font-weight-medium text-dark">Shared Hosting</h3>
                            <p class="font-weight-light">Paýlaşylan web hosting hyzmaty, köp web sahypasy internete birikdirilen bir web serwerinde ýaşaýan web hosting hyzmatyny aňladýar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box not-dark">
                        <div class="fbox-icon">
                            <img src="{{ asset('assets/img/svg/domain.svg')}}" class="rounded-0 bg-transparent text-left" alt="Image" style="height: 52px;">
                        </div>
                        <div class="fbox-content">
                            <h3 class="font-weight-medium text-dark">Domain Registration</h3>
                            <p class="font-weight-light">Taslamaňyzy güýçlendirmek üçin ajaýyp at tapyň. Domeniň elýeterliligini barlaň, dogry giňeltmäni saýlaň we ygtybarly üpjün edijiden web sahypasy üçin bir domen satyn alyň</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box not-dark">
                        <div class="fbox-icon">
                            <img src="{{ asset('assets/img/svg/activation.svg')}}" class="rounded-0 bg-transparent text-left" alt="Image" style="height: 52px;">
                        </div>
                        <div class="fbox-content">
                            <h3 class="font-weight-medium text-dark">Instant Activation</h3>
                            <p class="font-weight-light">Garaşylmadyk şowsuzlyklar ýüze çyksa, biziň bilen habarlaşyň we hünärmenler toparymyz 1 sagadyň dowamynda jogap berer.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Domain Section
        ============================================= -->
        <div class="section section-domain mt-4 mb-3" style="background: #F5F5F5 url('assets/demos/hosting/images/pattern-dark') repeat center center;">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-5">
                        <div class="heading-block mb-0 border-bottom-0 clearfix">
                            <h3 class="ls0 nott">Looking For Your Premium Domain?</h3>
                            <p class="mb-0">Competently recaptiualize multifunctional schemas without an expanded array of niches. Continually engage cooperative.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-lg-0">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" placeholder="Your New Domain Name" aria-label="Enter Domain Name">
                            <div class="input-group-append">
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option value="com" selected>.com</option>
                                    <option value="org">.org</option>
                                    <option value="net">.net</option>
                                    <option value="info">.info</option>
                                    <option value="us">.us</option>
                                </select>
                            </div>
                            <div class="input-group-append">
                                <button class="btn bg-color text-white dark">Search</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Loaction Section
        ============================================= -->
        <div class="section m-0 bg-transparent">
            <div class="container clearfix">
                <div class="heading-block center mt-0 mx-auto border-bottom-0 clearfix" style="max-width: 700px">
                    <h2>ýokary derejeli hyzmatlar siz bilen.</h2>
                    <p>Giňeldilen nokatlar bolmazdan, köp funksiýaly shemalary başarnykly kabul ediň. Web-mümkinçilikli peýdalar üçin hyzmatdaşlyk çeşmelerini yzygiderli çekiň.</p>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="heading-block mt-md-3 mt-0">
                            <div class="before-heading color">Biziň torlarmyz</div>
                            <h3 class=" nott ls0">6 TBPS kuwwaty we 140 maglumat merkezi global set</h3>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <ul class="iconlist ml-0">
                                    <li><img src="{{ asset('assets/img/flags/uk.png') }}" alt="Image"><a href="#">United Kingdom</a></li>
                                    <li><img src="{{ asset('assets/img/flags/us.png') }}" alt="Image"><a href="#">USA</a></li>
                                    <li><img src="{{ asset('assets/img/flags/br.png') }}" alt="Image"><a href="#">Brazil</a></li>
                                    <li><img src="{{ asset('assets/img/flags/sa.png') }}" alt="Image"><a href="#">South Africa</a></li>
                                    <li><img src="{{ asset('assets/img/flags/in.png') }}" alt="Image"><a href="#">India</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="iconlist ml-0">
                                    <li><img src="{{ asset('assets/img/flags/si.png') }}" alt="Image"><a href="#">Singapore</a></li>
                                    <li><img src="{{ asset('assets/img/flags/ja.png') }}" alt="Image"><a href="#">Japan</a></li>
                                    <li><img src="{{ asset('assets/img/flags/au.png') }}" alt="Image"><a href="#">Australia</a></li>
                                    <li><img src="{{ asset('assets/img/flags/ca.png') }}" alt="Image"><a href="#">Canada</a></li>
                                    <li><a href="#">See More..</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div id="hotspot-img" class="hotspot-img mt-2 responsive-hotspot-wrap">
                    <img src="{{ asset('assets/img/svg/map.png') }}" class="img-responsive" alt="Image">

                    <!-- Circle #1 -->
                    <div class="hot-spot" x="1970" y="830">
                        <div class="circle"></div>
                        <div class="tooltip"><p>singapore</p></div>
                    </div>
                    <!-- Circle #2 -->
                    <div class="hot-spot" x="330" y="522">
                        <div class="circle"></div>
                        <div class="tooltip"><p>San Fransisco</p></div>
                    </div>
                    <!-- Circle #3 -->
                    <div class="hot-spot" x="2350" y="1110">
                        <div class="circle"></div>
                        <div class="tooltip"><p>Sydney</p></div>
                    </div>
                    <!-- Circle #4 -->
                    <div class="hot-spot" x="1222" y="395">
                        <div class="circle"></div>
                        <div class="tooltip"><p>London</p></div>
                    </div>
                    <!-- Circle #5 -->
                    <div class="hot-spot" x="1800" y="760">
                        <div class="circle"></div>
                        <div class="tooltip"><p>Bangalore</p></div>
                    </div>
                    <!-- Circle #6 -->
                    <div class="hot-spot" x="2250" y="560">
                        <div class="circle"></div>
                        <div class="tooltip"><p>Tokyo</p></div>
                    </div>
                    <!-- Circle #7 -->
                    <div class="hot-spot" x="1366" y="1134">
                        <div class="circle"></div>
                        <div class="tooltip"><p>Cape Town</p></div>
                    </div>
                    <!-- Circle #8 -->
                    <div class="hot-spot" x="880" y="990">
                        <div class="circle"></div>
                        <div class="tooltip"><p>Brasilla</p></div>
                    </div>
                    <!-- Circle #8 -->
                    <div class="hot-spot" x="710" y="395">
                        <div class="circle"></div>
                        <div class="tooltip"><p>Toronto</p></div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Section
        ============================================= -->
        <div class="section bg-angle mt-0" style="background: #F9F9F9 url('demos/hosting/images/pattern-dark') repeat center center; padding: 80px 0">
            <div class="container clearfix">
                <div class="heading-block center mt-0 mx-auto border-bottom-0 clearfix" style="max-width: 750px">
                    <h2>Hosting siziň işiňizi hasam ýeňileşdirer</h2>
                    <p>Competently recaptiualize multifunctional schemas without an expanded array of niches. Continually engage cooperative sources vis-a-vis web-enabled benefits.</p>
                </div>

                <div class="row mb-2 align-items-stretch">

                    <div class="col-lg-8 col-md-8">

                        <div class="row align-items-stretch clearfix">
                            <div class="col-md-12">
                                <!-- vCPU Section -->
                                <div class="row align-items-stretch">
                                    <div class="col-md-8 col-sm-8">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="mb-4">vCPU</h4>
                                                </div>
                                                <!-- CPU Slider
                                                ============================================= -->
                                                <input class="range-slider-cpu" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 d-none d-sm-flex card bg-color text-white text-center mb-4">
                                        <div class="card-body">
                                            <!-- CPU Price Value
                                            ============================================= -->
                                            <h2 class="cpu-price text-white mb-0 font-weight-bold"></h2>
                                            <p class="card-text mb-0" style="opacity: .8;">$10 <span class="font-italic">per Core/vCPU</span></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- RAM Section -->
                                <div class="row align-items-stretch">
                                    <div class="col-md-8 col-sm-8">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="mb-4">Ram</h4>
                                                </div>
                                                <!-- RAM Slider
                                                ============================================= -->
                                                <input class="range-slider-ram" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 d-none d-sm-flex card bg-color text-white text-center mb-4">
                                        <div class="card-body">
                                            <!-- RAM Proce Value
                                            ============================================= -->
                                            <h2 class="ram-price text-white mb-0 font-weight-bold"></h2>
                                            <p class="card-text mb-0" style="opacity: .8;">$8 <span class="font-italic">per GB/RAM</span></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Storage Section -->
                                <div class="row align-items-stretch">
                                    <div class="col-md-8 col-sm-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="mb-4">Storage</h4>
                                                </div>
                                                <!-- Storage Slider
                                                ============================================= -->
                                                <input class="range-slider-storage" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 d-none d-sm-flex card bg-color text-white text-center">
                                        <div class="card-body">
                                            <!-- Storage Price Value
                                            ============================================= -->
                                            <h2 class="storage-price text-white mb-0 font-weight-bold"></h2>
                                            <p class="card-text mb-0" style="opacity: .8;">$0.5 <span class="font-italic">per GB/Storage</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Price Area -->
                    <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
                        <div class="card text-center">
                            <div class="card-body py-4">
                                <h3 class="card-title font-weight-normal">Your Plan</h3>
                                <!-- Price Value -->
                                <div class="pricing-price font-weight-semibold py-2"></div>
                                <p class="card-text pricing-sub">Billed Monthly</p>
                            </div>
                            <div class="line my-1"></div>
                            <div class="card-body py-4">
                                <ul class="iconlist ml-0" style="opacity: .8">
                                    <li>Un-Mitered Bandwith</li>
                                    <li>2 Dedicated IPs</li>
                                    <li>Shared SSL certificate</li>
                                    <li>30 Days Money Back</li>
                                </ul>
                                <a href="#" class="button button-rounded button-large ls0 font-weight-normal m-0 nott">Order Now</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="clear"></div>

                <div class="row mt-5 clearfix">
                    <div class="col-lg-3 col-sm-6">
                        <h4 class="font-weight-medium mb-3">Free Includes:</h4>
                        <ul class="iconlist price-compare mb-2">
                            <li class="font-weight-light">Unmetered Mitigation of DDoS</li>
                            <li class="font-weight-light">Global CDN</li>
                            <li class="font-weight-light">Shared SSL certificate</li>
                            <li class="font-weight-light">I'm Under Attack™ mode</li>
                            <li class="font-weight-light">Access to account Audit Logs</li>
                        </ul>
                        <a href="single-service.html" class="btn btn-link mt-2 font-weight-normal color p-0" style="font-size: 14px">All Features &#8250;</a>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-4 mt-sm-0">
                        <h4 class="font-weight-medium mb-3">Pro Includes:</h4>
                        <ul class="iconlist price-compare mb-2">
                            <li class="font-weight-light">100 GB of disk space</li>
                            <li class="font-weight-light">1000 GB/mo data transfer</li>
                            <li class="font-weight-light">1 domain + 100 subdomains</li>
                            <li class="font-weight-light">10 site pages</li>
                            <li class="font-weight-light">5 email addresses</li>
                            <li class="font-weight-light">Site design tools</li>
                            <li class="font-weight-light">Account access for colleagues/friends</li>
                        </ul>
                        <a href="single-service.html" class="btn btn-link mt-2 font-weight-normal color p-0" style="font-size: 14px">All Features &#8250;</a>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0">
                        <h4 class="font-weight-medium mb-3">Business Includes:</h4>
                        <ul class="iconlist price-compare mb-2">
                            <li class="font-weight-light">Unlimited site pages</li>
                            <li class="font-weight-light">10 email addresses</li>
                            <li class="font-weight-light">500 GB of disk space</li>
                            <li class="font-weight-light">5000 GB/mo data transfer</li>
                            <li class="font-weight-light">1 domain + 500 subdomains</li>
                            <li class="font-weight-light">Secure FTP File Manager</li>
                            <li class="font-weight-light">Canvas blogging</li>
                            <li class="font-weight-light">PHP 5.3.6, Perl 5.8.7, MySQL 5.1</li>
                        </ul>
                        <a href="single-service.html" class="btn btn-link mt-2 font-weight-normal color p-0" style="font-size: 14px">All Features &#8250;</a>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0">
                        <h4 class="font-weight-medium mb-3">Advanced Includes:</h4>
                        <ul class="iconlist price-compare mb-2">
                            <li class="font-weight-light">20 email addresses</a></li>
                            <li class="font-weight-light">Unlimited disk space</a></li>
                            <li class="font-weight-light">Unlimited data transfer</a></li>
                            <li class="font-weight-light">Private registration</a></li>
                            <li class="font-weight-light">Named solution and customer success engineers Access to China data centers (additional cost)</a></li>
                            <li class="font-weight-light">30-day satisfaction guarantee</a></li>
                            <li class="font-weight-light">24/7 phone, chat and online support</a></li>

                        </ul>
                        <a href="single-service.html" class="btn btn-link mt-2 font-weight-normal color p-0" style="font-size: 14px">All Features &#8250;</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Addition Service Section
        ============================================= -->
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="before-heading">Other	 Additional Services</div>
                    <h3>Highly Available Services</h3>
                    <div class="row col-mb-30">
                        <div class="col-md-6">
                            <div class="feature-box p-5 media-box" style="border-radius: 6px; box-shadow: 0 2px 4px rgba(3,27,78,.1); border: 1px solid #e5e8ed;">
                                <div class="fbox-media">
                                    <img src="{{ asset('assets/img/svg/balancing.svg')}}" style="width: 42px;" alt="Image">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3 class="ls0">GÖRNÜŞ</h3>
                                    <p class="mt-2">Ölçemek ukyby, şübhesiz, bulut hasaplamagyň iň möhüm faktorydyr. Geografiki derejäňizi giňeldýärmi ýa-da köp sanly ulanyjy bilen iş salyşýarmy, web programmalary serwerleriň sanyny köpeltmek, enjam güýjüni ýokarlandyrmak ýa-da ikisiniň garyndysy bilen aňsatlyk bilen ulaldylyp bilner! Bu, adaty serwer hostinginde (meselem, tor konfigurasiýasy, serwer ýük balansy we ş.m.).</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-box p-5 media-box" style="border-radius: 6px; box-shadow: 0 2px 4px rgba(3,27,78,.1); border: 1px solid #e5e8ed;">
                                <div class="fbox-media">
                                    <img src="{{ asset('assets/img/svg/location.svg')}}" style="width: 42px;" alt="Image">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3 class="ls0">GYSGAÇA HYZMATLAR WE ÇEŞMELER</h3>
                                    <p class="mt-2">Içerki hyzmatlar we çeşmeler döredijilere islendik web programmalaryny netijeli ösdürmek, düzmek, synagdan geçirmek we ýerleşdirmek üçin çeýeligi berýär. Awtomatiki synagdan we serwer bilen üpjün etmekden başlap, web gözegçiligine we DevOps-a çenli, programma üpjünçiligini önümçilik gurşawyna nol ýakyn wagtda iş wagty aňsatlaşdyrýar. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-box p-5 media-box" style="border-radius: 6px; box-shadow: 0 2px 4px rgba(3,27,78,.1); border: 1px solid #e5e8ed;">
                                <div class="fbox-media">
                                    <img src="{{ asset('assets/img/svg/ssl.svg')}}" style="width: 42px;" alt="Image">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3 class="ls0">Tygyşytlylyk</h3>
                                    <p class="mt-2">Bu makalanyň başynda belläp geçişimiz ýaly, serwerler we maglumat merkezleri ýaly fiziki baýlyklar hökmany däl ýaly, bulut hasaplamagy bilen öňdebaryjy maýa goýumlary ýok. Bu kesgitlenen çykdajylar aýrylansoň, şeýle enjamlary abatlamak we oturtmak üçin çykdajylar azalýar.Şeýlelik bilen, çykdajylar ulanyş mukdaryna bagly bolup, kärhanalara kiçi we kiçi göwrümli işe başlamaga mümkinçilik döredýär.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-box p-5 media-box" style="border-radius: 6px; box-shadow: 0 2px 4px rgba(3,27,78,.1); border: 1px solid #e5e8ed;">
                                <div class="fbox-media">
                                    <img src="{{ asset('assets/img/svg/team.svg')}}" style="width: 42px;" alt="Image">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3 class="ls0">Nädip kömek edip bileris:</h3>
                                    <p class="mt-2">“Alpha Reply” -yň maksady, bulut ösen çözgütleri bermek üçin sanly üýtgeşmeler bilen maliýe guramalaryna kömek etmekdir. Çykdajylary azaltmak, köpçülikleýin web trafigini dolandyrmak ýa-da hatda noldan programma gurmak bolsun, iň amatly strategiýany tapmaga we firmaňyzyň iş mümkinçiliklerine görä web programmaňyzy gowulaşdyrmaga ýa-da gurmaga kömek edýäris.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- #content end -->
@endsection

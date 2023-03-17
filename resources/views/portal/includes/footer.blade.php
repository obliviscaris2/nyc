    {{-- For Footer --}}
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-5">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>{{ __('Find us') }}</h4>
                                <span> {{ __($sitesetting->office_address) }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>{{ __('Call us') }}</h4>
                                <span> {{ $sitesetting->office_contact }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>{{ __('Mail us') }}</h4>
                                <span> {{ $sitesetting->office_mail }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">

                                <a href="{{ url('/') }}"><img src="{{ asset($sitesetting->main_logo) }}"
                                        class="img-fluid" alt="logo"></a>
                            </div>
                            {{-- <div class="footer-text">


                                <p>We are Aashatech Company.</p>
                            </div> --}}
                            <div class="footer-social-icon">
                                <span>{{ __('Follow us') }}</span>
                                <a href="https://www.facebook.com/ktm.logistic/"><i
                                        class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>{{ __('Useful Links') }}</h3>
                            </div>
                            <ul>
                                <li><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
                                <li><a href="{{ route('render_about') }}">{{ __('Introduction') }}</a></li>
                                <li><a href="{{ route('render_team') }}">{{ __('Employee Details') }}</a></li>
                                <li><a href="{{ route('render_notice') }}">{{ __('Notice') }}</a></li>
                                <li><a href="{{ route('render_publication') }}">{{ __('Publication') }}</a></li>
                                <li><a href="{{ route('render_tender') }}">{{ __('Tender') }}</a></li>
                                <li><a href="{{ route('render_rules') }}">{{ __('Acts & Regulations') }}</a></li>
                                <li><a href="{{ route('render_directot') }}">{{ __('Directory') }}</a></li>
                                <li><a href="{{ route('render_press') }}">{{ __('Press Release') }}</a></li>
                                <li><a href="{{ route('render_news') }}">{{ __('News') }}</a></li>
                                <li><a href="{{ route('render_other') }}">{{ __('Others') }}</a></li>
                                <li><a href="{{ route('render_images') }}">{{ __('Photo Gallery') }}</a></li>
                                <li><a href="{{ route('render_videos') }}">{{ __('Video Gallery') }}</a></li>
                                <li><a href="{{ route('contact_page') }}">{{ __('Contact') }}</a></li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>{{ __('Important links') }}</h3>
                            </div>
                            <ul class="quicknepal_link">
                                @foreach ($links as $link)
                                    <li><a href="{{ $link->link_url }}"
                                            target="_blank">{{ $link->link_title }}</a></li>
                                @endforeach



                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2021, All Right Reserved <a href="https:aashatech.com">Aasha Tech Pvt.
                                    Ltd.</a></p>
                        </div>
                    </div>
                    {{-- <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>



{{-- 
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>{{ __("Find us") }}</h4>
                                <span> {{ __($sitesetting->office_address) }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>{{ __("Call us") }}</h4>
                                <span> {{ $sitesetting->office_contact }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>{{ __("Mail us") }}</h4>
                                <span> {{ $sitesetting->office_mail }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">

                                <a href="{{ url('/') }}"><img src="{{ asset($sitesetting->main_logo) }}"
                                        class="img-fluid" alt="logo"></a>
                            </div>

                            <div class="footer-social-icon">
                                <span>{{ __("Follow us") }}</span>
                                <a href="https://www.facebook.com/ktm.logistic/"><i
                                        class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>{{ __("Useful Links") }}</h3>
                            </div>
                            <ul>
                                <li><a href="{{ url('/') }}">{{ __("Home") }}</a></li>
                                <li><a href="{{ route('render_about') }}">{{ __("Introduction") }}</a></li>
                                <li><a href="{{ route('render_team') }}">{{ __("Employee Details") }}</a></li>
                                <li><a href="{{ route('render_notice') }}">{{ __("Notice") }}</a></li>
                                <li><a href="{{ route('render_publication') }}">{{ __("Publication") }}</a></li>
                                <li><a href="{{ route('render_tender') }}">{{ __("Tender") }}</a></li>
                                <li><a href="{{ route('render_rules') }}">{{ __("Acts & Regulations") }}</a></li>
                                <li><a href="{{ route('render_directot') }}">{{ __("Directory") }}</a></li>
                                <li><a href="{{ route('render_press') }}">{{ __("Press Release") }}</a></li>
                                <li><a href="{{ route('render_news') }}">{{ __("News") }}</a></li>
                                <li><a href="{{ route('render_other') }}">{{ __("Others") }}</a></li>
                                <li><a href="{{ route('render_images') }}">{{ __("Photo Gallery") }}</a></li>
                                <li><a href="{{ route('render_videos') }}">{{ __("Video Gallery") }}</a></li>
                                <li><a href="{{ route('contact_page') }}">{{ __("Contact") }}</a></li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>{{ __("Important links") }}</h3>
                            </div>
                            <ul class="quicknepal_link">
                                @foreach ($links as $link )
                                <li><a href="{{ $link->link_url }}" target="_blank">{{ $link->link_title }}</a></li>
                                @endforeach
                            
                                

                            </ul>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2021, All Right Reserved <a href="https:aashatech.com">Aasha Tech Pvt.
                                    Ltd.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 --}}

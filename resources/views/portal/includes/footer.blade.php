

@php
$sitesetting = App\Models\SiteSetting::first();
$links = App\Models\Link::first()->get()->take(5);

@endphp

    {{-- For Footer --}}

    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span> {{ $sitesetting->office_address }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span> {{ $sitesetting->office_contact }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
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

                                <a href="{{ url('/') }}"><img src="{{ asset('uploads/'.$sitesetting->main_logo) }}"
                                        class="img-fluid" alt="logo"></a>
                            </div>
                            {{-- <div class="footer-text">


                                <p>We are Aashatech Company.</p>
                            </div> --}}
                            <div class="footer-social-icon">
                                <span>Follow us</span>
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
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="{{ url('/') }}">गृहपृष्ठ</a></li>
                                <li><a href="{{ route('render_about') }}">कार्यालयकाे परिचय</a></li>
                                <li><a href="{{ route('render_team') }}">कर्मचारी विवरण</a></li>
                                <li><a href="{{ route('render_notice') }}">सुचना</a></li>
                                <li><a href="{{ route('render_publication') }}">प्रकाशन</a></li>
                                <li><a href="{{ route('render_tender') }}">बाेलपत्र</a></li>
                                <li><a href="{{ route('render_rules') }}">ऐन तथा नियमावली</a></li>
                                <li><a href="{{ route('render_directot') }}">निर्देशिका</a></li>
                                <li><a href="{{ route('render_press') }}">प्रेस विज्ञप्ति</a></li>
                                <li><a href="{{ route('render_news') }}">समाचार</a></li>
                                <li><a href="{{ route('render_other') }}">अन्य</a></li>
                                <li><a href="{{ route('render_images') }}">फाेटाे ग्यालेरी</a></li>
                                <li><a href="{{ route('render_videos') }}">भिडियाे ग्यालेरी</a></li>
                                <li><a href="{{ route('contact_page') }}">सम्पर्क</a></li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>महत्वपुर्ण लिंकहरू</h3>
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


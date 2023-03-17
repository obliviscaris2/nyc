<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

@include('portal.includes.head')

<body class="u-body u-xl-mode" data-lang="en">
    @include('portal.includes.nav')

    @yield('content')

    @include("portal.includes.footer")


    {{-- <footer class="u-clearfix u-footer u-palette-4-dark-1" id="sec-e2f2">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="800"
                data-image-height="418">
                <img src="images/National-Youth-Council-Nepal.png" class="u-logo-image u-logo-image-1">
            </a>
            <p class="u-align-center u-text u-text-1"> द्रुत लिङ्कहरू</p>
            <a href="https://nicepage.com/static-site-generator" class="u-image u-logo u-image-2"
                data-image-width="3000" data-image-height="2984">
                <img src="images/vectorstock_28525730.png?rand=1a1d" class="u-logo-image u-logo-image-2">
            </a>
            <ul class="u-align-center u-custom-list u-spacing-0 u-text u-text-2">
                <li style="padding-left: 0px;">
                    <div class="u-list-icon">
                        <div>❯</div>
                    </div>
                    <span class="u-text-body-color"></span>प्रधानमन्त्री तथा मन्त्रिपरिषद्को कार्यालय
                </li>
                <li style="padding-left: 0px;">
                    <div class="u-list-icon">
                        <div>❯</div>
                    </div> वित्त मन्त्रालय
                </li>
                <li style="padding-left: 0px;">
                    <div class="u-list-icon">
                        <div>❯</div>
                    </div>युवा तथा खेलकुद मन्त्रालय
                </li>
                <li style="padding-left: 0px;">
                    <div class="u-list-icon">
                        <div>❯</div>
                    </div>शिक्षा, विज्ञान मन्त्रालय र प्रविधि
                </li>
                <li style="padding-left: 0px;">
                    <div class="u-list-icon">
                        <div>❯</div>
                    </div>कृषि मन्त्रालय र पशुधन विकास
                </li>
                <li style="padding-left: 0px;">
                    <div class="u-list-icon">
                        <div>❯</div>
                    </div>श्रम, रोजगार तथा सामाजिक सुरक्षा मन्त्रालय
                </li>
                <li style="padding-left: 0px;">
                    <div class="u-list-icon">
                        <div>❯</div>
                    </div>स्वास्थ्य तथा जनसंख्या मन्त्रालय
                </li>
                <li style="padding-left: 0px;">
                    <div class="u-list-icon">
                        <div>❯</div>
                    </div> उद्योग, वाणिज्य तथा आपूर्ति मन्त्रालय
                </li>
                <li style="padding-left: 0px;">
                    <div class="u-list-icon">
                        <div>❯</div>
                    </div>राष्ट्रिय योजना आयोगको सचिवालय
                </li>
                <li style="padding-left: 0px;">
                    <div class="u-list-icon">
                        <div>❯</div>
                    </div>राष्ट्रिय सूचना तथा प्रविधि केन्द्र
                </li>
            </ul>
            <p class="u-align-center u-text u-text-3"> नेपाल सरकार&nbsp;<br>राष्ट्रिय युवा परिषद्प्रतिलिपि अधिकार
                ©&nbsp;2023&nbsp;राष्ट्रिय युवा परिषद्
            </p>
            <p class="u-align-center u-text u-text-4"> नेपालमा पहिलो पटक युवा विकासका लागि सरकारी स्तरबाट तयार</p>
            <div
                class="u-border-1 u-border-white u-expanded-width u-line u-line-horizontal u-opacity u-opacity-50 u-line-1">
            </div>
            <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
                <a class="u-social-url" title="facebook" target="_blank" href=""><span
                        class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link"
                            preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-59b6"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                            id="svg-59b6">
                            <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF"
                                d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z">
                            </path>
                        </svg></span>
                </a>
                <a class="u-social-url" title="twitter" target="_blank" href=""><span
                        class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link"
                            preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9c59"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                            id="svg-9c59">
                            <circle fill="currentColor" class="st0" cx="56.1" cy="56.1"
                                r="55"></circle>
                            <path fill="#FFFFFF"
                                d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z">
                            </path>
                        </svg></span>
                </a>
                <a class="u-social-url" title="instagram" target="_blank" href=""><span
                        class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link"
                            preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ff30"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                            id="svg-ff30">
                            <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF"
                                d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z">
                            </path>
                            <path fill="#FFFFFF"
                                d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z">
                            </path>
                            <path fill="#FFFFFF"
                                d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z">
                            </path>
                        </svg></span>
                </a>
                <a class="u-social-url" title="linkedin" target="_blank" href=""><span
                        class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link"
                            preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-99a5"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                            id="svg-99a5">
                            <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF"
                                d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z">
                            </path>
                        </svg></span>
                </a>
            </div>
            <p class="u-align-center u-text u-text-5">Copyright © 2018, All Right Reserved&nbsp;<a
                    href="https://aashatech.com/"
                    class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">Aasha
                    Tech</a>
            </p>
        </div>
    </footer> --}}
    {{-- <section class="u-backlink u-clearfix u-grey-80">
        <a class="u-link" href="https://nicepage.com/website-mockup" target="_blank">
            <span>Website Mockup</span>
        </a>
        <p class="u-text">
            <span>created with</span>
        </p>
        <a class="u-link" href="https://nicepage.com/wysiwyg-html-editor" target="_blank">
            <span>HTML editor</span>
        </a>.
    </section> --}}


    <script src="{{ asset('css/bootstrapjs/bootstrap.min.js') }}"></script>

</body>

</html>





{{-- @endsection --}}

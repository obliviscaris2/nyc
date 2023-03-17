@extends("portal.layouts.master")

@section('content')

<section class="u-clearfix u-white u-section-1" id="sec-d388">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width-xs u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div
                        class="u-align-center u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                        <div class="u-container-layout u-container-layout-1">
                            <img class="u-image u-image-1"
                                src="{{ asset('img/National-Youth-Council-Nepal.png') }}" data-image-width="800"
                                data-image-height="418">
                            <h2 class="u-text u-text-1" data-animation-name="customAnimationIn"
                                data-animation-duration="1500">राष्ट्रिय युवा परिषद्<br>
                            </h2>
                            <a href="{{ route('render_about') }}"
                                class="u-active-palette-1-dark-2 u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-4-dark-1 u-palette-4-dark-2 u-radius-50 u-text-active-black u-text-body-alt-color u-text-hover-white u-btn-1"
                                data-animation-name="customAnimationIn" data-animation-duration="1500"
                                data-animation-delay="500">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="u-carousel u-expanded-width-xs u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-1"
            data-interval="5000" data-u-ride="carousel" id="carousel-cd60">
            <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                <li data-u-target="#carousel-cd60" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle"
                    style="width: 10px; height: 10px;"></li>
                <li data-u-target="#carousel-cd60" data-u-slide-to="1" class="u-grey-70 u-shape-circle"
                    style="width: 10px; height: 10px;"></li>
                <li data-u-target="#carousel-cd60" data-u-slide-to="2" class="u-grey-70 u-shape-circle"
                    style="width: 10px; height: 10px;"></li>
                <li data-u-target="#carousel-cd60" data-u-slide-to="3" class="u-grey-70 u-shape-circle"
                    style="width: 10px; height: 10px;"></li>
                <li data-u-target="#carousel-cd60" data-u-slide-to="4" class="u-grey-70 u-shape-circle"
                    style="width: 10px; height: 10px;"></li>
                <li data-u-target="#carousel-cd60" data-u-slide-to="5" class="u-grey-70 u-shape-circle"
                    style="width: 10px; height: 10px;"></li>
            </ol>
            <div class="u-carousel-inner u-gallery-inner" role="listbox">
                <div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1">
                </div>
                @foreach ($coverimages as $coverimage)
                    <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-2">
                        <div class="u-back-slide" data-image-width="1280" data-image-height="853">
                            <img class="u-back-image u-expanded"
                                src="{{ asset('uploads/coverimage/' . $coverimage->image) }}" alt="Cover Image">
                        </div>
                        <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-2">
                            <h3 class="u-gallery-heading">{{ $coverimage->title }}</h3>

                        </div>
                    </div>
                @endforeach
            </div>



            <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1"
                href="#carousel-cd60" role="button" data-u-slide="prev">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.847 451.847">
                        <path
                            d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                        </path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.847 451.847">
                        <path
                            d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                        </path>
                    </svg>
                </span>
            </a>
            <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2"
                href="#carousel-cd60" role="button" data-u-slide="next">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.846 451.847">
                        <path
                            d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                        </path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.846 451.847">
                        <path
                            d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                        </path>
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>



<section class="u-align-center u-clearfix u-white u-section-2" id="carousel_8e8e">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-custom-item u-list-item u-palette-2-dark-2 u-repeater-item u-shape-rectangle u-list-item-1"
                    data-animation-name="customAnimationIn" data-animation-duration="1750"
                    data-animation-delay="0">
                    <div class="u-container-layout u-similar-container u-container-layout-1">
                        <div
                            class="u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-group u-palette-4-dark-1 u-group-1">
                            <div class="u-container-layout u-container-layout-2">
                                <h3 class="u-align-center u-text u-text-1"> अध्यक्ष</h3>
                            </div>
                        </div><span class="u-align-center-xs u-file-icon u-icon u-text-palette-1-base u-icon-1"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="500"><img src="{{ asset('img/prachanda.PNG') }}"
                                alt=""></span>
                        <div
                            class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-palette-4-dark-1 u-group-2">
                            <div class="u-container-layout u-container-layout-3">
                                <h4 class="u-align-center u-text u-text-2"> पुष्प कमल दाहाल (प्रचण्ड)</h4>
                                <p class="u-align-center u-text u-text-3"><span class="u-icon"><svg
                                            class="u-svg-content" viewBox="0 0 60 60" x="0px"
                                            y="0px" style="width: 1em; height: 1em;">
                                            <g>
                                                <path
                                                    d="M56.612,4.569c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c3.736,3.736,3.736,9.815,0,13.552
    c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
    C61.128,16.434,61.128,9.085,56.612,4.569z">
                                                </path>
                                                <path
                                                    d="M52.401,6.845c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c1.237,1.237,1.918,2.885,1.918,4.639
    s-0.681,3.401-1.918,4.638c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
    c1.615-1.614,2.504-3.764,2.504-6.052S54.017,8.459,52.401,6.845z">
                                                </path>
                                                <path
                                                    d="M4.802,5.983c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-4.516,4.516-4.516,11.864,0,16.38
    c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
    C1.065,15.799,1.065,9.72,4.802,5.983z">
                                                </path>
                                                <path
                                                    d="M9.013,6.569c-0.391-0.391-1.023-0.391-1.414,0c-1.615,1.614-2.504,3.764-2.504,6.052s0.889,4.438,2.504,6.053
    c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
    c-1.237-1.237-1.918-2.885-1.918-4.639S7.775,9.22,9.013,7.983C9.403,7.593,9.403,6.96,9.013,6.569z">
                                                </path>
                                                <circle cx="30" cy="53" r="2"></circle>
                                                <path
                                                    d="M42.595,0H17.405C14.976,0,13,1.977,13,4.405v51.189C13,58.023,14.976,60,17.405,60h25.189C45.024,60,47,58.023,47,55.595
    V4.405C47,1.977,45.024,0,42.595,0z M33,3h1c0.552,0,1,0.447,1,1s-0.448,1-1,1h-1c-0.552,0-1-0.447-1-1S32.448,3,33,3z M26,3h4
    c0.552,0,1,0.447,1,1s-0.448,1-1,1h-4c-0.552,0-1-0.447-1-1S25.448,3,26,3z M30,57c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4
    S32.206,57,30,57z M45,46H15V8h30V46z">
                                                </path>
                                            </g>
                                        </svg><img></span>&nbsp;+९७७-०१-४२००५३९
                                </p>
                                <p class="u-align-center u-text u-text-4"><span
                                        class="u-file-icon u-icon u-text-white"><img
                                            src="images/542689-e094886c.png"
                                            alt=""></span>&nbsp;info@nyc.gov.np
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-palette-2-dark-2 u-repeater-item u-shape-rectangle u-list-item-2"
                    data-animation-name="customAnimationIn" data-animation-duration="1750"
                    data-animation-delay="0">
                    <div class="u-container-layout u-similar-container u-container-layout-4">
                        <div
                            class="u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-group u-palette-4-dark-1 u-group-3">
                            <div class="u-container-layout u-container-layout-5">
                                <h3 class="u-align-center u-text u-text-5"> उपाध्यक्ष</h3>
                            </div>
                        </div><span class="u-align-center-xs u-file-icon u-icon u-icon-4"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="500"><img src="{{ asset('img/surendra.jpg') }}"
                                alt=""></span>
                        <div
                            class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-palette-4-dark-1 u-group-4">
                            <div class="u-container-layout u-container-layout-6">
                                <h4 class="u-align-center u-text u-text-6"> श्री सुरेन्द्र बस्नेत</h4>
                                <p class="u-align-center u-text u-text-7"><span class="u-icon"><svg
                                            class="u-svg-content" viewBox="0 0 60 60" x="0px"
                                            y="0px" style="width: 1em; height: 1em;">
                                            <g>
                                                <path
                                                    d="M56.612,4.569c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c3.736,3.736,3.736,9.815,0,13.552
    c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
    C61.128,16.434,61.128,9.085,56.612,4.569z">
                                                </path>
                                                <path
                                                    d="M52.401,6.845c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c1.237,1.237,1.918,2.885,1.918,4.639
    s-0.681,3.401-1.918,4.638c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
    c1.615-1.614,2.504-3.764,2.504-6.052S54.017,8.459,52.401,6.845z">
                                                </path>
                                                <path
                                                    d="M4.802,5.983c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-4.516,4.516-4.516,11.864,0,16.38
    c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
    C1.065,15.799,1.065,9.72,4.802,5.983z">
                                                </path>
                                                <path
                                                    d="M9.013,6.569c-0.391-0.391-1.023-0.391-1.414,0c-1.615,1.614-2.504,3.764-2.504,6.052s0.889,4.438,2.504,6.053
    c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
    c-1.237-1.237-1.918-2.885-1.918-4.639S7.775,9.22,9.013,7.983C9.403,7.593,9.403,6.96,9.013,6.569z">
                                                </path>
                                                <circle cx="30" cy="53" r="2"></circle>
                                                <path
                                                    d="M42.595,0H17.405C14.976,0,13,1.977,13,4.405v51.189C13,58.023,14.976,60,17.405,60h25.189C45.024,60,47,58.023,47,55.595
    V4.405C47,1.977,45.024,0,42.595,0z M33,3h1c0.552,0,1,0.447,1,1s-0.448,1-1,1h-1c-0.552,0-1-0.447-1-1S32.448,3,33,3z M26,3h4
    c0.552,0,1,0.447,1,1s-0.448,1-1,1h-4c-0.552,0-1-0.447-1-1S25.448,3,26,3z M30,57c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4
    S32.206,57,30,57z M45,46H15V8h30V46z">
                                                </path>
                                            </g>
                                        </svg><img></span> +९७७-०१-६६३८१५२
                                </p>
                                <p class="u-align-center u-text u-text-8"><span
                                        class="u-file-icon u-icon u-text-white"><img
                                            src="images/542689-e094886c.png"
                                            alt=""></span>&nbsp;surendradamak@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-palette-2-dark-2 u-repeater-item u-shape-rectangle u-list-item-3"
                    data-animation-name="customAnimationIn" data-animation-duration="1750"
                    data-animation-delay="0">
                    <div class="u-container-layout u-similar-container u-container-layout-7">
                        <div
                            class="u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-group u-palette-4-dark-1 u-group-5">
                            <div class="u-container-layout u-container-layout-8">
                                <h3 class="u-align-center u-text u-text-9">सदस्य–सचिव</h3>
                            </div>
                        </div><span class="u-align-center-xs u-file-icon u-icon u-icon-7"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="500"><img src="{{ asset('img/photo-22-scaled.jpg') }}"
                                alt=""></span>
                        <div
                            class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-palette-4-dark-1 u-group-6">
                            <div class="u-container-layout u-container-layout-9">
                                <h4 class="u-align-center u-text u-text-10"> श्री अशोक पराजुली</h4>
                                <p class="u-align-center u-text u-text-11"><span class="u-icon"><svg
                                            class="u-svg-content" viewBox="0 0 60 60" x="0px"
                                            y="0px" style="width: 1em; height: 1em;">
                                            <g>
                                                <path
                                                    d="M56.612,4.569c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c3.736,3.736,3.736,9.815,0,13.552
    c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
    C61.128,16.434,61.128,9.085,56.612,4.569z">
                                                </path>
                                                <path
                                                    d="M52.401,6.845c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c1.237,1.237,1.918,2.885,1.918,4.639
    s-0.681,3.401-1.918,4.638c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
    c1.615-1.614,2.504-3.764,2.504-6.052S54.017,8.459,52.401,6.845z">
                                                </path>
                                                <path
                                                    d="M4.802,5.983c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-4.516,4.516-4.516,11.864,0,16.38
    c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
    C1.065,15.799,1.065,9.72,4.802,5.983z">
                                                </path>
                                                <path
                                                    d="M9.013,6.569c-0.391-0.391-1.023-0.391-1.414,0c-1.615,1.614-2.504,3.764-2.504,6.052s0.889,4.438,2.504,6.053
    c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
    c-1.237-1.237-1.918-2.885-1.918-4.639S7.775,9.22,9.013,7.983C9.403,7.593,9.403,6.96,9.013,6.569z">
                                                </path>
                                                <circle cx="30" cy="53" r="2"></circle>
                                                <path
                                                    d="M42.595,0H17.405C14.976,0,13,1.977,13,4.405v51.189C13,58.023,14.976,60,17.405,60h25.189C45.024,60,47,58.023,47,55.595
    V4.405C47,1.977,45.024,0,42.595,0z M33,3h1c0.552,0,1,0.447,1,1s-0.448,1-1,1h-1c-0.552,0-1-0.447-1-1S32.448,3,33,3z M26,3h4
    c0.552,0,1,0.447,1,1s-0.448,1-1,1h-4c-0.552,0-1-0.447-1-1S25.448,3,26,3z M30,57c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4
    S32.206,57,30,57z M45,46H15V8h30V46z">
                                                </path>
                                            </g>
                                        </svg><img></span>&nbsp;+९७७-०१-६६३५१३३
                                </p>
                                <p class="u-align-center u-text u-text-12"><span
                                        class="u-file-icon u-icon u-text-white"><img
                                            src="images/542689-e094886c.png"
                                            alt=""></span>&nbsp;​sharma.ramakanta@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-palette-2-dark-2 u-repeater-item u-shape-rectangle u-list-item-4"
                    data-animation-name="customAnimationIn" data-animation-duration="1750"
                    data-animation-delay="0">
                    <div class="u-container-layout u-similar-container u-container-layout-10">
                        <div
                            class="u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-group u-palette-4-dark-1 u-group-7">
                            <div class="u-container-layout u-container-layout-11">
                                <h3 class="u-align-center u-text u-text-13"> सूचना अधिकारी</h3>
                            </div>
                        </div><span class="u-align-center-xs u-file-icon u-icon u-icon-10"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="500"><img src="{{ asset('img/ashok.jpg') }}"
                                alt=""></span>
                        <div
                            class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-palette-4-dark-1 u-group-8">
                            <div class="u-container-layout u-container-layout-12">
                                <h4 class="u-align-center u-text u-text-14"> श्री रमाकान्त शर्मा</h4>
                                <p class="u-align-center u-text u-text-15"><span class="u-icon"><svg
                                            class="u-svg-content" viewBox="0 0 511 511"
                                            style="width: 1em; height: 1em;">
                                            <path
                                                d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0">
                                            </path>
                                        </svg><img></span>&nbsp;​+९७७-९८६१९९९३०१
                                </p>
                                <p class="u-align-center u-text u-text-16"><span class="u-icon"><svg
                                            class="u-svg-content" viewBox="0 0 511 511"
                                            style="width: 1em; height: 1em;">
                                            <path
                                                d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0">
                                            </path>
                                        </svg><img></span>&nbsp;info@nyc.gov.np
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-align-center u-clearfix u-white u-section-3" id="sec-3ce5">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-shape u-shape-svg u-text-palette-2-dark-1 u-shape-1" data-animation-name="customAnimationIn"
            data-animation-duration="1500" data-animation-delay="500">
            <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a0bf"></use>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                xml:space="preserve" class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px"
                id="svg-a0bf" style="enable-background:new 0 0 160 160;">
                <path
                    d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
s80-35.8,80-80S124.2,0,80,0L80,0z">
                </path>
            </svg>
        </div>
        <div class="u-palette-2-dark-1 u-shape u-shape-circle u-shape-2" data-animation-name="customAnimationIn"
            data-animation-duration="1500" data-animation-delay="500"></div>
        <img class="u-border-17 u-border-palette-4-dark-1 u-expanded-width-xs u-image u-image-round u-radius-50 u-image-1"
            src="{{ asset('uploads/about/' . $about->image) }}" data-image-width="1017" data-image-height="543">
        <div class="u-palette-2-base u-shape u-shape-circle u-shape-3" data-animation-name="customAnimationIn"
            data-animation-duration="1500" data-animation-delay="500"></div>
        <div class="u-shape u-shape-svg u-text-palette-2-dark-1 u-shape-4" data-animation-name="customAnimationIn"
            data-animation-duration="1500" data-animation-delay="750">
            <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2818"></use>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                xml:space="preserve" class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px"
                id="svg-2818" style="enable-background:new 0 0 160 160;">
                <path
                    d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
s80-35.8,80-80S124.2,0,80,0L80,0z">
                </path>
            </svg>
        </div>
        <div class="u-expanded-width-xs u-palette-4-dark-1 u-radius-50 u-shape u-shape-round u-shape-5"
            data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
        </div>
        <div class="u-align-center u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1"
            data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
            <div class="u-container-layout u-container-layout-1">
                <h3 class="u-text u-text-body-alt-color u-text-1"> {{ $about->title }}</h3>
                <p class="u-text u-text-body-alt-color u-text-2">{!! Str::substr($about->content, 0, 800) !!}</p>
                <a href="{{ route('render_about') }}"
                    class="u-border-2 u-border-hover-palette-2-dark-1 u-border-palette-4-dark-1 u-btn u-btn-round u-button-style u-hover-palette-2-dark-1 u-palette-4-dark-1 u-radius-50 u-text-body-alt-color u-btn-1">read
                    more</a>
            </div>
        </div>
    </div>
</section>
<section class="skrollable u-align-center u-clearfix u-image u-parallax u-section-4" id="carousel_2eca"
    data-image-width="1280" data-image-height="853">
    <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <div class="u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-align-center u-container-style u-list-item u-opacity u-opacity-40 u-palette-5-dark-2 u-radius-50 u-repeater-item u-shape-round u-list-item-1"
                    data-animation-name="customAnimationIn" data-animation-duration="1500"
                    data-animation-delay="0" data-href="{{ route('render_images') }}">
                    <div class="u-container-layout u-similar-container u-container-layout-1"><span
                            class="u-file-icon u-icon u-text-white u-icon-1"><img src="images/45010-756f759e.png"
                                alt=""></span>
                        <h4 class="u-text u-text-1" data-animation-name="customAnimationIn"
                            data-animation-duration="1500" data-animation-delay="500"> तस्बिर पुस्तिका</h4>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-list-item u-opacity u-opacity-40 u-palette-5-dark-2 u-radius-50 u-repeater-item u-shape-round u-list-item-2"
                    data-animation-name="customAnimationIn" data-animation-duration="1500"
                    data-animation-delay="0" data-href="{{ route('render_videos') }}">
                    <div class="u-container-layout u-similar-container u-container-layout-2"><span
                            class="u-file-icon u-icon u-text-white u-icon-2"><img src="images/711245-1b37bf58.png"
                                alt=""></span>
                        <h4 class="u-text u-text-2" data-animation-name="customAnimationIn"
                            data-animation-duration="1500" data-animation-delay="500"> भिडियो ग्यालरी</h4>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-list-item u-opacity u-opacity-40 u-palette-5-dark-2 u-radius-50 u-repeater-item u-shape-round u-list-item-3"
                    data-animation-name="customAnimationIn" data-animation-duration="1500"
                    data-animation-delay="0" data-href="https://nicepage.com">
                    <div class="u-container-layout u-similar-container u-container-layout-3"><span
                            class="u-file-icon u-icon u-text-white u-icon-3"><img src="images/681494-3d6f45f5.png"
                                alt=""></span>
                        <h4 class="u-text u-text-3" data-animation-name="customAnimationIn"
                            data-animation-duration="1500" data-animation-delay="500"> युवा तथ्याङ्क</h4>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-list-item u-opacity u-opacity-40 u-palette-5-dark-2 u-radius-50 u-repeater-item u-shape-round u-list-item-4"
                    data-animation-name="customAnimationIn" data-animation-duration="1500"
                    data-animation-delay="0" data-href="https://nicepage.com">
                    <div class="u-container-layout u-similar-container u-container-layout-4"><span
                            class="u-file-icon u-icon u-text-white u-icon-4"><img src="images/709699-b940ac92.png"
                                alt=""></span>
                        <h4 class="u-text u-text-4" data-animation-name="customAnimationIn"
                            data-animation-duration="1500" data-animation-delay="500"> युवा पोर्टल</h4>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-list-item u-opacity u-opacity-40 u-palette-5-dark-2 u-radius-50 u-repeater-item u-shape-round u-list-item-5"
                    data-animation-name="customAnimationIn" data-animation-duration="1500"
                    data-animation-delay="0" data-href="https://nicepage.com">
                    <div class="u-container-layout u-similar-container u-container-layout-5"><span
                            class="u-file-icon u-icon u-text-white u-icon-5"><img src="images/542689-e094886c.png"
                                alt=""></span>
                        <h4 class="u-text u-text-5" data-animation-name="customAnimationIn"
                            data-animation-duration="1500" data-animation-delay="500"> इमेल लगइन</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-palette-5-light-3 u-section-5" id="carousel_457a">
    <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-layout-cell u-shape-rectangle u-size-36 u-layout-cell-1"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="500">
                        <div class="u-container-layout u-container-layout-1">
                            <div class="u-expanded-width u-tab-links-align-left u-tabs u-tabs-1">
                                <ul class="u-border-2 u-border-palette-1-base u-spacing-10 u-tab-list u-unstyled"
                                    role="tablist">
                                    <li class="u-tab-item" role="presentation">
                                        <a class="active u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1"
                                            id="link-tab-0da5" href="#tab-0da5" role="tab"
                                            aria-controls="tab-0da5" aria-selected="true">Information</a>
                                    </li>
                                    <li class="u-tab-item" role="presentation">
                                        <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2"
                                            id="link-tab-14b7" href="#tab-14b7" role="tab"
                                            aria-controls="tab-14b7" aria-selected="false">Forms</a>
                                    </li>
                                    <li class="u-tab-item" role="presentation">
                                        <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-3"
                                            id="link-tab-2917" href="#tab-2917" role="tab"
                                            aria-controls="tab-2917" aria-selected="false">Report</a>
                                    </li>
                                    <li class="u-tab-item u-tab-item-4" role="presentation">
                                        <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-4"
                                            id="tab-93fc" href="#link-tab-93fc" role="tab"
                                            aria-controls="link-tab-93fc" aria-selected="false">Press Release</a>
                                    </li>
                                </ul>
                                <div class="u-tab-content">
                                    <div class="u-container-style u-tab-active u-tab-pane" id="tab-0da5"
                                        role="tabpanel" data-animation-name="" data-animation-duration="0"
                                        data-animation-delay="0" data-animation-direction="">
                                        <div class="u-container-layout u-valign-top u-container-layout-2">
                                            <div class="u-expanded-width u-list u-list-1">
                                                <div class="u-repeater u-repeater-1">
                                                    @foreach ($press as $pres )

                                                    <div class="u-container-style u-list-item u-repeater-item">
                                                        <div class="u-container-layout u-similar-container u-container-layout-3">
                                                            <span class="u-file-icon u-icon u-icon-1"><img
                                                                    src="images/3031707.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-2"><img
                                                                    src="images/159604.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-3"><img
                                                                    src="images/vectorstock_28525730.png"
                                                                    alt=""></span>
                                                            <h5 class="u-text u-text-1"> {{$pres->title}}</h5>
                                                            <p class="u-text u-text-2"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/8110713.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                            <p class="u-text u-text-3"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/747310.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                        </div>
                                                    </div>
                                                        
                                                    @endforeach
                                                    
                                                    <div class="u-container-style u-list-item u-repeater-item">
                                                        <div
                                                            class="u-container-layout u-similar-container u-container-layout-4">
                                                            <span class="u-file-icon u-icon u-icon-6"><img
                                                                    src="images/3031707.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-7"><img
                                                                    src="images/159604.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-8"><img
                                                                    src="images/vectorstock_28525730.png"
                                                                    alt=""></span>
                                                            <h5 class="u-text u-text-4">v​नमुना संसद अभ्यास
                                                                कार्यक्रम सञ्चालन सम्बन्धमा</h5>
                                                            <p class="u-text u-text-5"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/8110713.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                            <p class="u-text u-text-6"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/747310.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="u-container-style u-list-item u-repeater-item">
                                                        <div
                                                            class="u-container-layout u-similar-container u-container-layout-5">
                                                            <span class="u-file-icon u-icon u-icon-11"><img
                                                                    src="images/3031707.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-12"><img
                                                                    src="images/159604.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-13"><img
                                                                    src="images/vectorstock_28525730.png"
                                                                    alt=""></span>
                                                            <h5 class="u-text u-text-7"> नमुना संसद अभ्यास
                                                                कार्यक्रम सञ्चालन सम्बन्धमा</h5>
                                                            <p class="u-text u-text-8"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/8110713.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                            <p class="u-text u-text-9"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/747310.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="u-container-style u-list-item u-repeater-item">
                                                        <div
                                                            class="u-container-layout u-similar-container u-container-layout-6">
                                                            <span class="u-file-icon u-icon u-icon-16"><img
                                                                    src="images/3031707.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-17"><img
                                                                    src="images/159604.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-18"><img
                                                                    src="images/vectorstock_28525730.png"
                                                                    alt=""></span>
                                                            <h5 class="u-text u-text-10"> नमुना संसद अभ्यास
                                                                कार्यक्रम सञ्चालन सम्बन्धमा</h5>
                                                            <p class="u-text u-text-11"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/8110713.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                            <p class="u-text u-text-12"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/747310.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-tab-pane" id="tab-14b7" role="tabpanel"
                                        data-animation-name="" data-animation-duration="0"
                                        data-animation-delay="0" data-animation-direction="">
                                        <div class="u-container-layout u-valign-top u-container-layout-7">
                                            <div class="u-expanded-width u-list u-list-2">
                                                <div class="u-repeater u-repeater-2">
                                                    <div class="u-container-style u-list-item u-repeater-item">
                                                        <div
                                                            class="u-container-layout u-similar-container u-container-layout-8">
                                                            <span class="u-file-icon u-icon u-icon-21"><img
                                                                    src="images/3031707.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-22"><img
                                                                    src="images/159604.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-23"><img
                                                                    src="images/vectorstock_28525730.png"
                                                                    alt=""></span>
                                                            <h5 class="u-text u-text-13"> नमुना संसद अभ्यास
                                                                कार्यक्रम सञ्चालन सम्बन्धमा</h5>
                                                            <p class="u-text u-text-14"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/8110713.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                            <p class="u-text u-text-15"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/747310.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="u-container-style u-list-item u-repeater-item">
                                                        <div
                                                            class="u-container-layout u-similar-container u-container-layout-9">
                                                            <span class="u-file-icon u-icon u-icon-26"><img
                                                                    src="images/3031707.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-27"><img
                                                                    src="images/159604.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-28"><img
                                                                    src="images/vectorstock_28525730.png"
                                                                    alt=""></span>
                                                            <h5 class="u-text u-text-16">v​नमुना संसद अभ्यास
                                                                कार्यक्रम सञ्चालन सम्बन्धमा</h5>
                                                            <p class="u-text u-text-17"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/8110713.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                            <p class="u-text u-text-18"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/747310.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="u-container-style u-list-item u-repeater-item">
                                                        <div
                                                            class="u-container-layout u-similar-container u-container-layout-10">
                                                            <span class="u-file-icon u-icon u-icon-31"><img
                                                                    src="images/3031707.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-32"><img
                                                                    src="images/159604.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-33"><img
                                                                    src="images/vectorstock_28525730.png"
                                                                    alt=""></span>
                                                            <h5 class="u-text u-text-19"> नमुना संसद अभ्यास
                                                                कार्यक्रम सञ्चालन सम्बन्धमा</h5>
                                                            <p class="u-text u-text-20"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/8110713.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                            <p class="u-text u-text-21"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/747310.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="u-container-style u-list-item u-repeater-item">
                                                        <div
                                                            class="u-container-layout u-similar-container u-container-layout-11">
                                                            <span class="u-file-icon u-icon u-icon-36"><img
                                                                    src="images/3031707.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-37"><img
                                                                    src="images/159604.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-38"><img
                                                                    src="images/vectorstock_28525730.png"
                                                                    alt=""></span>
                                                            <h5 class="u-text u-text-22"> नमुना संसद अभ्यास
                                                                कार्यक्रम सञ्चालन सम्बन्धमा</h5>
                                                            <p class="u-text u-text-23"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/8110713.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                            <p class="u-text u-text-24"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/747310.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-tab-pane" id="tab-2917" role="tabpanel"
                                        data-animation-name="" data-animation-duration="0"
                                        data-animation-delay="0" data-animation-direction="">
                                        <div class="u-container-layout u-valign-top u-container-layout-12">
                                            <div class="u-expanded-width u-list u-list-3">
                                                <div class="u-repeater u-repeater-3">
                                                    <div class="u-container-style u-list-item u-repeater-item">
                                                        <div
                                                            class="u-container-layout u-similar-container u-container-layout-13">
                                                            <span class="u-file-icon u-icon u-icon-41"><img
                                                                    src="images/3031707.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-42"><img
                                                                    src="images/159604.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-43"><img
                                                                    src="images/vectorstock_28525730.png"
                                                                    alt=""></span>
                                                            <h5 class="u-text u-text-25"> नमुना संसद अभ्यास
                                                                कार्यक्रम सञ्चालन सम्बन्धमा</h5>
                                                            <p class="u-text u-text-26"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/8110713.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                            <p class="u-text u-text-27"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/747310.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="u-container-style u-list-item u-repeater-item">
                                                        <div
                                                            class="u-container-layout u-similar-container u-container-layout-14">
                                                            <span class="u-file-icon u-icon u-icon-46"><img
                                                                    src="images/3031707.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-47"><img
                                                                    src="images/159604.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-48"><img
                                                                    src="images/vectorstock_28525730.png"
                                                                    alt=""></span>
                                                            <h5 class="u-text u-text-28">​नमुना संसद अभ्यास
                                                                कार्यक्रम सञ्चालन सम्बन्धमा</h5>
                                                            <p class="u-text u-text-29"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/8110713.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                            <p class="u-text u-text-30"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/747310.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="u-container-style u-list-item u-repeater-item">
                                                        <div
                                                            class="u-container-layout u-similar-container u-container-layout-15">
                                                            <span class="u-file-icon u-icon u-icon-51"><img
                                                                    src="images/3031707.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-52"><img
                                                                    src="images/159604.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-53"><img
                                                                    src="images/vectorstock_28525730.png"
                                                                    alt=""></span>
                                                            <h5 class="u-text u-text-31"> नमुना संसद अभ्यास
                                                                कार्यक्रम सञ्चालन सम्बन्धमा</h5>
                                                            <p class="u-text u-text-32"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/8110713.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                            <p class="u-text u-text-33"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/747310.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="u-container-style u-list-item u-repeater-item">
                                                        <div
                                                            class="u-container-layout u-similar-container u-container-layout-16">
                                                            <span class="u-file-icon u-icon u-icon-56"><img
                                                                    src="images/3031707.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-57"><img
                                                                    src="images/159604.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-58"><img
                                                                    src="images/vectorstock_28525730.png"
                                                                    alt=""></span>
                                                            <h5 class="u-text u-text-34"> नमुना संसद अभ्यास
                                                                कार्यक्रम सञ्चालन सम्बन्धमा</h5>
                                                            <p class="u-text u-text-35"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/8110713.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                            <p class="u-text u-text-36"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/747310.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-tab-pane" id="link-tab-93fc"
                                        role="tabpanel" data-animation-name="" data-animation-duration="0"
                                        data-animation-delay="0" data-animation-direction="">
                                        <div
                                            class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-17">
                                            <div class="u-expanded-width u-list u-list-4">
                                                <div class="u-repeater u-repeater-4">

                                                    @foreach ($press as $pre )
                                                    <div class="u-container-style u-list-item u-repeater-item">
                                                        <div
                                                            class="u-container-layout u-similar-container u-container-layout-18">
                                                            <span class="u-file-icon u-icon u-icon-61"><img
                                                                    src="images/3031707.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-62"><img
                                                                    src="images/159604.png"
                                                                    alt=""></span><span
                                                                class="u-file-icon u-icon u-icon-63"><img
                                                                    src="images/vectorstock_28525730.png"
                                                                    alt=""></span>
                                                            <h5 class="u-text u-text-37">{{$pre->title}}</h5>
                                                            <p class="u-text u-text-38"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/8110713.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                            <p class="u-text u-text-39"><span
                                                                    class="u-file-icon u-icon"><img
                                                                        src="images/747310.png"
                                                                        alt=""></span>&nbsp;Text with icon
                                                            </p>
                                                        </div>
                                                    </div> 
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-justify u-container-style u-layout-cell u-size-24 u-layout-cell-2"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="0">
                        <div class="u-container-layout u-valign-top-xs u-container-layout-22">
                            <div class="u-container-style u-expanded-width u-group u-image u-image-contain u-image-1"
                                data-image-width="264" data-image-height="276">
                                <div class="u-container-layout u-container-layout-23"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-align-center u-clearfix u-palette-5-light-3 u-section-6" id="carousel_f852">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
        <h3 class="u-text u-text-default u-text-1"> तस्बिरहरु<span style="font-weight: 700;"></span>
        </h3>
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
            <div class="u-gallery-inner u-gallery-inner-1">
                <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="1000" data-image-height="1500">
                        <img class="u-back-image u-expanded u-back-image-1"
                            src="images/pexels-photo-4210854.jpeg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-1">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="1000" data-image-height="665">
                        <img class="u-back-image u-expanded u-back-image-2"
                            src="images/Leopard_skin_texture_Wall_Mural_Wallpaper_a.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-2">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="1133" data-image-height="1700">
                        <img class="u-back-image u-expanded u-back-image-3" src="images/hmgoepprod1.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-3">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="1133" data-image-height="1700">
                        <img class="u-back-image u-expanded u-back-image-4" src="images/hmgoepprod.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-4">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="1133" data-image-height="1700">
                        <img class="u-back-image u-expanded u-back-image-5"
                            src="images/50c6a407-2bec-49c5-aae2-42500cdac465.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-5">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="1133" data-image-height="1700">
                        <img class="u-back-image u-expanded u-back-image-6"
                            src="images/3b322ff9-c21f-4b1e-9dbb-4e927246b7af.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-6">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="1280" data-image-height="853">
                        <img class="u-back-image u-expanded u-back-image-7"
                            src="images/f68b8bec6adbbf6567541c252a9e4673dc31725dfde0f0ffb77717702b954fcddb6373e5e3ba7b3ab397b20fa107ceeccabb987d9003ede1acb9a1_1280.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-7">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="1600" data-image-height="1067">
                        <img class="u-back-image u-expanded u-back-image-8" src="images/wdq-min.jpg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-8">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
                <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="500" data-image-height="322">
                        <img class="u-back-image u-expanded u-back-image-9" src="images/3041028171-0.jpeg">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-9">
                        <h3 class="u-gallery-heading"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-palette-5-light-2 u-section-7" id="sec-931a">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-default u-text-1"> चलचित्रहरु</h3>
        <div class="u-clearfix u-expanded-width u-gutter-22 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div
                        class="u-align-left u-container-style u-layout-cell u-left-cell u-size-15 u-layout-cell-1">
                        <div class="u-container-layout u-container-layout-1">
                            <div class="u-align-left u-expanded u-uploaded-video u-video">
                                <div class="embed-responsive embed-responsive-1">
                                    <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;"
                                        class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/B9YKnNtFqds?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0"
                                        frameborder="0" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-left u-container-style u-layout-cell u-size-15 u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-2">
                            <div class="u-align-left u-expanded u-uploaded-video u-video">
                                <div class="embed-responsive embed-responsive-2">
                                    <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;"
                                        class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/B9YKnNtFqds?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0"
                                        frameborder="0" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="u-container-align-center u-container-style u-layout-cell u-size-15 u-video u-video-contain u-video-3">
                        <div class="u-background-video u-expanded" style="">
                            <div class="embed-responsive embed-responsive-3">
                                <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;"
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&amp;loop=1&amp;mute=1&amp;showinfo=0&amp;controls=0&amp;start=0&amp;autoplay=1"
                                    data-autoplay="1" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class="u-container-layout u-valign-middle u-container-layout-3"></div>
                    </div>
                    <div class="u-container-style u-layout-cell u-size-15 u-layout-cell-4">
                        <div
                            class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-4">
                            <div class="u-absolute-hcenter-xs u-expanded u-uploaded-video u-video u-video-cover">
                                <div class="embed-responsive embed-responsive-4">
                                    <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;"
                                        class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/B9YKnNtFqds?mute=1&amp;showinfo=0&amp;controls=0&amp;start=0"
                                        frameborder="0" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-white u-section-8" id="carousel_15ea">
    <div class="u-expanded-width u-palette-5-light-1 u-shape u-shape-rectangle u-shape-1"></div>
    <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-palette-3-base u-shape-rectangle u-size-22-lg u-size-22-xl u-size-30-md u-size-30-sm u-size-30-xs u-layout-cell-1"
                    data-animation-name="customAnimationIn" data-animation-duration="1500"
                    data-animation-delay="500">
                    <div class="u-container-layout u-container-layout-1">
                        <div class="u-absolute-hcenter u-expanded u-grey-light-2 u-map">
                            <div class="embed-responsive">
                                <iframe class="embed-responsive-item"
                                    src="//maps.google.com/maps?output=embed&amp;q=Manhattan%2C%20New%20York&amp;z=10&amp;t=m"
                                    data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyQyUyME5ldyUyMFlvcmslMjIlMkMlMjJ6b29tJTIyJTNBMTAlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQW51bGwlMkMlMjJhcGlLZXklMjIlM0FudWxsJTJDJTIybWFya2VycyUyMiUzQSU1QiU1RCU3RA=="></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-shape-rectangle u-size-23-lg u-size-23-xl u-size-30-md u-size-30-sm u-size-30-xs u-white u-layout-cell-2"
                    data-animation-name="customAnimationIn" data-animation-duration="1500"
                    data-animation-delay="500">
                    <div class="u-container-layout u-container-layout-2">
                        <h3 class="u-text u-text-1">Contact Us</h3>
                        <div class="u-expanded-width u-form u-form-1">
                            <form action="https://forms.nicepagesrv.com/v2/form/process"
                                class="u-clearfix u-form-spacing-27 u-form-vertical u-inner-form"
                                style="padding: 0px;" source="email" name="form">
                                <div class="u-form-group u-form-name u-label-none u-form-group-1">
                                    <label for="name-319a"
                                        class="u-label u-text-body-alt-color u-label-1">Name</label>
                                    <input type="text" placeholder="Enter your Name" id="name-319a"
                                        name="name"
                                        class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle"
                                        required="">
                                </div>
                                <div class="u-form-email u-form-group u-label-none u-form-group-2">
                                    <label for="email-319a"
                                        class="u-label u-text-body-alt-color u-label-2">Email</label>
                                    <input type="email" placeholder="Enter a valid email" id="email-319a"
                                        name="email"
                                        class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle"
                                        required="">
                                </div>
                                <div class="u-form-address u-form-group u-label-none u-form-group-3">
                                    <label for="address-452f"
                                        class="u-label u-text-body-alt-color u-label-3">Address</label>
                                    <input type="text" placeholder="Enter your phone number"
                                        id="address-452f" name="address"
                                        class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle"
                                        required="">
                                </div>
                                <div class="u-form-group u-form-message u-label-none">
                                    <label for="message-319a"
                                        class="u-label u-text-body-alt-color u-label-4">Message</label>
                                    <textarea placeholder="Enter your message" rows="4" cols="50" id="message-319a" name="message"
                                        class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle"
                                        required=""></textarea>
                                </div>
                                <div class="u-align-left u-form-group u-form-submit u-label-none">
                                    <a href="#"
                                        class="u-active-white u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-white u-palette-2-base u-radius-10 u-btn-1">Submit</a>
                                    <input type="submit" value="submit" class="u-form-control-hidden">
                                </div>
                                <div class="u-form-send-message u-form-send-success"> Thank you! Your message has
                                    been sent. </div>
                                <div class="u-form-send-error u-form-send-message"> Unable to send your message.
                                    Please fix errors then try again. </div>
                                <input type="hidden" value="" name="recaptchaResponse">
                                <input type="hidden" name="formServices"
                                    value="77c86aa9d6613065f293770d84430279">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="u-container-style u-image u-image-contain u-layout-cell u-size-15-lg u-size-15-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1"
                    data-animation-name="customAnimationIn" data-animation-duration="1500"
                    data-animation-delay="500" data-image-width="396" data-image-height="768">
                    <div class="u-container-layout u-container-layout-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-align-center u-clearfix u-palette-5-light-1 u-section-9" id="carousel_3ac4">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-1">Latest news</h3>
        <!--blog-->
        <!--blog_options_json-->
        <!--{"type":"Recent","source":"","tags":"","count":""}-->
        <!--/blog_options_json-->
        <div class="u-blog u-expanded-width u-blog-1">
            <div class="u-repeater u-repeater-1">
                <!--blog_post-->
                <div
                    class="u-align-left u-blog-post u-container-style u-repeater-item u-video-cover u-white u-repeater-item-1">
                    <div
                        class="u-container-layout u-similar-container u-valign-top-sm u-valign-top-xs u-container-layout-1">
                        <a class="u-post-header-link" href="blog/post-5.html">
                            <!--blog_post_image-->
                            <img alt=""
                                class="u-blog-control u-expanded-width-xs u-image u-image-default u-image-1"
                                src="images/8ad73f3c.jpeg" data-image-width="567" data-image-height="696">
                            <!--/blog_post_image-->
                        </a>
                        <!--blog_post_header-->
                        <h4 class="u-blog-control u-text u-text-2">
                            <a class="u-post-header-link" href="blog/post-5.html">
                                <!--blog_post_header_content-->Post 6 Headline
                                <!--/blog_post_header_content-->
                            </a>
                        </h4>
                        <!--/blog_post_header-->
                        <!--blog_post_metadata-->
                        <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-1">
                            <!--blog_post_metadata_date-->
                            <span class="u-meta-date u-meta-icon">
                                <!--blog_post_metadata_date_content-->Wed Mar 15 2023
                                <!--/blog_post_metadata_date_content-->
                            </span>
                            <!--/blog_post_metadata_date-->
                            <!--blog_post_metadata_comments-->
                            <span class="u-meta-comments u-meta-icon">
                                <!--blog_post_metadata_comments_content-->Comments (0)
                                <!--/blog_post_metadata_comments_content-->
                            </span>
                            <!--/blog_post_metadata_comments-->
                        </div>
                        <!--/blog_post_metadata-->
                    </div>
                </div>
                <!--/blog_post-->
                <!--blog_post-->
                <div
                    class="u-align-left u-blog-post u-container-style u-repeater-item u-video-cover u-white u-repeater-item-2">
                    <div
                        class="u-container-layout u-similar-container u-valign-top-sm u-valign-top-xs u-container-layout-2">
                        <a class="u-post-header-link" href="blog/post-4.html">
                            <!--blog_post_image-->
                            <img alt=""
                                class="u-blog-control u-expanded-width-xs u-image u-image-default u-image-2"
                                src="images/68f64b9d.jpeg" data-image-width="567" data-image-height="696">
                            <!--/blog_post_image-->
                        </a>
                        <!--blog_post_header-->
                        <h4 class="u-blog-control u-text u-text-3">
                            <a class="u-post-header-link" href="blog/post-4.html">
                                <!--blog_post_header_content-->Post 5 Headline
                                <!--/blog_post_header_content-->
                            </a>
                        </h4>
                        <!--/blog_post_header-->
                        <!--blog_post_metadata-->
                        <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-2">
                            <!--blog_post_metadata_date-->
                            <span class="u-meta-date u-meta-icon">
                                <!--blog_post_metadata_date_content-->Wed Mar 15 2023
                                <!--/blog_post_metadata_date_content-->
                            </span>
                            <!--/blog_post_metadata_date-->
                            <!--blog_post_metadata_comments-->
                            <span class="u-meta-comments u-meta-icon">
                                <!--blog_post_metadata_comments_content-->Comments (0)
                                <!--/blog_post_metadata_comments_content-->
                            </span>
                            <!--/blog_post_metadata_comments-->
                        </div>
                        <!--/blog_post_metadata-->
                    </div>
                </div>
                <!--/blog_post-->
                <!--blog_post-->
                <div
                    class="u-align-left u-blog-post u-container-style u-repeater-item u-video-cover u-white u-repeater-item-3">
                    <div
                        class="u-container-layout u-similar-container u-valign-top-sm u-valign-top-xs u-container-layout-3">
                        <a class="u-post-header-link" href="blog/post-3.html">
                            <!--blog_post_image-->
                            <img alt=""
                                class="u-blog-control u-expanded-width-xs u-image u-image-default u-image-3"
                                src="images/0fd3416c.jpeg">
                            <!--/blog_post_image-->
                        </a>
                        <!--blog_post_header-->
                        <h4 class="u-blog-control u-text u-text-4">
                            <a class="u-post-header-link" href="blog/post-3.html">
                                <!--blog_post_header_content-->Post 4 Headline
                                <!--/blog_post_header_content-->
                            </a>
                        </h4>
                        <!--/blog_post_header-->
                        <!--blog_post_metadata-->
                        <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-3">
                            <!--blog_post_metadata_date-->
                            <span class="u-meta-date u-meta-icon">
                                <!--blog_post_metadata_date_content-->Wed Mar 15 2023
                                <!--/blog_post_metadata_date_content-->
                            </span>
                            <!--/blog_post_metadata_date-->
                            <!--blog_post_metadata_comments-->
                            <span class="u-meta-comments u-meta-icon">
                                <!--blog_post_metadata_comments_content-->Comments (0)
                                <!--/blog_post_metadata_comments_content-->
                            </span>
                            <!--/blog_post_metadata_comments-->
                        </div>
                        <!--/blog_post_metadata-->
                    </div>
                </div>
                <!--/blog_post-->
            </div>
        </div>
        <!--/blog-->
    </div>
</section>

@endsection
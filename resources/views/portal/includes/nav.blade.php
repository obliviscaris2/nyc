<section class="top_nav">
    <div class="container this-container">
        <div class="lang-container">
            @foreach (config('app.languages') as $langLocale => $langName)
                <a class="lang-link"
                    href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }}
                </a>
            @endforeach
        </div>

        <div class="d-flex justify-content-between align-items-center nav-objs">
            <div class="p-2 main-logo-container">
                <img src="{{ asset($sitesetting->main_logo) }}" class="top_image image_one" alt="logo">
            </div>

            <div class="p-2 text-center">
                <p class="top_ntitle">
                    <span class="title_on">
                        {{ __($sitesetting->govn_name) }}
                    </span><br>
                    <span class="title_tw">
                        {{ __($sitesetting->ministry_name) }}
                    </span><br>
                    {{-- <span class="title_th">
                        {{ __($sitesetting->department_name) }}
                    </span><br> --}}
                    <span class="title_fo">
                        {{ __($sitesetting->office_name) }}
                    </span><br>

                    <span class="title_fi">
                        {{ __($sitesetting->office_address) }}
                    </span>

                </p>
            </div>

            <div class="p-2 other-logo-container side-logo-container">
                <img src="{{ asset($sitesetting->side_logo) }}" class="top_image image_two" alt="logo">
            </div>
            <div class="p-2 other-logo-container flag-container">
                <img src="{{ asset($sitesetting->flag_logo) }}" class="top_image image_flag" alt="logo">
            </div>
        </div>

    </div>
</section>

<section class="navigation">
    <div class="nav-container">

        <nav>
            <div class="nav-mobile">
                <a id="nav-toggle" href="#!"><span></span></a>
            </div>

            <ul class="nav-list">
                <li><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
                <li><a href="#">{{ __('About Us') }}</a>
                    <ul class="nav-dropdown">
                        <li><a href="{{ route('render_about') }}">{{ __('Introduction') }}</a></li>
                        <li><a href="{{ route('render_team') }}">{{ __('Employee Details') }}</a></li>
                        <li><a href="{{ route('render_committee') }}">{{ __('District Committees') }}</a></li>
                        <li><a href="{{ route('render_executive_members') }}">{{ __('Council Members') }}</a></li>
                        <li><a
                                href="{{ route('render_administrative') }}">{{ __('Message from the Administrative Head') }}</a>
                        </li>
                        <li><a href="{{ route('render_chairperson') }}">{{ __('Message from Chairperson') }}</a></li>
                    </ul>
                </li>
                <li><a href="#">{{ __('Documents') }}</a>
                    <ul class="nav-dropdown">
                        <li><a href="{{ route('render_notice') }}">{{ __('Notice') }}</a></li>
                        <li><a href="{{ route('render_publication') }}">{{ __('Publication') }}</a></li>
                        <li><a href="{{ route('render_tender') }}">{{ __('Tender') }}</a></li>

                    </ul>
                </li>
                <li><a href="#">{{ __('Information') }}</a>
                    <ul class="nav-dropdown">
                        <li><a href="{{ route('render_rules') }}">{{ __('Acts & Regulations') }}</a></li>
                        <li><a href="{{ route('render_directot') }}">{{ __('Directory') }}</a></li>
                        <li><a href="{{ route('render_press') }}">{{ __('Press Release') }}</a></li>
                    </ul>
                </li>
                <li><a href="#">{{ __('Downloads') }}</a>
                    <ul class="nav-dropdown">
                        <li><a href="{{ route('render_news') }}">{{ __('News') }}</a></li>
                        <li><a href="{{ route('render_other') }}">{{ __('Others') }}</a></li>

                    </ul>
                </li>
                <li><a href="#">{{ __('Gallery') }}</a>
                    <ul class="nav-dropdown">
                        <li><a href="{{ route('render_images') }}">{{ __('Photo Gallery') }}</a></li>
                        <li><a href="{{ route('render_videos') }}">{{ __('Video Gallery') }}</a></li>
                    </ul>
                </li>


                <li><a href="{{ route('contact_page') }}">{{ __('Contact') }}</a></li>
                <li>

                </li>
            </ul>
        </nav>
    </div>
</section>

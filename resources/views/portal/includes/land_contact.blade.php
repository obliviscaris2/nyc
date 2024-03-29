

    {{-- For Form Section --}}
    <section class="contact_form wid_mar">
        <div class="container">
            <h1 class="sec_title">
               {{ __("Contact") }}
            </h1>
            <div class="row">
                <div class="col-md-6 cform_left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28263.06916784706!2d85.35562573700676!3d27.689990849126154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1b47d18015fd%3A0xbbd249f6c19d61b7!2sNational%20Youth%20Council!5e0!3m2!1sen!2snp!4v1679198875982!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="col-md-6 cform_right">
                    <form id="quick_contact" class="form-horizontal" method="POST" role="form" action="{{ route('admin.contactus.store') }}">
                        @csrf
                        <div class="form-group">

                            <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value=""
                                required>

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email"
                                value="" required>

                        </div>

                        <div class="form-group">


                            <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone No."
                                required>


                        </div>

                        <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"
                            required></textarea>

                            <div class="g-recaptcha" data-sitekey="your_site_key"></div>

                        <button class="btn send-button" id="submit" type="submit" value="SEND">
                            <div class="alt-send-button">
                                <i class="fa fa-paper-plane"></i><span class="send-text">Let's Connect</span>
                            </div>

                        </button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@include('layouts.frontpage_nav.nav')

    <div class="section about_hero">
        <div class="wrapper about_wrapper">
            <h1 class="h1">About Us</h1>
            <p class="paragraph about-us-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
                <br/>
                <br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.
                <br/>
        </div>
    </div>

    <div class="section lighter_bg">
        <div class="wrapper">
            <div class="cta_contain">
                <div class="cta_heading_subheading">
                    <h3 class="h3 enlarged">Keep up to date with Tanager.</h3>
                    <p class="paragraph _16px">Sign up to be the first to receive special news and event updates.</p>
                </div>
                <div class="form-block w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" class="form">
                        <input type="email" class="text-field w-input" maxlength="256" name="email" data-name="Email" placeholder="Email address" id="email" required="" />
                        <input type="submit" value="Subscribe" data-wait="Please wait..." class="button w-button" />
                    </form>
                    <div class="success-message w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layouts.frontpage_footer.footer_section')

@include('layouts.frontpage_footer.footer')

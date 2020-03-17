@include('layouts.frontpage_nav.nav')

    <div class="section about_hero">
        <div class="wrapper about_wrapper">
            <h1 class="h1">About Us</h1>
            <p class="paragraph about-us-p">

                Tanager offers an amazing mix of both local and international cuisines at affordable prices. We also provide a nice dining experience accompanied by our professional service delivery.
                We are perfect for your casual rendezvous, birthday parties, corporate events and even when sharing that special moment with your loved one.

                <br/>
                <br/>

                We have extremely flexible menu. Tell us what you would like to have and we will make it just the way you like it. We make sure your food is tasty, fresh and of high quality to your health.
                We believe in nothing but the best for our customers. We are proud of you, thank you so much for your continued business. We are also open to ideas, critism, complains and suggestions.
                If you have any issue, kindly feel free to contact us through our mobile number or email and we will get back to you as soon as possible.

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

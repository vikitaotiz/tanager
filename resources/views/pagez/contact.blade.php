@include('layouts.frontpage_nav.nav')


    <div class="section">
        <div class="w-layout-grid contact-grid">
            <div class="locations_contact_contain">
                <h2 class="h2">Our Locations</h2>
                <div class="flex locations">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.30094301840086!2d36.82297622323551!3d-1.284904557395527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d6455c1985%3A0x378d73906d00e98f!2sTanager%20Restaurant!5e0!3m2!1sen!2ske!4v1583238737020!5m2!1sen!2ske" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="contact-form-block w-form">
                <form id="email-form" name="email-form" data-name="Email Form" class="contact_form">
                    <h2 class="h2">Contact Us</h2>
                    <input type="text" class="text-field contact_form_field w-input" maxlength="256" name="Name" data-name="Name" placeholder="Full Name*" id="Name" required="" />
                    <input type="email" class="text-field contact_form_field w-input" maxlength="256" name="Email" data-name="Email" placeholder="Email Address*" id="Email-3" required="" />
                    <textarea placeholder="How can we help you?" maxlength="5000" id="Message" name="Message" data-name="Message" required="" class="textarea w-input"></textarea>
                    <input type="submit" value="Submit" data-wait="Please wait..." class="button w-button" />
                </form>
                <div class="success-message w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="error-message w-form-fail">
                    <div>Oops! It looks like something went wrong. Please try again.</div>
                </div>
            </div>
        </div>
    </div>

@include('layouts.frontpage_footer.footer_section')

@include('layouts.frontpage_footer.footer')

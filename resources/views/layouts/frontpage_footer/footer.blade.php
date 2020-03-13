<!-- Modal -->
<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #AB8D69;">
          <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">Create Table Reservation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form method="post" action="{{ route('reservations.store') }}">
                @csrf

                <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-first_name">
                                    {{ __('First Name') }}
                                </label>
                                <input type="text" name="first_name" id="input-first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" placeholder="{{ __('First Name') }}" value="{{ old('first_name') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'first_name'])
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-last_name">
                                    {{ __('Last Name') }}
                                </label>
                                <input type="text" name="last_name" id="input-last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Last Name') }}" value="{{ old('last_name') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'last_name'])
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-phone">
                                    {{ __('Phone') }}
                                </label>
                                <input type="text" name="phone" id="input-phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone') }}" value="{{ old('phone') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'phone'])
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="dtp_input1" class="form-control-label">Date and Time</label>
                                <div class="input-group date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy MM dd- HH:ii" data-link-field="dtp_input1">
                                    <input name="reservation_date" class="form-control form_datetime"  type="text" id="form_datetime" placeholder="{{ __('Reservation Date') }}" value="{{ old('reservation_date') }}" required autofocus>
                                </div>
                                <input type="hidden" id="dtp_input1" value=""><br>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('no_of_people') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-first_name">
                                    {{ __('Number of People') }}
                                </label>
                                <input type="number" name="no_of_people" id="input-no_of_people" class="form-control{{ $errors->has('no_of_people') ? ' is-invalid' : '' }}" placeholder="{{ __('Number of People') }}" value="{{ old('no_of_people') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'first_no_of_people'])
                            </div>
                        </div>

                        <div class="col-md-6">
                                <label class="form-control-label">
                                    {{ __('Email (Optional)') }}
                                </label>
                                <input type="text" name="email" class="form-control" placeholder="{{ __('Email') }}" value="{{ old('email') }}" >
                        </div>
                    </div>

                    <div>
                        <label class="form-control-label">
                            {{ __('More Information (Optional)') }}
                        </label>

                        <input id="menu1_description" type="hidden" name="more_info" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Menu Descritpion') }}" required autofocus>
                        <trix-editor input="menu1_description"></trix-editor>

                    </div><hr>

                    <div class="">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-primary">{{ __('Create Reservation') }}</button>
                    </div>

                </div>
            </form>

        </div>
      </div>
    </div>
  </div>


<div class="footer_wrapper div-block-11">
    <div id="footer" class="section footer_section">
        <div class="wrapper">
            <div class="w-layout-grid footer_grid">
                <div class="locations_contain">
                    <div class="footer_heading">Locations</div>
                    <div class="w-layout-grid locations_grid">
                        <div class="location_wrap">
                            <div class="city">NAIROBI, KENYA.</div>
                            <div class="address">Central Business District
                                <br/>Kaunda Street</div>
                            <div class="contact">
                                <a href="tel:{{env('APP_PHONE')}}" class="text_link">{{env('APP_PHONE')}}</a>
                            </div>
                            <div class="email less_top_padding">
                                <a href="mailto:{{env('APP_EMAIL')}}" class="email_link">{{env('APP_EMAIL')}}</a></div>
                        </div>

                    </div>
                </div>
                <div class="opening_hours">
                    <div class="footer_heading">Opening Hours</div>
                    <div class="opening_days_and_hours_wrap">
                        <div class="days">Monday-Friday</div>
                        <div class="hours">10am-11pm</div>
                    </div>
                    <div class="opening_days_and_hours_wrap">
                        <div class="days">Saturday</div>
                        <div class="hours">10am-12am</div>
                    </div>
                    <div class="opening_days_and_hours_wrap">
                        <div class="days">Sunday</div>
                        <div class="hours">10am-10pm</div>
                    </div>
                </div>
                <div id="w-node-99e72f03c60e-2f03c5d3" class="logo_and_email">
                    <a href="/" class="logo_footer_home_link" style="text-decoration: none;">
                        <h3 class="h3">T . G</h3>
                    </a>
                    <a href="mailto:info@tanager.com?subject=Gourmet%20Burger%20Table%20Booking" class="email">info@tanager.com</a>
                    <div class="sm_icons_wrap">
                        <a href="{{env('APP_FACEBOOK')}}" target="_blank" class="sm_link first-link w-inline-block">
                            <img src="{{asset('tanager/images/facebook.png')}}" width="15" alt="" />
                        </a>
                        <a href="{{env('APP_INSTAGRAM')}}" target="_blank" class="sm_link w-inline-block">
                            <img src="{{asset('tanager/images/instagram.png')}}" width="15" sizes="(max-width: 767px) 15px, (max-width: 991px) 2vw, 15px" alt="" />
                        </a>
                        <a href="{{env('APP_TWITTER')}}" target="_blank" class="sm_link w-inline-block">
                            <img src="{{asset('tanager/images/twitter.png')}}" width="17" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights_wrap">
        <div class="wrapper">
            <div class="copyright">&copy; Copyright Tanager 2020.</div>
        </div>
    </div>
</div>
</div>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> --}}
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('tanager/js/webflow.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="{{asset('js/trix.js')}}"></script>


<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->

<script>

    flatpickr('#form_datetime', {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });

</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5dca819343be710e1d1ce00f/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

@toastr_js
@toastr_render


</body>

</html>

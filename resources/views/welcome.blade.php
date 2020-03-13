@include('layouts.frontpage_nav.nav')


        <div class="section hero_section">
            <div class="wrapper">
                <div class="hero_content">
                    <div class="hero_h_wrap">
                        <h1 class="h1 center_on_tablet_exception">Tanager. The way food should be. </h1>
                        <p class="paragraph hero_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <a href="tel:{{env('APP_PHONE')}}" class="button w-button">Make Your Order</a>
                    </div>
                    <div class="hero_images_contain">
                        <img src="{{asset('tanager/images/scattered_salt.png')}}" data-w-id="545ab9f0-4fbf-2d7a-6412-a0f68ae88154" alt="" class="scattered_salt_image" />
                        <img src="{{asset('tanager/images/black_pepper.png')}}" width="264" sizes="(max-width: 767px) 30vw, 264px" data-w-id="545ab9f0-4fbf-2d7a-6412-a0f68ae88155" alt="" class="ground_pepper_image" />
                        <div class="burger_contain">
                            <img src="{{asset('tanager/images/meat_and_cheese.png')}}" width="431" data-w-id="545ab9f0-4fbf-2d7a-6412-a0f68ae88157" alt="" class="meat_and_cheese" />
                            <img src="{{asset('tanager/images/tomato.png')}}" width="366" alt="" class="tomato" />
                            <img src="{{asset('tanager/images/pickel.png')}}" width="302" alt="" class="pickel" />
                            <img src="{{asset('tanager/images/bottom_bun.png')}}" data-w-id="545ab9f0-4fbf-2d7a-6412-a0f68ae8815a" alt="" class="bottom_bun" />
                            <img src="{{asset('tanager/images/lettuce_and_onion.png')}}" alt="" class="lettuce-and-onion" />
                            <img src="{{asset('tanager/images/top_bun.png')}}" data-w-id="545ab9f0-4fbf-2d7a-6412-a0f68ae8815c" alt="" class="top-bun" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section main_section">
            <div class="wrapper">
                <div class="card_wrap">
                    <div class="w-layout-grid card_grid">
                        <div class="card_image">
                            <img src="{{asset('tanager/images/about_us.jpg')}}" alt="" width="100%" height="100%">
                        </div>
                        <div class="card_content">
                            <img src="{{asset('tanager/images/scattered_salt.png')}}" width="353" data-w-id="c6e4afa8-ccc0-5906-9987-7073a957e3ea" alt="" class="bg_salt_image" />
                            <h3 class="h3">Learn More</h3>
                            <h2 class="h2 dark_h2">About Us</h2>
                            <p class="paragraph dark_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. </p>
                            <a href="{{route('pagez.about')}}" class="text_link">Read Our Story  <span class="arrow">↠</span></a>
                            <div class="card_right_images_contain"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="w-layout-grid discover_menu_grid">
                    <div id="w-node-c1de7c334a31-677eebb4">
                        <h3 class="h3 align_right">Review</h3>
                        <h2 class="h2 align_right">Our Full Menu</h2></div>
                    <div class="div-block">
                        <p class="paragraph max_w_400px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus.</p>
                    </div>
                    <div id="w-node-c1de7c334a39-677eebb4" class="relative_div_block">
                        <img src="{{asset('tanager/images/fe_fries.png')}}" width="326" alt="" class="appitizer_image" />
                        <img src="{{asset('tanager/images/scattered_salt.png')}}" width="272" data-w-id="c6a7da8e-3471-b7c2-2090-c1de7c334a3b" style="opacity:0" alt="" class="appitizer_salt appitizer_salt_2" />
                        <img src="{{asset('tanager/images/scattered_salt.png')}}" width="272" data-w-id="c6a7da8e-3471-b7c2-2090-c1de7c334a3c" style="opacity:0" alt="" class="appitizer_salt" />
                    </div>
                    <div>
                        <h3 class="h3">Appetizers </h3>
                        <p class="paragraph max_w_300px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum </p>
                        <a href="tel:{{env('APP_PHONE')}}" class="button w-button">Make Your Order</a>

                    </div>
                    <div id="w-node-c1de7c334a42-677eebb4" class="div-block-2">
                        <h3 class="h3">Main Dishes</h3>
                        <p class="paragraph max_w_300px">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                        </p>
                        <a href="tel:{{env('APP_PHONE')}}" class="button w-button">Make Your Order</a>

                    </div>
                    <div id="w-node-c1de7c334a47-677eebb4" class="relative_div_block">
                        <img src="{{asset('tanager/images/main_dish.png')}}" width="423" alt="" class="main_dish_image" />
                        <img src="{{asset('tanager/images/scattered_salt.png')}}" data-w-id="c6a7da8e-3471-b7c2-2090-c1de7c334a49" style="opacity:0" alt="" class="main_dish_salt main_dish_salt_2" />
                        <img src="{{asset('tanager/images/scattered_salt.png')}}" data-w-id="c6a7da8e-3471-b7c2-2090-c1de7c334a4a" style="opacity:0" alt="" class="main_dish_salt" />
                    </div>
                    <div id="w-node-c1de7c334a4b-677eebb4" class="relative_div_block">
                        <img src="{{asset('tanager/images/salad.png')}}" width="355" alt="" class="side_dish_image" />
                        <img src="{{asset('tanager/images/scattered_salt.png')}}" data-w-id="c6a7da8e-3471-b7c2-2090-c1de7c334a4d" style="opacity:0" alt="" class="side_dish_salt saide_dish_salt_2" />
                        <img src="{{asset('tanager/images/scattered_salt.png')}}" data-w-id="c6a7da8e-3471-b7c2-2090-c1de7c334a4e" style="opacity:0" alt="" class="side_dish_salt" />
                    </div>
                    <div>
                        <h3 class="h3">Side Dishes</h3>
                        <p class="paragraph max_w_300px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum </p>
                        <a href="tel:{{env('APP_PHONE')}}" class="button w-button">Make Your Order</a>

                    </div>
                    <div id="w-node-c1de7c334a54-677eebb4" class="div-block-3">
                        <h3 class="h3">Desserts</h3>
                        <p class="paragraph max_w_300px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius </p>
                        <a href="tel:{{env('APP_PHONE')}}" class="button w-button">Make Your Order</a>

                    </div>
                    <div id="w-node-c1de7c334a59-677eebb4" class="relative_div_block">
                        <img src="{{asset('tanager/images/dessert.png')}}" width="273" alt="" class="dessert_image" />
                        <img src="{{asset('tanager/images/scattered_salt.png')}}" data-w-id="c6a7da8e-3471-b7c2-2090-c1de7c334a5b" style="opacity:0" alt="" class="dessert_salt_image" />
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="card_wrap">
                    <div class="w-layout-grid card_grid">
                        <div class="card_image events_card_img">
                            <img src="{{asset('tanager/images/catering_food.jpg')}}" alt="" width="100%" height="100%">
                        </div>
                        <div class="card_content">
                            <h3 class="h3">Discover</h3>
                            <h2 class="h2 dark_h2">We Also Offer Catering.</h2>
                            <p class="paragraph dark_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra.</p>
                            {{-- <a href="events.html" class="text_link">See Our Upcoming Events <span class="arrow">↠</span></a> --}}
                            <div class="card_right_images_contain"></div>
                            <img src="{{asset('tanager/images/scattered_salt.png')}}" width="353" data-w-id="c245d659-15d3-7e26-d554-aaf8c6fb344c" style="opacity:0" alt="" class="bg_salt_image upcoming_events_card bottom_salt" />
                            <img src="{{asset('tanager/images/scattered_salt.png')}}" width="353" data-w-id="01aa5b65-783d-8fdb-08bd-953db1793bdf" alt="" class="bg_salt_image upcoming_events_card" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section high_quality_ingredients_section">
            <div class="wrapper flex_vertical_center">
                <h3 class="h3">Enjoy</h3>
                <h2 class="h2">Our High Quality Ingredients</h2>
                <p class="paragraph centered_p max_w_600px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum.</p>
                <div class="ingredients_image_wrap">
                    <div class="left_side_ingredients">
                        <img src="{{asset('tanager/images/soy.png')}}" width="110" sizes="(max-width: 479px) 21vw, (max-width: 767px) 66px, 110px" alt="" class="ingredient_soy" />
                        <img src="{{asset('tanager/images/onion.png')}}" width="71" alt="" class="ingredient_onion" />
                        <img src="{{asset('tanager/images/lemon.png')}}" width="122" alt="" class="ingredient_lemon" />
                    </div>
                    <img src="{{asset('tanager/images/raw_meat.png')}}" width="318" alt="" class="raw_meat" />
                    <div class="right_side_ingredients">
                        <img src="{{asset('tanager/images/top_of_tomato.png')}}" width="91" alt="" class="top_tomato_image" />
                        <img src="{{asset('tanager/images/mushroom.png')}}" width="102" alt="" class="ingredient_mushroom" />
                        <img src="{{asset('tanager/images/scattered_salt.png')}}" width="101" alt="" class="ingredient_basil" /></div>
                </div>
            </div>
        </div>


@include('layouts.frontpage_footer.footer_section')

@include('layouts.frontpage_footer.footer')

@include('layouts.frontpage_nav.nav')

<div class="section menu_section">
    <div class="wrapper menu_wrapper">
        <div class="menu_nav w-nav" data-collapse="medium" data-animation="default" data-duration="400">
            <div class="menu_nav_sticky">
                <h1 class="h1">Menu Items</h1>
                <div class="menu_links_wrap w-nav-menu">
                    @if ($categorymenus->count() > 0)
                        @foreach ($categorymenus as $category)
                           <a href="#{{$category->title}}" class="menu_nav_link">{{$category->title}}</a>
                        @endforeach
                    @else
                        <h3>No Menu Category Item Created.</h3>
                    @endif

                </div>

                <div class="menu-button w-nav-button">
                    <div class="hamburger_contain">
                        <div class="hamburger_line"></div>
                        <div class="hamburger_line shorter_line"></div>
                        <div class="hamburger_line"></div>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="menu_contain">

            @if ($categorymenus->count() > 0)
                @foreach ($categorymenus as $category)
                    <div id="{{$category->title}}" class="menu_category_wrapper">
                        <div class="menu_category_heading">{{$category->title}}</div>
                        <hr>
                        <div class="w-layout-grid menu_grid">
                        @if ($category->menus->count() > 0)
                            @foreach ($category->menus as $menu)
                                <div class="menu_item" style="border:1px solid #AB8D69; padding: 2%; border-radius: 3px;">
                                    <div>
                                        @if ($menu->image)
                                            <img src="{{asset('storage/'.$menu->image)}}" alt="{{$menu->title}}" width="95%" height="200">
                                        @else
                                            <h5>Image not provided</h5>
                                        @endif
                                    </div>
                                    <div class="name_and_price_wrap">
                                        <div class="menu_item_name">{{$menu->title}} <small>(single): </small></div>
                                        <div class="menu_price"><u>Kshs{{$menu->price}}</u></div>
                                    </div>
                                    <div class="menu_price"><i><small>( Take away: +Ksh 20)</small></i></div>
                                    <div class="menu_item_description max_w_400px" style="color: #000;">
                                        {!!$menu->description!!}
                                    </div>
                                    <div>
                                        <p>
                                            <a href="tel:{{env('APP_PHONE')}}" class="button btn" style="background-color: #AB8D69;">Order Now &#9742;</a>
                                            <a href="https://api.whatsapp.com/send?phone={{env('APP_WHATSAPP')}}" target="_blank" class="button btn" style="background-color: #AB8D69;">
                                                <img src="{{asset('tanager/images/whatsapp.png')}}" width="15" alt="" />
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h3>No menu items for this category.</h3>
                        @endif
                      </div>
                   </div>
                @endforeach
            @else
                <h3>No Menu Category Item Created.</h3>
            @endif

        </div>
    </div>
</div>

@include('layouts.frontpage_footer.footer_section')

@include('layouts.frontpage_footer.footer')

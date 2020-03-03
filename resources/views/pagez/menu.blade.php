@include('layouts.frontpage_nav.nav')


    <div class="section menu_section">
        <div class="wrapper menu_wrapper">
            <div class="menu_nav">
                <div class="menu_nav_sticky">
                    <h1 class="h1">Menu Category</h1>
                    <div class="menu_links_wrap">
                        @if ($categorymenus->count() > 0)
                            @foreach ($categorymenus as $category)
                                <a href="#{{$category->title}}" class="menu_nav_link">{{$category->title}}</a>
                            @endforeach
                        @else
                            <h3>No Menu Category Item Created.</h3>
                        @endif

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
                                    <div class="menu_item" style="border:1px solid #AB8D69; padding: 4%; border-radius: 3px;">
                                        <div>
                                            <img src="{{asset('tanager/images/burger.png')}}" alt="">
                                        </div>
                                        <div class="name_and_price_wrap">
                                            <div class="menu_item_name">{{$menu->title}}</div>
                                            <div class="menu_price">Kshs{{$menu->price}}</div>
                                        </div>
                                        <div class="menu_item_description max_w_400px">
                                            {{$menu->description}}
                                        </div>
                                        <div>
                                            <a href="tel:123456789" target="_blank" class="text_link">Make Your Order</a>
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

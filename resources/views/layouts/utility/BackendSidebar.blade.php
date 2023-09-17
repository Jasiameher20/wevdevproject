<ul>
                    <li>
                        <a href="javascript:;" class="side-menu side-menu--active side-menu--open">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="side-menu__sub-open">
                            <li>
                                <a href="index.html" class="side-menu side-menu--active side-menu--open">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @hasanyrole(['admin', 'employer'])
                    <li>
                        <a href="
                        {{ route('category.all') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title">
                              Job Categories 
                            </div>
                        </a>
                       
                    </li>

                    <li>
                        <a href="
                           {{ route('subcategories.all') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title">
                              Job Sub-Categories 
                            </div>
                        </a>
                       
                    </li>

                    <li>
                        <a href="
                           {{ route('all.users') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title">
                              All Users 
                            </div>
                        </a>
                       
                    </li>
                    @endhasanyrole
        </ul>

                <li>
                        <a href="" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title">
                              Job Post
                            </div>
                        </a>
                       
                </li>



    <li>
        <a href="javascript:;" class="side-menu {{ request()->routeIs('posts.*') ? 'side-menu--active side-menu--open' : '' }}">
            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
            <div class="side-menu__title">
                 Job Post Management
                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
            </div>
        </a>
        <ul class=" {{ request()->routeIs('posts.*') ? 'side-menu__sub-open' : '' }}">
            @hasanyrole(['admin', 'employer'])
            <li>
                <a href="{{ route('posts.add') }}" class="side-menu side-menu--active side-menu--open">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Add Posts </div>
                </a>
            </li>
            @endhasanyrole
            <li>
                <a href="{{ route('posts.all') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> All Posts </div>
                </a>
            </li>
           
        </ul>
    </li>

            

 
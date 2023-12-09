<!-- ==================== Start Navgition ==================== -->
<div id="navi" class="topnav">
    <div class="container">
        <div class="menu-icon cursor-pointer">
                <span class="icon">
                    <i></i>
                    <i></i>
                </span>
            <span class="text"><span class="word">Menu</span></span>
        </div>
    </div>
</div>

<div class="hamenu">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="menu-text">
                    <div class="text">
                        <h2>Menu</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="menu-links">
                    <ul class="main-menu rest">
                        <li>
                            <div class="o-hidden">
                                <a href="{{ route('index') }}" class="link"><span class="fill-text"
                                                                                  data-text="Home">Home</span></a>
                            </div>
                        </li>
                        <li>
                            <div class="o-hidden">
                                <div class="link cursor-pointer dmenu"><span class="fill-text"
                                                                             data-text="Services">Services</span>
                                    <i></i>
                                </div>
                            </div>
                            <div class="sub-menu">
                                <ul>
                                    @if(count($globalServices) > 0)
                                        @foreach($globalServices as $globalService)
                                            <li>
                                                <a href="https://wa.me/{{ (!empty(Voyager::setting('site.phone')) ? Voyager::setting('site.phone') : '') }}?text=Hi Ahtesham, I am interested in your {{ $globalService->title ?? "" }} Service."
                                                   class="sub-link">{{ $globalService->title ?? "" }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="o-hidden">
                                <div class="link cursor-pointer dmenu"><span class="fill-text"
                                                                             data-text="Blogs">Blogs</span> <i></i>
                                </div>
                            </div>
                            <div class="sub-menu">
                                <ul>
                                    @if(count($globalCategories) > 0)
                                        @foreach($globalCategories as $globalCategory)
                                            <li>
                                                <a class="sub-link"
                                                   href="{{ route('category',$globalCategory->slug) }}">{{ $globalCategory->name ?? "" }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="o-hidden">
                                <a href="mail:contact@ahtesham.me" class="link"><span class="fill-text" data-text="Contact">Contact</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 d-flex align-items-end">
                <div class="cont-info full-width">
                    <div class="item">
                        <h5 class="mb-15">Get In Touch</h5>
                        <p>{{ (!empty(Voyager::setting('site.site_address')) ? Voyager::setting('site.site_address') : '') }}</p>
                        <p class="underline main-color mt-5 mb-5"><a
                                href="https://api.whatsapp.com/send?phone={{ (!empty(Voyager::setting('site.phone')) ? Voyager::setting('site.phone') : '') }}">+{{ (!empty(Voyager::setting('site.phone')) ? Voyager::setting('site.phone') : '') }}">{{ (!empty(Voyager::setting('site.phone')) ? Voyager::setting('site.phone') : '') }}</a>
                        </p>
                        <p>
                            <a href="mail:contact@ahtesham.me">{{ (!empty(Voyager::setting('site.email')) ? Voyager::setting('site.email') : '') }}</a>
                        </p>
                    </div>
                    <div class="search-form">
                        <div class="form-group">
                            <input type="text" name="search" placeholder="Search">
                            <button><span class="pe-7s-search"></span></button>
                        </div>
                    </div>
                    <ul class="rest social-text d-flex mt-50 fz-13">
                        <li class="mr-20">
                            <a href="{{ route('linktree') }}"
                               class="hover-this"><span class="hover-anim">LinkTree</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==================== End Navgition ==================== -->

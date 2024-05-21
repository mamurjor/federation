<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('index') }}" class="app-brand-link menu-link">
            <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                        fill="#7367F0" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                        fill="#7367F0" />
                </svg>
                {{-- <img  width="32" height="22" src="C:\Users\Developer Tarek\Desktop\Screenshot_4.png" alt=""> --}}
            </span>
            <span class="app-brand-text demo menu-link menu-text fw-bold">Federation</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div style="font-size: 23px;" class="my-2 ms-3">
        <a style="text-decoration: none;" href="{{ route('admin.dashboard') }}">Main Dashboard</a>
    </div>

    <div class="menu-inner-shadow"></div>



    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item active">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
            <ul class="menu-sub mb-3">

                <li class="menu-item">
                    <a href="{{ route('country.index') }}" class="menu-link">
                        <div data-i18n="CRM">Country </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('district.index') }}" class="menu-link">
                        <div data-i18n="CRM">district </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('tehsil.index') }}" class="menu-link">
                        <div data-i18n="CRM">Tehsil  </div>
                    </a>
                </li>
            
                <li class="menu-item">
                    <a href="{{ route('profession.index') }}" class="menu-link">
                        <div data-i18n="CRM">Profession   </div>
                    </a>
                </li>
                <!-- Other submenu items -->
            </ul>
        </li>
        <!-- Other top-level menu items -->
    
        <!-- WEb Site Setting -->
        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">WEb Site Setting</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('herosection.index') }}" class="menu-link">
                        <div data-i18n="CRM"> Hero section  </div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('missionsection.index') }}" class="menu-link">
                        <div data-i18n="CRM">Mission section  </div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('sliersection.index') }}" class="menu-link">
                        <div data-i18n="CRM">Slider Section  </div>
                    </a>
                </li>
                <!-- Other submenu items -->
            </ul>
        </li>
        <!-- Other top-level menu items -->
    
        <!-- Blog -->
        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Classified Ads</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('classified.indexforadmin') }}" class="menu-link">
                        <div data-i18n="eCommerce">Classified ads</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('classifiedcategory.index') }}" class="menu-link">
                        <div data-i18n="eCommerce">Classified category</div>
                    </a>
                </li>
                <!-- Other submenu items -->
            </ul>
        </li>
        <!-- Other top-level menu items -->
    
        <!-- Cast -->
        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Matromonial</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('matromonialreligion.index') }}" class="menu-link">
                        <div data-i18n="eCommerce">Matromonial religion</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('matromonialmarital.index') }}" class="menu-link">
                        <div data-i18n="eCommerce">Matromonial marital</div>
                    </a>
                </li>
                <li class="menu-item" style="">
                    <a href="{{ route('matromonial.indexforadmin') }}" class="menu-link">
                        <div data-i18n="Logistics">Matromonial</div>
                    </a>
                </li>
                <!-- Other submenu items -->
            </ul>
        </li>
        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Vote</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item" style="">
                    <a href="{{ route('votetype.index') }}" class="menu-link">
                        <div data-i18n="Logistics">Vote type</div>
                    </a>
                </li>
                <li class="menu-item" style="">
                    <a href="{{ route('votepositiontype.index') }}" class="menu-link">
                        <div data-i18n="Logistics">Vote position type</div>
                    </a>
                </li>
                <li class="menu-item" style="">
                    <a href="{{ route('voteannounce.index') }}" class="menu-link">
                        <div data-i18n="Logistics">Vote Announcement</div>
                    </a>
                </li>
                <li class="menu-item" style="">
                    <a href="{{ route('nomini.index') }}" class="menu-link">
                        <div data-i18n="Logistics">Nomini</div>
                    </a>
                </li>
                <li class="menu-item" style="">
                    <a href="{{ route('voteclick.index') }}" class="menu-link">
                        <div data-i18n="Logistics">Vote click</div>
                    </a>
                </li>
                <!-- Other submenu items -->
            </ul>
        </li>
        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Blog</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item" style="">
                    <a href="{{ route('blogcategories.index') }}" class="menu-link">
                        <div data-i18n="Logistics">Blog Categories</div>
                    </a>
                </li>
                <li class="menu-item" style="">
                    <a href="{{ route('blogpost.index') }}" class="menu-link">
                        <div data-i18n="Logistics">Blog Post</div>
                    </a>
                </li>
                <!-- Other submenu items -->
            </ul>
        </li>
        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Cast</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('cast.index') }}" class="menu-link">
                        <div data-i18n="CRM">Cast Post</div>
                    </a>
                </li>
                <!-- Other submenu items -->
            </ul>
        </li>
     
        <!-- Other top-level menu items -->
    </ul>


    
    <script>
        // Add click event listeners to menu-toggle links
        document.querySelectorAll('.menu-toggle').forEach(function(item) {
            item.addEventListener('click', function() {
                // Toggle the 'open' class on the parent menu item
                this.parentElement.classList.toggle('open');
            });
        });
    </script>
    
</aside>

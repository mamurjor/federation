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
        <a style="text-decoration: none; color:#5d596c" href="{{ route('admin.dashboard') }}">

            <div data-i18n="Dashboards">Main Dashboard</div>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1" id="layout-menu">
        <!-- Dashboards -->
        <li class="menu-item active">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
            <ul class="menu-sub mb-3">

                <li class="menu-item">
                    <a href="{{ route('international.index') }}" class="menu-link">
                        <div data-i18n="CRM">Country </div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('divisions.index') }}" class="menu-link">
                        <div data-i18n="CRM">Division </div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('district.index') }}" class="menu-link">
                        <div data-i18n="CRM">district</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('tehsil.index') }}" class="menu-link">
                        <div data-i18n="CRM">Tehsil</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('profession.index') }}" class="menu-link">
                        <div data-i18n="CRM">Profession</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('wings.index') }}" class="menu-link">
                        <div data-i18n="CRM">Wings</div>
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
                <div data-i18n="Dashboards">Web Site Setting</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('herosection.index') }}" class="menu-link">
                        <div data-i18n="CRM"> Hero section </div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('missionsection.index') }}" class="menu-link">
                        <div data-i18n="CRM">Mission section </div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('sliersection.index') }}" class="menu-link">
                        <div data-i18n="CRM">Slider Section </div>
                    </a>
                </li>
                <!-- Other submenu items -->
            </ul>
        </li>
        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-users-gear"></i>
                <div data-i18n="Dashboards"> User management</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('user.index') }}" class="menu-link">
                        <div data-i18n="CRM"> User list </div>
                    </a>
                </li>
                {{-- 
                <li class="menu-item">
                    <a href="{{ route('user.index') }}" class="menu-link">
                        <div data-i18n="CRM">Mission section </div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('sliersection.index') }}" class="menu-link">
                        <div data-i18n="CRM">Slider Section </div>
                    </a>
                </li> --}}
                <!-- Other submenu items -->
            </ul>
        </li>
        <!-- Other top-level menu items -->

        <!-- Blog -->
        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fas fa-ad"></i>
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
            <a href="javascript:void(0);" class="menu-link menu-toggle ">
                <i class="menu-icon tf-icons fa-solid fa-user"></i>
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
                <i class="menu-icon tf-icons fa-solid fa-check-to-slot"></i>
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
                <i class="menu-icon fa-solid fa-blog"></i>
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
                <i class="menu-icon fa-brands fa-fort-awesome"></i>
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
        <li class="menu-item active ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-toolbox"></i>
                <div data-i18n="Dashboards">Company Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('company.setting') }}" class="menu-link">
                        <div data-i18n="CRM">Setting</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('company.setting.header.show') }}" class="menu-link">
                        <div data-i18n="CRM">Header Setting</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('footer.show') }}" class="menu-link">
                        <div data-i18n="CRM">Footer Setting</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('pagesettings.show') }}" class="menu-link">
                        <div data-i18n="CRM">page Setting</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('contact.show') }}" class="menu-link">
                        <div data-i18n="CRM">Contact Setting</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('president.show') }}" class="menu-link">
                        <div data-i18n="CRM">President Setting</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('blog.show') }}" class="menu-link">
                        <div data-i18n="CRM">Blog Setting</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('join.show') }}" class="menu-link">
                        <div data-i18n="CRM">Join Setting</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('classified.show') }}" class="menu-link">
                        <div data-i18n="CRM">Classified Setting</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('faq.show') }}" class="menu-link">
                        <div data-i18n="CRM">FAQ Setting</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('matromonial.show') }}" class="menu-link">
                        <div data-i18n="CRM">Matromonial Setting</div>
                    </a>
                </li>
                <!-- Other submenu items -->
            </ul>
        </li>
        <li class="menu-item active">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-gear"></i>
                <div data-i18n="Dashboards">Payment Settings</div>
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
    </ul>


    <!-- Other top-level menu items -->
   

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM fully loaded and parsed');
            const templateName = 'defaultTemplateName'; // Replace with your actual template name
    
            // Fetch the showDropdownOnHover setting
            const showDropdownOnHover = localStorage.getItem('templateCustomizer-' + templateName + '--ShowDropdownOnHover') 
                ? localStorage.getItem('templateCustomizer-' + templateName + '--ShowDropdownOnHover') === 'true' 
                : window.templateCustomizer !== undefined 
                    ? window.templateCustomizer.settings.defaultShowDropdownOnHover 
                    : true;
            console.log('showDropdownOnHover:', showDropdownOnHover);
    
            // Function to handle menu item clicks
            function handleMenuItemClick(item) {
                console.log('Clicked item:', item);
                const clickedMenuItem = item.parentElement;
                const isAlreadyOpen = clickedMenuItem.classList.contains('open');
                console.log('Is already open:', isAlreadyOpen);
    
                // Close all other open menus
                document.querySelectorAll('.menu-item.open').forEach(function(openItem) {
                    if (!openItem.contains(clickedMenuItem)) {
                        slideUp(openItem.querySelector('.menu-sub'));
                        openItem.classList.remove('open');
                    }
                });
    
                // Toggle the clicked item
                if (!isAlreadyOpen) {
                    clickedMenuItem.classList.add('open');
                    slideDown(clickedMenuItem.querySelector('.menu-sub'));
                } else {
                    clickedMenuItem.classList.remove('open');
                    slideUp(clickedMenuItem.querySelector('.menu-sub'));
                }
            }
    
            // Slide down function
            function slideDown(element) {
                if (!element) return; // Prevent errors if element is null
                element.style.display = 'block';
                const height = element.scrollHeight;
                element.style.maxHeight = '0';
                element.style.transition = 'none';
    
                requestAnimationFrame(function() {
                    element.style.maxHeight = height + 'px';
                    element.style.transition = 'max-height 0.3s ease-in-out';
                });
            }
    
            // Slide up function
            function slideUp(element) {
                if (!element) return; // Prevent errors if element is null
                element.style.maxHeight = element.scrollHeight + 'px';
                element.style.transition = 'none';
    
                requestAnimationFrame(function() {
                    element.style.maxHeight = '0';
                    element.style.transition = 'max-height 0.3s ease-in-out';
                });
    
                element.addEventListener('transitionend', function() {
                    element.style.display = 'none';
                }, { once: true });
            }
    
            // Function to set the active menu based on current URL or route
            function setActiveMenu() {
                const currentUrl = window.location.href;
                console.log('Current URL:', currentUrl);
                document.querySelectorAll('.menu-item').forEach(function(menuItem) {
                    const menuLink = menuItem.querySelector('.menu-link');
                    if (menuLink && menuLink.href === currentUrl) {
                        menuItem.classList.add('active');
                        openParentMenus(menuItem);
                    }
                });
            }
    
            // Function to open parent menus up to the top level
            function openParentMenus(menuItem) {
                let parent = menuItem.parentElement;
                while (parent) {
                    if (parent.classList.contains('menu-item')) {
                        parent.classList.add('open');
                        slideDown(parent.querySelector('.menu-sub'));
                    }
                    parent = parent.parentElement;
                }
            }
    
            // Add click event listeners to menu-toggle links
            document.querySelectorAll('.menu-toggle').forEach(function(item) {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    handleMenuItemClick(item);
                });
            });
    
            // Set the active menu on page load
            setActiveMenu();
        });
        </script>




</aside>
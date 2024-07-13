<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
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
            </span>
            <span class="app-brand-text demo menu-text fw-bold"> Federation</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1" id="layout-menu">
        <!-- Dashboards -->
        <li class="menu-item">
            <a href="{{ route('client.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('classified.index') }}" class="menu-link">
                <div data-i18n="CRM">Classified ads </div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('matromonial.index') }}" class="menu-link">
                <div data-i18n="CRM">Matrimonial </div>
            </a>
        </li>


        <!-- Other submenu items -->


        <!-- Other top-level menu items -->
    </ul>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM fully loaded and parsed');
            const templateName = 'defaultTemplateName'; // Replace with your actual template name

            // Fetch the showDropdownOnHover setting
            const showDropdownOnHover = localStorage.getItem('templateCustomizer-' + templateName +
                    '--ShowDropdownOnHover') ?
                localStorage.getItem('templateCustomizer-' + templateName + '--ShowDropdownOnHover') === 'true' :
                window.templateCustomizer !== undefined ?
                window.templateCustomizer.settings.defaultShowDropdownOnHover :
                true;
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
                }, {
                    once: true
                });
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

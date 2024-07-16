<footer id="footer_section" class="footer_section">
    <div class="container pb-2">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-5">
                <div class="footer_heading">
                    <div class="footer_logo mb-4">
                        <img src="{{ asset('frontend/assets/img/home_page/footer/footer_logo.png') }}" class="img-fluid"
                            alt="logo" style="width: 35%;">
                    </div>
                    <p class="footer_p mb-4">

                        <?php
                        
                        if (config('settings.footertext') != null) {
                            echo config('settings.footertext');
                        } else {
                            echo "We are many variations passages available have suffered alteration in some
                                                form by injected humour.";
                        }
                        ?>
                    </p>
                    <a href="tel:+966509231894" class="mb-4 text-decoration-none d-block footer_contacts"><i
                            class="fa-solid fa-phone me-2"></i>

                        <?php
                        
                        if (config('settings.number') != null) {
                            echo config('settings.number');
                        } else {
                            echo '966509231894';
                        }
                        ?>
                    </a>
                    <a href="mailto:juttfederationksa@gmail.com"
                        class="mb-4 text-decoration-none d-block footer_contacts"><i
                            class="fa-solid fa-envelope"></i>



                        <?php
                        
                        if (config('settings.footeremail') != null) {
                            echo config('settings.footeremail');
                        } else {
                            echo ' juttfederationksa@gmail.com';
                        }
                        ?>

                    </a>
                    <address class="footer_contacts"><i class="fa-solid fa-location-dot me-2"></i>
                        <?php
                        
                        if (config('settings.footeraddress') != null) {
                            echo config('settings.footeraddress');
                        } else {
                            echo ' 25/B Milford Road,
                        New York';
                        }
                        ?>

                       </address>

                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5">
                <div class="footer_items footer_itemsone">
                    <h3 class="mb-4 fs-5 ">Compnay</h3>
                    <img class="mb-5 footer_title_border_img"
                        src="{{ asset('frontend/assets/img/home_page/footer/footer_menu_border.png') }}" alt="">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>Home</a></li>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>About Us</a></li>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>Services </a>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>Contact Us</a>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>Help Center</a>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>How it Works</a>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>Registration</a>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5">
                <div class="footer_items footer_itemsone">
                    <h3 class="mb-4 fs-5">Quick Link</h3>
                    <img class="mb-5 footer_title_border_img"
                        src="{{ asset('frontend/assets/img/home_page/footer/footer_menu_border.png') }}" alt="">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>Login</a></li>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>Registration</a>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>Privacy
                                Policy</a></li>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>Terms and
                                Condition</a>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>Profession</a>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>Division Page</a>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>Wings Page</a>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-angles-right me-2 text-danger"></i>All Tehsi</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-5">
                <div class="footer_items">
                    <h3 class="mb-4 fs-5">Newsletter</h3>
                    <img class="mb-5 footer_title_border_img"
                        src="{{ asset('frontend/assets/img/home_page/footer/footer_menu_border.png') }}" alt="">
                    <div class="subcribe_text mb-4">
                        <h4>Subscribe Our Newsletter To Get Latest Update And News</h4>
                    </div>
                    <form action="#">
                        <div class="p-1 bg-light rounded-1 shadow-sm mb-3">
                            <div class="input-group pe-3">
                                <input type="search" placeholder="Write email....." aria-describedby="button-addon1"
                                    class="form-control border-0 bg-light placeholder_search py-2 px-2">
                                <div class="input-group-append align-self-center">
                                    <button id="button-plane" type="submit"
                                        class="btn btn-link text-white bg-danger"><i
                                            class="fa-solid fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <h3 class="mb-2">
                        We Accept</h3>
                    <div class="footer_card_account_image">
                        <img src="{{ config('settings.paymentmethod') }}" alt="paypal">

                        {{-- <img src="{{ asset('frontend/assets/img/footer_page/visa.png') }}" alt="visa">

                        <img src="{{ asset('frontend/assets/img/footer_page/mastercard 1.png') }}" alt="mastercard">

                        <img src="{{ asset('frontend/assets/img/footer_page/discover.png') }}" alt="discover">

                        <img src="{{ asset('frontend/assets/img/footer_page/american-express.png') }}"
                            alt="american-express"> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom_main">
        <div class="container py-3">
            <div class="footer_bottom_main_heading text-white d-flex justify-content-between">
                <p class="mb-0 fw-bold footer_p"><?php echo config('settings.copyright'); ?></p>
                <div class="social_icon footer_social">
                    <a href="#" class="bg-dark p-2 rounded-circle fw-normal me-2"><i
                            class="
                            <?php
                        
                            if (config('settings.ficon') != null) {
                                echo config('settings.ficon');
                            } else {
                                echo 'fa-brands fa-facebook';
                            }
                            ?>
                            "></i></a>
                    <a href="#" class="bg-dark p-2 rounded-circle fw-normal me-2"><i
                            class="<?php
                        
                            if (config('settings.ticon') != null) {
                                echo config('settings.ticon');
                            } else {
                                echo 'fa-brands fa-twitter';
                            }
                            ?>"></i></a>

                    <a href="#" class="bg-dark p-2 rounded-circle fw-normal me-2"><i
                            class="<?php
                        
                            if (config('settings.licon') != null) {
                                echo config('settings.licon');
                            } else {
                                echo 'fa-brands fa-linkedin-in';
                            }
                            ?>"></i></a>
                    <a href="#" class="bg-dark p-2 rounded-circle fw-normal"><i
                            class="<?php
                        
                            if (config('settings.yicon') != null) {
                                echo config('settings.yicon');
                            } else {
                                echo 'fa-brands fa-youtube';
                            }
                            ?>"></i></a>
                </div>
            </div>
        </div>
        <div class="fix_btn">
            <a href="#header_topbar" class="fa-solid fa-angle-up"></a>
        </div>
    </div>

</footer>

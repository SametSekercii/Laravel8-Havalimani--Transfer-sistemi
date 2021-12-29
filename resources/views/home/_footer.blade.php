@php
    $setting=\App\Http\Controllers\HomeController::settinglist();

@endphp
<!-- footer -->
<footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-top-area">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <h3>Main Menu</h3>
                                    <ul class="aa-footer-nav">
                                        <li><a href="/">Anasayfa</a></li>
                                        <li><a href="/contact">İletişim</a></li>
                                        <li><a href="/aboutus">Hakkımızda</a></li>
                                        <li><a href="/referance">Referanslar</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">

                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Useful Links</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">Site Map</a></li>
                                            <li><a href="#">Search</a></li>
                                            <li><a href="#">Advanced Search</a></li>
                                            <li><a href="#">Suppliers</a></li>
                                            <li><a href="#">FAQ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Kuaför Saati</h3>
                                        <address>
                                            <p> {{$setting->updated_at}}</p>
                                            <p><span class="fa fa-phone"></span>{{$setting->phone}}</p>
                                            <p><span class="fa fa-envelope"></span>{{ $setting->email }}</p>
                                        </address>
                                        <div class="aa-footer-social">
                                            <a href="{{ $setting->facebook }}"><span class="fa fa-facebook"></span></a>
                                            <a href="{{ $setting->twitter }}"><span class="fa fa-twitter"></span></a>
                                            <a href="{{ $setting->youtube }}"><span class="fa fa-youtube"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-bottom-area">
                        <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
                        <div class="aa-footer-payment">
                            <span class="fa fa-cc-mastercard"></span>
                            <span class="fa fa-cc-visa"></span>
                            <span class="fa fa-paypal"></span>
                            <span class="fa fa-cc-discover"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->

<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Login or Register</h4>
                <form class="aa-login-form" action="">
                    <label for="">Username or Email address<span>*</span></label>
                    <input type="text" placeholder="Username or email">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password">
                    <button class="aa-browse-btn" type="submit">Login</button>
                    <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                    <div class="aa-register-now">
                        Don't have an account?<a href="account.html">Register now!</a>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset("assets/home") }}/js/bootstrap.js"></script>
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="{{ asset("assets/home") }}/js/jquery.smartmenus.js"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="{{ asset("assets/home") }}/js/jquery.smartmenus.bootstrap.js"></script>
<!-- To Slider JS -->
<script src="{{ asset("assets/home") }}/js/sequence.js"></script>
<script src="{{ asset("assets/home") }}/js/sequence-theme.modern-slide-in.js"></script>
<!-- Product view slider -->
<script type="text/javascript" src="{{ asset("assets/home") }}/js/jquery.simpleGallery.js"></script>
<script type="text/javascript" src="{{ asset("assets/home") }}/js/jquery.simpleLens.js"></script>
<!-- slick slider -->
<script type="text/javascript" src="{{ asset("assets/home") }}/js/slick.js"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="{{ asset("assets/home") }}/js/nouislider.js"></script>
<!-- Custom js -->
<script src="{{ asset("assets/home") }}/js/custom.js"></script>

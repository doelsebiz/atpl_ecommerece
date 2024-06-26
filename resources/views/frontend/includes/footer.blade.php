<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-top-content">
                        <div class="footer-logo">
                            <a href="{{ url('') }}"><h1 class="text-white">ATPL</h1></a>
                        </div>
                        <div class="footer-contect">
                            <div class="icon">
                                <span class="material-symbols-outlined solution-icon">call</span>
                            </div>
                            <div class="content">
                                <span>Call Any Time</span>
                                <h6><a href="tel: 29658718617">+91-000-00000</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row g-lg-4 gy-5">
            <div class="col-lg-4 col-sm-6 d-flex">
                <div class="footer-widget">
                    <div class="footer-contact mb-40">
                        <h4>
                            <span class="material-symbols-outlined">mail</span> Email
                        </h4>
                        <a href=""><span>info@aweentechnologies.com</span></a><br>
                    </div>
                    <div class="footer-contact mb-40">
                        <h4>
                            <span class="material-symbols-outlined">call</span> Call any Time
                        </h4>
                        <a href=""><span>+91-000-00000</span></a><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex justify-content-lg-start justify-content-sm-end">
                <div class="footer-widget">
                    <div class="widget-title">
                        <h4>Our Solutions</h4>
                    </div>
                    <div class="menu-container">
                        <ul>
                            @foreach(DB::table('services')->limit(4)->get() as $r)
                            <li><a href="{{ url('') }}/{{ $r->url }}">{{ $r->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 d-flex justify-content-lg-center">
                <div class="footer-widget">
                    <div class="widget-title">
                        <h4>Company</h4>
                    </div>
                    <div class="menu-container">
                        <ul>
                            <li><a href="{{ url('about-us') }}">About Us</a></li>
                            <li><a href="{{ url('contact-us') }}">About Us</a></li>
                            <li><a href="{{ url('our-team') }}">Our Team</a></li>
                            <li><a href="{{ url('') }}">FAQs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex justify-content-sm-end">
                <div class="footer-widget">
                    <div class="widget-title">
                        <h4>Resources</h4>
                    </div>
                    <div class="menu-container">
                        <ul>
                            <li><a href="{{ url('terms-and-conditions') }}">Terms & Conditions</a></li>
                            <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                            <li><a href="{{ url('purchase-code-policy') }}">Purchase Code Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-btm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-btn-content">
                        <div class="copyright-area">
                            <p>© Copyright {{ date('Y') }} and All Rights Reserved by  <a href="{{ url('') }}">ATPL</a> </p>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="javscript:void(0)"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="javscript:void(0)"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="javscript:void(0)"><i class="bx bxl-pinterest-alt"></i></a></li>
                                <li><a href="javscript:void(0)"><i class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
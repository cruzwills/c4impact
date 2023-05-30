@extends('layouts.app')

@section('content')

    <!-- contact-section -->
    <section class="contact-section mt-5 pt-5 mb-0 pb-0">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                    <div class="info-box">
                        <div class="opening-time">
                            <h3>Opening Hours</h3>
                            <p>Daily: 9.30 AM–6.00 PM</p>
                            <p>Sunday & Holidays: Closed</p>
                        </div>
                        <div class="contact-info">
                            <h3>Contact Info</h3>
                            <ul class="clearfix">
                                <li>Address: 15 Ridge Road, Avondale, Harare</li>
                                <li>Phone: +263 779 970 322 | +263 779777244 | +263 71 900 3123</li>
                                <li><a href="mailto:info@c4impacteval.org">Email: info@c4impacteval.org</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                    <div class="form-inner">
                        <h3>Let’s Conversation<br />with CFIERD</h3>
                        <form method="post" action="http://azim.commonsupport.com/Detox/assets/inc/sendemail.php" id="contact-form" class="default-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="First name *" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your mail *" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Your Phone *" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject *" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message..."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn style-one" type="submit" name="submit-form">Send now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->

@endsection

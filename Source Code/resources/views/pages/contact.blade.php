@extends('layouts.templet')

@section('shop_content')

    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>تواصل معنا</h2>
                        <ul dir="ltr">
                            <li>
                                <a href="/">الرئيسة</a>
                            </li>
                            |
                            <li>تواصل</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="contact-form">
                        <h3>تواصل معنا</h3>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required
                                            data-error=" " placeholder=" أدخل اسمك" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please enter your email" placeholder="أدخل بريدك  الالكتروني" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" class="form-control"
                                            required data-error="" placeholder="أدخل رقم هاتفك" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="subjects" id="subjects" class="form-control" required
                                            data-error="Please enter your subjects" placeholder="عنوان الموضوع" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="5" required
                                            data-error="Please enter your message" class="form-control"
                                            placeholder="أكتب رسالتك"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        إرسال
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="contact-information">

                        <ul class="opening-hours">
                            <img
                                src="https://image.freepik.com/free-vector/happy-cute-kid-girl-with-emoji-expression_97632-1291.jpg" />
                        </ul>
                        <h3>لنبقى على تواصل</h3>
                        <ul class="contact-list">
                            <li>
                                <img src="https://img.icons8.com/bubbles/50/000000/worldwide-location.png" />
                                <a
                                    href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8602.101207526828!2d35.8819216707512!3d32.548179887858566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c767ae6c640b9%3A0xebdf073ea89f6e9d!2sBarada%20Wedding%20Hall!5e0!3m2!1sen!2sjo!4v1619655538991!5m2!1sen!2sjo">اربد
                                    , عمان ,الأردن</a>
                            </li>
                            <li>
                                <img src="https://img.icons8.com/bubbles/50/000000/phone.png" />
                                <a href="tel:0770317363">0770317363</a>
                            </li>
                            <li>
                                <img src="https://img.icons8.com/bubbles/50/000000/email.png" />
                                <a
                                    href="https://templates.envytheme.com/cdn-cgi/l/email-protection#82eae7eeeeedc2e9e7f6e3ecace1edef"><span
                                        class="__cf_email__"
                                        data-cfemail="96fef3fafaf9d6fdf3e2f7f8b8f5f9fb">razan@gmail.com</span></a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8602.101207526828!2d35.8819216707512!3d32.548179887858566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c767ae6c640b9%3A0xebdf073ea89f6e9d!2sBarada%20Wedding%20Hall!5e0!3m2!1sen!2sjo!4v1619655538991!5m2!1sen!2sjo"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>


@endsection

@extends("layouts.app")
@section("content")
    <div class="page-header-wrap bg-img" data-bg="assets/img/bg/page-header-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="page-header-content">
                        <div class="page-header-content-inner">
                            <h1>КОНТАКТЫ</h1>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content-wrapper sm-top">
        <div class="contact-page-content">
            <div class="contact-info-wrapper">
                <div class="container">
                    <div class="row mtn-30">
                        <div class="col-sm-6 col-lg-4">
                            <div class="contact-info-item">
                                <div class="con-info-icon">
                                    <i class="ion-ios-location-outline"></i>
                                </div>
                                <div class="con-info-txt">
                                    <h4>НАШ АДРЕС</h4>
                                    <p>г. Симферополь, ул. Мокрая, д.1, кв.1</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="contact-info-item">
                                <div class="con-info-icon">
                                    <i class="ion-iphone"></i>
                                </div>
                                <div class="con-info-txt">
                                    <h4>НАШ ТЕЛЕФОН</h4>
                                    <p>+7(978)-072-81-94</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="contact-info-item">
                                <div class="con-info-icon">
                                    <i class="ion-ios-email-outline"></i>
                                </div>
                                <div class="con-info-txt">
                                    <h4>НАШ E-MAIL</h4>
                                    <p>arif.settarov@mail.ru</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrapper sm-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="contact-form-content">
                                <h2>ЗАДАЙТЕ ВОПРОС</h2>

                                <div class="contact-form-wrap">
                                    <form action="//whizthemes.com/mail-php/raju/gariongso/mail.php" method="post" id="contact-form">
                                        <div class="contact-form-inner">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-item">
                                                        <label class="sr-only" for="name">name</label>
                                                        <input type="text" name="name" id="name" placeholder="Имя..." required />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-item">
                                                        <label class="sr-only" for="email">email</label>
                                                        <input type="email" name="У" id="email" placeholder="E-mail..." required />
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="input-item">
                                                        <label class="sr-only" for="subject">subject</label>
                                                        <input type="text" name="subject" id="subject" placeholder="Тема..." required />
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="input-item">
                                                        <label class="sr-only" for="message">message</label>
                                                        <textarea name="message" id="message" cols="30" rows="8" placeholder="Сообщение..." required></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="input-item">
                                                        <button class="btn btn-brand">Отправить</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Form Submission Notification -->
                                        <div class="form-message"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-map-wrapper sm-top">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab423853318f6caa6bbda1d28aae502bd299476080a0f21a6be710e84b02884dd&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    @endsection

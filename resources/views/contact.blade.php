@extends('layouts/main')

@section('contact_content')
    <div id="content">
        <div id="contact-content-header-image" class="col-12 contact-content__block__background">
            <div class="col-12 contact-content__background">
                <div class="container">
                    <div id="contact-content-header-text" class="row text-center">
                        <div class="col-12 align-items-center">
                            <h2 class="contact-content__h2__header">Свяжитесь с нами!</h2>
                        </div>
                        <div class="col-12">
                            <p class="contact-content__p__header">Хотите связаться? Мы хотели бы услышать вас. Вот как
                                вы можете связаться с нами ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact-content"  class="container">
            <div class="row justify-content-around">
                <div class="col-md-5 animated bounceInLeft">
                    <div class="row text-center contact-content__box mb-2">
                        <i class="fas fa-phone col-12 contact-content-box__icon"></i>
                        <h4 class="col-12 contact-content-box__h4">Поговорите с помошником</h4>
                        <p class="col-12 contact-content-box__p">
                            Если у Вас возникли проблемы при использовании нашего оборудования, просто перезвоните нашему помошнику. Решим Вашу проблему вместе.
                        </p>
                        <div class="col-12 contact-content-box__for__tel"><a href="tel:+380912330113" class="contact-content-box__tel">+38(091) 233 01 13</a></div>
                    </div>
                </div>
                <div class="col-md-5 animated bounceInRight">
                    <div class="row text-center contact-content__box mb-2">
                        <i class="fas fa-envelope col-12 contact-content-box__icon"></i>
                        <h4 class="col-12 contact-content-box__h4">Свяжитесь с нами по почте</h4>
                        <p class="col-12 contact-content-box__p">
                            У Вас что-то случилось на объекте? Оборудование вышло из строя после неблагоприятной погоды. Напишите нам на почту.
                            Также подвяжите пару фотографий по возможности.
                        </p>
                        <div class="col-12 contact-content-box__for__tel"><a href="mailto:lnr@online.ua" class="contact-content-box__tel">ln12r@online.ua</a></div>
                    </div>
                </div>
                <div class="col-md-5 animated slideInUp">
                    <div class="row text-center contact-content__box mb-2 mt-0">
                        <i class="fab fa-facebook-f col-12 contact-content-box__icon"></i>
                        <h4 class="col-12 contact-content-box__h4">Следите за новостями</h4>
                        <p class="col-12 contact-content-box__p">
                            В нашей работе происходит много интересных вещей, не пропусти их и загляни в нашу группу в Facebook.
                        </p>
                        <div class="col-12 contact-content-box__for__tel"><a href="https://www.facebook.com/lnr7042929" target="_blank" rel="noopener" class="contact-content-box__btn__get__in__touch__blue">Перейти</a></div>
                    </div>
                </div>
                <div class="col-md-5 animated slideInUp">
                    <div class="row text-center contact-content__box mb-2 mt-0">
                        <i class="fab fa-viber col-12 contact-content-box__icon"></i>
                        <h4 class="col-12 contact-content-box__h4">Свяжитесь по вайберу</h4>
                        <p class="col-12 contact-content-box__p">
                            Если у Вас есть важные вопросы, их можно решить одним простым сообщением. Просто отпишите и мы Вам ответим.
                        </p>
                        <div class="col-12 contact-content-box__for__tel"><a href="javascript:void(0)" target="_blank" rel="noopener" class="contact-content-box__btn__get__in__touch__purple">Связаться</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
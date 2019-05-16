@extends('layouts/main')

@section('services_content')
    <div id="content">
        <div id="service-content-header-image" class="col-12 service-content__block__background">
            <div class="col-12 service-content__background">
                <div class="container">
                    <div id="service-content-header-text" class="row">
                        <div class="col-12 service-content__h2__header text-center align-items-center">
                            <h2 class="d-inline-block">Наши услуги</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="service-content-info-card" class="row">

                <div class="col-sm-4 d-flex align-items-center justify-content-center service-content-info-card__image">
                    <img src="{{asset('images/main_content/services/dark_theme/video_camera/video_camera.png')}}"
                         alt="video_camera">
                </div>
                <div id="video_camera" class="service-content-info-card__style__all__block col-sm-8 rounded">
                    <h3>Установка Систем Видеонаблюдения</h3>
                    <article>
                        <p>Локальная система — система, область действия и применения которой ограничена географически
                            территорией здания, предприятия, организации и т. п. Централизованная система имеет один
                            центр и некоторое количество видеокамер.</p>
                        <p>Децентрализованная система представляет себя как
                            совокупность нескольких централизованных, объединенных логически в одну структуру,
                            но физически разделенных и способных функционировать независимо. Наибольшее распространение
                            получили стандарты.
                        </p>
                    </article>
                    <div class="row d-flex justify-content-end">
                        <a href="{{url('request')}}"
                           class="service-content-info-card__style__apply__request col-md-3 btn btn-outline-secondary">
                            Подать заяву
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 d-flex align-items-center justify-content-center service-content-info-card__image">
                    <img src="{{asset('images/main_content/services/dark_theme/security_alarm/security.png')}}"
                         alt="security">
                </div>
                <div id="security" class="service-content-info-card__style__all__block col-sm-8 rounded">
                    <h3>Охранная Система, Сигнализация</h3>
                    <article>
                        <p>Охранная система — автоматизированный комплекс для защиты различных объектов имущества
                            (зданий,
                            включая прилегающую к ним территорию, отдельных помещений, автомобилей, водного транспорта,
                            сейфов и пр.) от процессов или явлений криминального характера.</p>
                        <p>Термин является обобщающим для
                            нескольких типов систем. Основное назначение — предупредить, по возможности предотвратить
                            или
                            способствовать предотвращению ситуаций, в которых будет нанесён вред людям или материальным
                            и не
                            материальным ценностям, связанных прежде всего с действиями других лиц.</p>
                    </article>
                    <div class="row d-flex justify-content-end">
                        <a href="{{url('request')}}"
                           class="service-content-info-card__style__apply__request col-md-3 btn btn-outline-secondary">
                            Подать заяву
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 d-flex align-items-center justify-content-center service-content-info-card__image">
                    <img src="{{asset('images/main_content/services/dark_theme/automatic_telephone_station/ats.png')}}"
                         alt="mini-ATS">
                </div>
                <div id="mini-ATS" class="service-content-info-card__style__all__block col-sm-8 rounded">
                    <h3>Установка Мини-АТС</h3>
                    <article>
                        <p>Офисная АТС, учрежденческая АТС (УАТС), мини-АТС (англ. PABX - Private Automatic Branch
                            eXchange) — автоматическая телефонная станция, предназначенная для использования внутри
                            организации. От АТС, использующихся оператором связи, в первую очередь отличается
                            ориентированностью на малое количество обслуживаемых номеров (обычно не более ста-двухсот),
                            разделением телефонной сети на «внутреннюю» и «внешнюю». </p>
                        <p>В зависимости от типа может принимать
                            от телефонных операторов цифровой поток, аналоговые линии или через коммутируемые сети
                            (IP-телефония). Абонентские устройства — обычно аналоговые телефоны, цифровые или
                            IP-телефоны.</p>
                        <p>Использование УАТС позволяет отказаться от подключения каждого абонентского устройства
                            (телефонного аппарата, модема, факса) организации к телефонной сети общего пользования, что
                            привело бы к выделению каждому абонентскому устройству отдельной линии (обычно оплачиваемой
                            помесячно), и все «внутренние» вызовы проходили бы через АТС оператора связи.</p>
                    </article>
                    <div class="row d-flex justify-content-end">
                        <a href="{{url('request')}}"
                           class="service-content-info-card__style__apply__request col-md-3 btn btn-outline-secondary">
                            Подать заяву
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 d-flex align-items-center justify-content-center service-content-info-card__image">
                    <img src="{{asset('images/main_content/services/dark_theme/access_control_system/ASC.png')}}"
                         alt="ASC">
                </div>
                <div id="ASC" class="service-content-info-card__style__all__block col-sm-8 rounded">
                    <h3>Установка Систем Контроля Доступа</h3>
                    <article>
                        <p>Система контроля доступом (СКУД), представляет собой невероятно эффективную защиту от
                            проникновения на тот или иной объект (помещение) посторонних лиц.</p>
                        <p>Такие устройства чаще всего можно увидеть на крупных предприятиях, где нужно тщательно
                            разграничить доступ сотрудников в различные помещения организации. Кроме того, СКУД является
                            идеальным инструментом для максимально эффективного управления штатом и учета рабочего
                            времени
                            персонала.</p>
                    </article>
                    <div class="row d-flex justify-content-end">
                        <a href="{{url('request')}}"
                           class="service-content-info-card__style__apply__request col-md-3 btn btn-outline-secondary">
                            Подать заяву
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 d-flex align-items-center justify-content-center service-content-info-card__image">
                    <img src="{{asset('images/main_content/services/dark_theme/video_intercom/video_intercom_dark.png')}}"
                         alt="video_intercom">
                </div>
                <div id="video_intercom" class="service-content-info-card__style__all__block col-sm-8 rounded">
                    <h3>Установка Домофонных Систем</h3>
                    <article>
                        <p>Домофонная система является разновидностью систем ограничения доступа. Может быть оборудовано
                            автоматически запирающими устройствами (АЗУ) как электромеханического так и электронного
                            типа.
                            По способу передачи связи: проводной или по радиосигналу.</p>

                        <p>Наиболее сложные по оснащению домофоны служат для обеспечения безопасности проживающих
                            граждан и
                            сохранности их имущества и устанавливаются на подъезды многоквартирных домов. Современные
                            многоквартирные домофоны оснащены следующими устройствами и функциями:</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item service-content__li">1. Аудио- и видеосвязь вызывного блока на
                                подъезде с переговорным устройством в квартире.
                            </li>
                            <li class="list-group-item service-content__li">2. Подключение АЗУ к входной двери.
                            </li>
                            <li class="list-group-item service-content__li">3. Постановка систем охранной и пожарной
                                сигнализаций с выводом на пульт МВД или МЧС.
                            </li>
                            <li class="list-group-item service-content__li">4. Экстренный вызов с переговорного
                                устройства службы 112.
                            </li>
                            <li class="list-group-item service-content__li">5. Обеспечение связи с вызывной панелью
                                служб 112, МЧС, МВД, Скорой помощи, Диспетчерской и т. д.
                            </li>
                            <li class="list-group-item service-content__li">6. Голосовое информирование от служб МЧС и
                                УК ЖКХ как через вызывную панель так и через
                                переговорные устройства.
                            </li>
                            <li class="list-group-item service-content__li">7. Ведение мониторинга с системой
                                распознавания лиц через систему видеонаблюдения в вызывном блоке.
                            </li>
                        </ul>
                    </article>
                    <div class="row d-flex justify-content-end">
                        <a href="{{url('request')}}"
                           class="service-content-info-card__style__apply__request col-md-3 btn btn-outline-secondary">
                            Подать заяву
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

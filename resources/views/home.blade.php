@extends('layouts.main')

@section('home_content')
  <div id="content">
    <div class="container mt-3 mb-3">
      <div class="row justify-content-center">
        <div class="col-12">
          <div>
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
          </div>
          <h2>Личный кабинет {{Auth::user()->name}}</h2>
        </div>
        <div class="row">
          <div class="col-md-3 text-center">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                 aria-controls="v-pills-home" aria-selected="true">Профиль</a>
              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                 aria-controls="v-pills-profile" aria-selected="false">Заявки</a>
              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                 aria-controls="v-pills-messages" aria-selected="false">Отчёт(ы)</a>
            </div>
          </div>
          <div class="col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                   aria-labelledby="v-pills-home-tab">
                <div class="row">
                  <h2 class="col-12 text-center">Ваши данные</h2>
                  <p class="col-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur cum
                    eligendi esse, et ex expedita fugiat, id illo ipsum iste, itaque molestias mollitia neque ratione
                    saepe sequi unde vel!
                  </p>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute
                magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum
                velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore
                Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint
                minim consectetur qui.
              </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident
                laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit
                et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo
                est ea veniam consectetur.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

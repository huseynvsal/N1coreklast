@extends('main.index2')
@section('secondary')
        <div class="slide-textt" >
            <div class="container">
                    <p class="Bizim-stnlklrimi">№1 Çörək Zavodu</p>
                    <p class="-rk-zavodu-sah">Əlaqə</p>
            </div>
        </div>
        <span id="bc_img" name="contact"></span>
        <div class="map">
            <div class="container">
                <div class="d-flex justify-content-center flex-row">
                    @if($news->count() > 0)
                    <div class="col-lg-3 col-sm-12 col-md-12 col-12 left">
                            <p>Новости компании</p>
                        @foreach($news as $new)
                        <div class="col-lg-12 col-sm-12 col-md-12 col-12 newspart row">
                            <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                                <img src="{{asset('images/'.$new->image)}}" alt="">
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-6" style="padding: 0%;">
                                <a href="news/{{$new->id}}"><p class="caption">{{$new->name}}</p></a>
                                <span class="date">Дата публикации:</span>
                                <span class="date">{{date("d.m.Y", strtotime($new->created_at))}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                    <div class="right" style="width: 900px !important;">
                        <iframe width="900px" height="400px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48629.85361453101!2d49.9100845199053!3d40.378583503488954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307ca88ce25e09%3A0xed2eb3ae58fa9f71!2sKhatai%2C%20Baku%2C%20Azerbaijan!5e0!3m2!1sen!2s!4v1608127966660!5m2!1sen!2s" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <div class="contact">
                            <div class="container">
                                <form id="add_message">
                                    @csrf
                                    <p class="p1">Отправить сообщение</p>
                                    <p class="p2">Заполните все поля формы и отправьте нам сообщение. Наш менеджер свяжется с Вами в ближайшее время.</p>
                                    <label for="">Ваше имя:*</label>
                                    <input type="text" name="name">
                                    <label for="">Эл. адрес:*</label>
                                    <input type="email" name="email">
                                    <label for="">Телефон:*</label>
                                    <input  class="inptext" type="text" name="phone" placeholder="(___) ___-__-__">
                                    <label for="">Ваше сообщение:</label>
                                    <textarea name="message" id="" cols="30" rows="5"></textarea>
                                    <label for="">Прикрепить вложение:</label>
                                    <input class="text" type="file" name="image">
                                </form>
                                <button class="sendd" id="send_message">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

<div class="row mt-5">
    @foreach($response['results'] as $value)
        <div class="col-lg-3 col-md-6 col-sm-12 py-3 ">
            <div class="card-blog">
                <div class="header">
                    <img class="card-header-img" height="15px" width="15px" src="../assets/img/star/Card.svg" alt="">
                    <h5 class="post-title">{{$value['name']}}</h5>
                </div>
                <div class="">
                    <table  class="table " align="center"  >
                        <thead>
                        <tr>
                            <th style='text-align: center'>{{$value['birth_year']}}</th>
                            <th style='text-align: center'> Species</th>
                            {{--                                                <th> </th>--}}
                        </tr>
                        </thead>
                        <tbody >

                        <tr>
                            {{--                                            <td style='text-align: center'>--}}
                            {{--                                                <div class="ml-auto">--}}
                            {{--                                                    <a href="#" class="btn btn-outline rounded-pill">Leathon Gregory</a>--}}
                            {{--                                                </div>--}}
                            {{--                                            </td>--}}
                            <td colspan="2" style='text-align: center'>

                                <a href="#" class="btn btn-light row" style="width: 100%; height: 20%; margin-left: 0px">
                                    <img class="" style="float:left; margin: 0px 10px" height="15px" width="15px" src="../assets/img/star/Homeworld.svg" alt="">

                                    <p style=" float:left; font-size: 11px;  font-weight: bolder">HOMEWORLD</p>
                                        @foreach($homeworld['results'] as $home)
                                            @if($value['homeworld']==$home['url'])
                                                <p   style=" float:right;  font-size: 11px">{{$home['name']}}</p>
                                            @endif
                                        @endforeach
                                    {{--

<p  style=" float:left; font-size: 11px; padding: 0px; font-weight: bolder">--}}

                                    {{--                                                    HOMEWORLD--}}
                                    {{--                                                @foreach($homeworld['results'] as $home)--}}
                                    {{--                                                    @if($value['homeworld']==$home['url'])--}}
                                    {{--                                                        <p   style=" float:right; padding: 0px; font-size: 11px">{{$home['name']}}</p>--}}
                                    {{--                                                        @endif--}}
                                    {{--                                                        @endforeach--}}
                                    {{--                                                </p>--}}


                                </a>
                                {{--                                            <div class="blog-footer">--}}
                                {{--                                                <div><img src="../assets/img/star/Card.svg" alt="" class="blog-author"> <a href="#!">Kiran Acharya</a> </div>--}}
                                {{--                                                <small>Jan 12, 2019</small>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="card card-deck" style="padding-left: 10px; padding-right: 10px">--}}

                                {{--                                                <ul class="list-group  list-group-flush" style="margin: 10px; ">--}}
                                {{--                                                    <li class="row ">--}}
                                {{--                                                        <div class="row">--}}
                                {{--                                                            <img class="card-header-img" style="margin: 10px; " height="15px" width="15px" src="../assets/img/star/Homeworld.svg" alt="">--}}
                                {{--                                                            <p  style=" margin-top: 10px;  float:left; font-size: 11px; font-weight: bolder">HOMEWORLD</p>--}}
                                {{--                                                            @foreach($homeworld['results'] as $home)--}}
                                {{--                                                                @if($value['homeworld']==$home['url'])--}}
                                {{--                                                                    <p   style="margin-top: 12px; float:right; font-size: 11px">{{$home['name']}}</p>--}}
                                {{--                                                                @endif--}}
                                {{--                                                            @endforeach--}}
                                {{--                                                        </div>--}}



                                {{--                                                    </li>--}}

                                {{--                                                </ul>--}}
                                {{--                                            </div>--}}
                            </td>
                        </tr>

                        </tbody>
                    </table>

                    {{--                                <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>--}}
                </div>
            </div>
        </div>

    @endforeach




</div>







@foreach($response['results'] as $value)
    <div class="col-lg-3 col-md-6 col-sm-12 py-3 ">
        <div class="card-blog">
            <div class="header">
                <img class="card-header-img" height="20px" width="20px" src="../assets/img/star/Card.svg" alt="">
                <h5 class="post-title">{{$value['name']}}</h5>
            </div>
            <div class="">
                <table class="table table-borderless " align="center"  >
                    <thead>
                    <tr style="padding: 0px">
                        <th style='text-align: left;  padding-bottom: 0; '>
                            <img class="" style="float:left; margin: 2px 7px 0px 0px;  " height="18px" width="18px" src="../assets/img/star/Gender-Male.svg" alt="">

                            {{$value['birth_year']}}</th>
                        <th style='text-align: center;  padding-bottom: 0;'> Species</th>

                    </tr>
                    <tr >
                        <td colspan="2" style="  padding: 0px 15px 0px 15px;"> <hr /> </td>
                    </tr>
                    </thead>

                    <tbody >
                    <tr>
                        <td colspan="2"  style=''>
                            <a href="#" class="btn btn-light   " style=" width: 100%; height: 45px; padding-left: 5px;">
                                <img class="" style="float:left;  margin-right: 10px; margin-top: 10px" height="15px" width="15px" src="../assets/img/star/Homeworld.svg" alt="">
                                <p style=" float:left; font-size: 12px; margin-top: 10px;  font-weight: 600">HOMEWORLD</p>
                                <p   style=" float:right;  font-size: 12px; margin-top: 10px; margin-right: -20px  ">Boohaas</p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style='text-align: center;  padding-top: 0;'>
                            <a href="#" class="btn btn-light   " style=" width: 100%; height: 45px; padding-left: 5px;">
                                <img class="" style="float:left;  margin-right: 10px; margin-top: 10px" height="15px" width="15px" src="../assets/img/star/Vehicle.svg" alt="">
                                <p style=" float:left; font-size: 12px; margin-top: 10px;  font-weight: 600">VEHICLES</p>
                                <p   style=" float:right;  font-size: 12px; margin-top: 10px; margin-right: -20px ">10</p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style='text-align: center;  padding-top: 0;'>
                            <a href="#" class="btn btn-light   " style=" width: 100%; height: 45px; padding-left: 5px;">
                                <img class="" style="float:left;  margin-right: 10px; margin-top: 10px" height="15px" width="15px" src="../assets/img/star/Starship.svg" alt="">
                                <p style=" float:left; font-size: 12px; margin-top: 10px;  font-weight: 600">STARSHIPS</p>
                                <p   style=" float:right;  font-size: 12px; margin-top: 10px; margin-right: -20px ">0</p>
                            </a>
                        </td>
                    </tr>

                    </tbody>
                </table>

                {{--                                <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>--}}
            </div>
        </div>
    </div>
@endforeach

<div class="row mt-5">

    @foreach($person as $value)
        <div class="col-lg-12 col-md-12 col-sm-12 py-3 ">
            <div class="wrap">

                @csrf

                <div class="card-blog">
                    <div class="header">
                        <img class="card-header-img" height="20px" width="20px" src="../assets/img/star/Card.svg" alt="">
                        {{--                                            <h5 class="post-title">{{$person->name}}</h5>--}}
                        {{--                                            <h5 class="post-title">details/ {{substr($value['url'], -2, 1)}}</h5>--}}

                    </div>
                    <div class="">
                        <table class="table table-borderless " align="center"  >
                            <thead>
                            <tr style="padding: 0px">
                                <th style='text-align: left;'>

                                    @if($value['gender']=="male")
                                        <img class="table-D"   height="18px" width="18px" src="../assets/img/star/Gender-Male.svg" alt="">
                                    @else
                                        <img class="table-D"   height="18px" width="18px" src="../assets/img/star/Gender-Female.svg" alt="">
                                    @endif
                                    {{$value['birth_year']}}
                                </th>
                                <th style='text-align: right;'>
                                    @foreach($value['species'] as $specie)
                                        @foreach($species['results'] as $speciesGiven)
                                            @if($speciesGiven['url']==$specie)
                                                {{$speciesGiven['name']}}

                                                @break
                                            @endif
                                        @endforeach
                                    @endforeach
                                </th>
                            </tr>
                            <tr >
                                <td colspan="2" class="table-hr"> <hr /> </td>
                            </tr>
                            </thead>
                            <tbody >
                            <tr>
                                <td colspan="2"   >
                                    <a href="#" class="btn btn-light" >
                                        <img height="15px" width="15px" src="../assets/img/star/Homeworld.svg" alt="">
                                        <p class="table-des1">HOMEWORLD</p>
                                        @foreach($homeworld['results'] as $home)
                                            @if($value['homeworld']==$home['url'])
                                                <p   class="table-des2" >{{$home['name']}}</p>
                                                @break
                                            @endif
                                        @endforeach

                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"  >
                                    <a href="#" class="btn btn-light"  >
                                        <img height="15px" width="15px" src="../assets/img/star/Vehicle.svg" alt="">
                                        <p class="table-des1">VEHICLES</p>
                                        <p class="table-des2">{{count($value['vehicles'])}}</p>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"  >
                                    <a href="#" class="btn btn-light" >
                                        <img  height="15px" width="15px" src="../assets/img/star/Starship.svg" alt="">
                                        <p class="table-des1">STARSHIPS</p>
                                        <p  class="table-des2">{{count($value['starships'])}}</p>
                                    </a>
                                </td>
                            </tr>

                            </tbody>
                        </table>

                        {{--                                <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>--}}
                    </div>
                </div>
                </a>

            </div>
        </div>
    @endforeach

</div>

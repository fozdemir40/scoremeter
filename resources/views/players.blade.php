<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
    #Gryffindor1{
        background-color: #D74F3F;
        width: 25%;
        height: 92%;
        text-align: center;
        display: inline-block;
        float: left;
        -webkit-box-shadow: 0 0 20px 0px #000 inset;
    }

    #Slytherin2{
        background-color: #005D5B;
        float: left;
        width: 25%;
        height: 92%;
        text-align: center;
        display: inline-block;
        -webkit-box-shadow: 0 0 20px 0px #000 inset;
    }

    #Hufflepuff3{
        background-color: #FDB82D;
        float: left;
        width: 25%;
        height: 92%;
        text-align: center;
        display: inline-block;
        -webkit-box-shadow: 0 0 20px 0px #000 inset;
    }

    #Ravenclaw4{
        background-color: #21326A;
        width: 25%;
        height: 92%;
        text-align: center;
        display: inline-block;
        -webkit-box-shadow: 0 0 20px 0px #000 inset;
    }

    #teamName{
        font-family: "harry_pregular";
        font-size: 100px;
        color: #ffffff;
        margin-bottom: -2%;
    }

    #teamParts{
        margin-left:35%;
        font-size: 25px;
        color: white;
        font-family: 'Montserrat', sans-serif;
    }

    .cs{
        text-decoration: none;
        color: white;
        font-size: 150%;
        font-family: 'Montserrat', sans-serif;
    }

</style>
</head>

@extends('layouts.players')

@section('content')
<div class="container">
        <div class="row ">
            <div class="col">
                <div id="Gryffindor1">
                <h2 id="teamName">Gryffindor</h2>
                    <img src="https://trello-attachments.s3.amazonaws.com/5ba38b137a90a55a3c4955e1/5bd7748a56a98b0ba36f6bbd/9349e53ad34d2b97164ba4db99cd7569/gryffindor.png">
                @foreach($participants as $key => $data)
                            <table id="teamParts">
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->lastname}}</td>
                                    <td><a class="cs" href="{{route('minscore', $data)}}"> - </a> </td>
                                    <td>{{$data->score}}</td>
                                    <td><a class="cs" href="{{route('addscore', $data)}}"> + </a> </td>
                                </tr>
                            </table>
                @endforeach
                </div>
            </div>
            <div class="col">
                <div id="Slytherin2">
                <h2  id="teamName">Slytherin</h2>
                    <img src="https://trello-attachments.s3.amazonaws.com/5ba38b137a90a55a3c4955e1/5bd77494c273ed0ca7a8ffcf/584264f7e2bc24c062758c2dbbfb0be0/slytherin.png">
                @foreach($participants2 as $key => $data)
                    <table id="teamParts">
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->lastname}}</td>
                            <td><a class="cs" href="{{route('minscore', $data)}}"> - </a> </td>
                            <td>{{$data->score}}</td>
                            <td><a class="cs" href="{{route('addscore', $data)}}"> + </a> </td>
                        </tr>
                    </table>@endforeach
                </div>
            </div>

            <div class="col">
               <div id="Hufflepuff3">
                <h2  id="teamName">Hufflepuff</h2>
                   <img src="https://trello-attachments.s3.amazonaws.com/5ba38b137a90a55a3c4955e1/5bd7749cfd202140c323514f/a0a07137f5171211bd6a1bffdb45a218/hufflepuff.png">
                @foreach($participants3 as $key => $data)
                    <table id="teamParts">
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->lastname}}</td>
                            <td><a class="cs" href="{{route('minscore', $data)}}"> - </a> </td>
                            <td>{{$data->score}}</td>
                            <td><a class="cs" href="{{route('addscore', $data)}}"> + </a> </td>
                        </tr>
                    </table>
                @endforeach
               </div>
            </div>

            <div class="col">
              <div id="Ravenclaw4">
                <h2  id="teamName">Ravenclaw</h2>
                  <img src="https://trello-attachments.s3.amazonaws.com/5ba38b137a90a55a3c4955e1/5bd774a35eff9f34536e0d7b/dd34438282516d5bd2ef6df0e2db5599/ravenclaw.png">
                @foreach($participants4 as $key => $data)
                    <table id="teamParts">
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->lastname}}</td>
                            <td><a class="cs" href="{{route('minscore', $data)}}"> - </a> </td>
                            <td>{{$data->score}}</td>
                            <td><a class="cs" href="{{route('addscore', $data)}}"> + </a> </td>
                        </tr>
                    </table>
                @endforeach
              </div>
            </div>
        </div>
    </div>

<script src="{{mix('js/app.js')}}"></script>
@endsection


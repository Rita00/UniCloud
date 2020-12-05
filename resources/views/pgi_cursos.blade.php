<!DOCTYPE html>
<html>
<head>
    <style>

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #008CBA;
            border-radius: 10px;
        }

        header {
            padding: 10px 50px; /* top and bottom, right and left */
            text-align: left;
            border: 1px solid black;
        }

        midsection {
            float: right;
            padding: 80px 0px;
            width: 100%;
            background-color: #f1f1f1;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80px;
        }

        .text {
            padding-left: 2cm;
        }

        .button {
            border: none;
            color: white;
            background-color: #008CBA;
            padding: 20px 32px;
            width: 150px;
            border-radius: 8px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            margin: 4px 10px;
            transition: all 0.5s;
            cursor: pointer;

        }

        .button:hover {
            background: #0b7dda;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }


    </style>
</head>

<body>

<header>
    <img
        src="https://scontent.fopo2-1.fna.fbcdn.net/v/t1.15752-9/123401405_712146202993148_5407512905508389517_n.png?_nc_cat=109&ccb=2&_nc_sid=ae9488&_nc_ohc=jLyptFLMBFQAX92X8po&_nc_oc=AQkpNLTBLa-kmTrRr0erWmOd8YhFsNHov5-QH1ms5bmCLJPLVrYKSc0bLmAW3PdXjPvlhYJnDXBqUKH2DvOvGYZv&_nc_ht=scontent.fopo2-1.fna&oh=4817f8dfedef82be28e4db2dadd0eceb&oe=5FD10658"
        alt="Logo" width=10% height=10%>

</header>
@include('partials.navbar')
<midsection>
    <h3 class="text">Cursos</h3>
    @foreach($triosSiglas as $siglas)
    <div class="center">
        @foreach($siglas as $sigla)
        <form action="/disciplinas?course={{$sigla}}" method="get">
            <button type="Submit" class="button" style="vertical-align:middle"><span>{{$sigla}}</span></button>
        </form>
        @endforeach
    </div>
    @endforeach

</midsection>


</body>
</html>

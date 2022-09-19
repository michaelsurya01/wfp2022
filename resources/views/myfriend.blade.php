<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(252, 135, 135);
                color: #000000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #efed6d;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            table, th, td {
                border: 1px solid;
            }
        </style>
    </head>
    <body>
        {{-- <?php $name = ""?> --}}
        <div class="flex-center position-ref full-height">
            <div class="content">
                @if(isset($nrp))
                <div class="title m-b-md">
                    @if ($nrp == 160419134)
                        <a>NAMA : Kiky Oktavina Fadilah</a><br>
                        <a>NRP : 1604919134</a><br>
                        <a>Asal : Amerika</a><br>
                        <a>Hobby : Makan</a>
                    @elseif($nrp == 160419138)
                        <a>NAMA : Wahyu Bagus</a><br>
                        <a>NRP : 1604919138</a><br>
                        <a>Asal : Usbekistan</a><br>
                        <a>Hobby : Berkuda</a>
                    @else
                        Hellow, tolong diisi dulu nrp yang benar
                    @endif
                </div>
                @else
                        <h1>Hellow!</h1>
                        <table>
                            <tr>
                                <th> NAMA </th>
                                <th> NRP </th> 
                                <th> VIEW DETAIL </th>                             
                            </tr>
                            <tr>
                                <td>Kiky Oktavina Fadilah</td>
                                <td>160419134</td>  
                                <td>
                                    <?php $nrp = 160419134 ?>
                                    <a href="{{ route('myfriend', $nrp)}}">DETAIL</a>
                                </td>     
                            </tr>
                            <tr>
                                <td>Wahyu Bagus</td>
                                <td>160419138</td>
                                <td>
                                    <?php $nrp = 160419138 ?>
                                    <a href="{{ route('myfriend', $nrp)}}">DETAIL</a>
                                </td>
                            </tr>
                        </table>
                @endif
            </div>
        </div>
    </body>
</html>

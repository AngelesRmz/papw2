{{-- <!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Home</title>

        <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
    </head>

<body class="IndexPage"> --}}

@extends('layouts.ejemplo')


@section('inicio')
<div class="IndexPage"> 
    <div class="infoCategory">
		<h2>Últimos de quienes sigues</h2>
    </div>

    <div class="CategoryVideo">
        
        <ul class="imagesVideos">
            <li>
                <div class="imageBox">
                    <figure>
                        <img src="/storage/userPics/woXShJHMFYtcNIWscLTR9Z9VD9bTCm1WJ9ZAPRCd.jpeg">
                        <figcaption>
                            <h1 id="<%=idVid%>">Login C++ [1]
                            <p>Programa Ya</p><br>
                            <a onclick="obNum(this)" id="<%=idVid%>" href="Video.jsp">Ver video</a>
                            </h1>
                        </figcaption>
                    </figure>
                </div>
            </li> 
            <li>
                <div class="imageBox">
                    <figure>
                        <img src="/images/tut1.png">
                        <figcaption>
                            <h1 id="<%=idVid%>">Login C++ [1]
                            <p>Programa Ya</p><br>
                            <a onclick="obNum(this)" id="<%=idVid%>" href="Video.jsp">Ver video</a>
                            </h1>
                        </figcaption>
                    </figure>
                </div>
            </li> 
        </ul>
    </div> 

    <div class="infoCategory">
		<h2>Más sobre programación</h2>
    </div>
    <div class="CategoryVideo">
        
        <ul class="imagesVideos">
            <li>
                <div class="imageBox">
                    <figure>
                        <img src="/images/tut1.png">
                        <figcaption>
                            <h1 id="<%=idVid%>">Login C++ [1]
                            <p>Programa Ya</p><br>
                            <a onclick="obNum(this)" id="<%=idVid%>" href="Video.jsp">Ver video</a>
                            </h1>
                        </figcaption>
                    </figure>
                </div>
            </li> 
            <li>
                <div class="imageBox">
                    <figure>
                        <img src="/images/tut1.png">
                        <figcaption>
                            <h1 id="<%=idVid%>">Login C++ [1]
                            <p>Programa Ya</p><br>
                            <a onclick="obNum(this)" id="<%=idVid%>" href="Video.jsp">Ver video</a>
                            </h1>
                        </figcaption>
                    </figure>
                </div>
            </li> 
            <li>
                <div class="imageBox">
                    <figure>
                        <img src="/images/tut1.png">
                        <figcaption>
                            <h1 id="<%=idVid%>">Login C++ [1]
                            <p>Programa Ya</p><br>
                            <a onclick="obNum(this)" id="<%=idVid%>" href="Video.jsp">Ver video</a>
                            </h1>
                        </figcaption>
                    </figure>
                </div>
            </li> 
            <li>
                    <div class="imageBox">
                        <figure>
                            <img src="/images/tut1.png">
                            <figcaption>
                                <h1 id="<%=idVid%>">Login C++ [1]
                                <p>Programa Ya</p><br>
                                <a onclick="obNum(this)" id="<%=idVid%>" href="Video.jsp">Ver video</a>
                                </h1>
                            </figcaption>
                        </figure>
                    </div>
                </li> 
            
        </ul>
    </div> 
</div>
@endsection
{{-- 
</body>
</html> --}}
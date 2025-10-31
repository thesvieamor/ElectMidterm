	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style> 
         body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-color: #f4f4f4;
          margin-bottom: 100px;
        }
        
        header {
          background-color: #f7cdecff;
          color: #fff;
          text-align: center;
          padding: 20px;
        }  
        h1 {
            margin-top: 10vh;
            color: #fff;
            font-weight: bolder;
        }
        h2{
            color: #000000;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
           
        }
        .border-line{
            border-bottom: 2px solid #000000; 
            border-width: 100%;
            padding-bottom: 5px; 
            margin: 0;
        }
        h3{
            color: #ff0000;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            text-align: center;
            font-family: Arial, sans-serif;
            margin: 50px;
        }

        img {
            width: 400px;
            height: auto;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }
        ul {
            list-style-position: outside; 
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px; 
            text-align: center;
            font-weight: bold;
        }
        #img-jva{
            width: 800px;
            height: auto;
            margin-top: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 50px;
        }
        #img-jva-pic{
            width: 1000px;
            height: auto;
            margin-top: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 50px;
        }
        .img-container{
            font-family: Arial, sans-serif;
            text-align: center;
            
        }
        #dl-icon{
            width: 100px;
            height: auto;
        }
        .text-container{
            padding: 10px;
            background-color: #0d63d4; 
            border: 1px solid #ccc;
            box-shadow: 2px 2px 5px #888888;
            text-align: center;
            width: 800px;
            margin-left: 30vw;
        }

    </style>

    <title>Gallery</title>
</head>
<body>
    <div class="topnav" id="myTopnav">
          
            
            <a href="/"  class="active"  >Home Page</a>
            <a href="/About"   class="active"  >About Me</a>
            <a href="/Gallery"  class="active"  >Gallery</a>
         
            </a>
    </div>

    <header>
        <h1>Gallery</h1>
    </header>

<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo1.jpg') }}" >
    </div>
<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo2.jpg') }}">
</div>
<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo3.jpg') }}">
</div>
<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo4.jpg') }}">
</div>
<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo5.jpg') }}">
</div>
<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo6.jpg') }}">
</div>
<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo7.jpg') }}">
</div>
<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo8.jpg') }}">
</div>
<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo9.jpg') }}">
</div>
<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo10.jpg') }}">
</div>
<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo11.jpg') }}">
</div>
<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo12.jpg') }}">
</div>
<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo13.jpg') }}">
</div>
<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo14.jpg') }}">
</div>
<div class="img-container">
    <img id="img-jva" src="{{ asset('images/Photo15.jpg') }}">
</div>




</body>
</html>

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

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            width: 300px; 
            height: 300px; 
            border-radius: 50%;
            display: block;
            margin: 0 auto;
        }

        h2 {
            color: #000000;
            font-weight: bolder;
        }

        h1 {
            margin-top: 10vh;
            color: #fff;
            font-weight: bolder;
        }

        p {
            color: #000000;
            font-weight: bold;
        }

        #font-color {
            color: #111111ff;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        .skill {
            margin-bottom: 10px;
        }

        .skill-label {
            display: inline-block;
            width: 100px;
            font-weight: bold;
        }

        .skill-bar {
            display: inline-block;
            width: 200px;
            height: 20px;
            background-color: #ddd;
            position: relative;
        }

        .skill-level {
            display: block;
            height: 100%;
            background-color: #000000;
        }

        .text-container a {
            color: #045faa;
            text-decoration: none;
            margin-right: 10px;
        }

        .text-container a:hover {
            text-decoration: underline;
        }
    </style>
    <title>About Me</title>
</head>
<body>
    <div class="topnav" id="myTopnav">
          
            

            <a href="/"  class="active"  >Home Page</a>
            <a href="/About"   class="active"  >About Me</a>
            <a href="/Gallery"  class="active"  >Gallery</a>
         
          </a>
    </div>
    <header>
        <h1>Thesvie Amor Gono Baldo</h1>
        <p id="font-color"> Web Developer</p>
    </header>

    <section>
        <img src="{{ asset('images/profile.jpg') }}" alt="Animation">
        <h2>Front End Web Developer</h2>
        <p>I am a results-driven IT Web Developer with practical experience in the full development lifecycle of web applications. My passion lies in solving complex problems and building efficient, scalable solutions.

I have hands-on experience in web development and possess a broad technical knowledge base that includes Java, C#, C++, and Python. I'm not just focused on what I already know
        killed in designing and developing responsive, user-friendly websites and web applications. Proficient in HTML, CSS, 
        JavaScript, and modern frameworks such as React and Vue. Experienced in translating UI/UX designs into functional code, 
        optimizing performance, and ensuring cross-browser compatibility. Passionate about creating clean, accessible, and visually 
        appealing digital experiences.</p>

        <section>
            <h2>Skills</h2>
            <div class="skill">
                <span class="skill-label">HTML:</span>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 80%;"></div>
                </div>
            </div>

            <div class="skill">
                <span class="skill-label">CSS:</span>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 80%;"></div>
                </div>
            </div>

            <div class="skill">
                <span class="skill-label">JavaScript:</span>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 80%;"></div>
                </div>
            </div>

            <div class="skill">
                <span class="skill-label">Laravel:</span>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 30%;"></div>
                </div>    
            </div>
            <div class="skill">
                <span class="skill-label">Tailwind:</span>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 30%;"></div>
                </div>    
            </div>
            <div class="skill">
                <span class="skill-label">Bootstrap:</span>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 60%;"></div>
                </div>    
            </div>
        </section>

        <section>
           <h2>Educational Background</h2>
          <ul class="list-disc list-inside space-y-2 text-left max-w-2xl">
            <li>Primary: Javier Elementary School </li>
            <li>Secondary: Javier National High School
                Junior High School
                Senior High School
                 </li>
            <li>Tertiary:North Eastern Mindanao State University Main-Campus
                1st Year College
                Bachelor of Secondary Education Major in General Science
                S.Y. 2022-2023</li>
            <li>Tertiary: University of Cebu Lapu-lapu and Mandaue
                3rd Year College
                Bachelor of Science in Information Technology
                S.Y. 2023-2025</li> </li>
            
          </ul>
        </section>

        <h2>Contacts:</h2>

        <div class="text-container">
            <p><i class="far fa-envelope"></i> Email: baldothesvieamor@gmail.com<br>
            <i class="fas fa-phone"></i> Contact #: 09512476032<br>
            <i class="fab fa-facebook"></i> Facebook: https://www.facebook.com/share/1BTcPHdPWW/ <br>
            
            </p>
        </div>
        
    </section>
</body>
</html>


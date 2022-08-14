<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo final</title>
    <link rel="stylesheet" href="CSS/estilos_principal.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>
    <div class="wrapper" id="inicio">
        <header>
            <nav class="navbar">
                <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ff0000cc" fill-opacity="0.2" d="M0,128L30,138.7C60,149,120,171,180,186.7C240,203,300,213,360,208C420,203,480,181,540,181.3C600,181,660,203,720,229.3C780,256,840,288,900,261.3C960,235,1020,149,1080,133.3C1140,117,1200,171,1260,197.3C1320,224,1380,224,1410,224L1440,224L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
                  </svg>
                  
                <div class="brand">
                    <h2 class="title1">E<span>J</span> Developer</h2>
                </div>
                <ul class="menu spread">
                    <a href="#sobre">Sobre mí</a>
                    <a href="#portafolio">Portafolio</a>
                    <a href="principal.php">REGISTRATE</a>
                    <a href="index.php" class="active">SALIR</a>
                </ul>

            </nav>
        </header>
        <main class="main">
            <div class="info-content">
                <h1>I'm <span>Edward</span> Josué</h1>
                <span>Soy Edward Josue Mamani M.</span><br>
                <p>Tengo 18 años y soy estudiante del tercer semestre de la carrera técnica de Ingeniería de Software con IA en SENATI.</p>
                
                
                <a download href="http://127.0.0.1:5502/DISE%C3%91O01/#especialista">
                    <button class="download-cv">Download CV</button>
                </a>
            </div>
            <img src="img/image.jpg" alt="Edward Josue picture">
        </main>
    </div>
 
    <div class="about" id="sobre">
        <div class="contenedor"></div>
        <h2 class="titulo">Sobre mí</h2>
        <p class="parrafo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, necessitatibus?</p>
        
        <button class="download-cv">Leer más</button>
    </div>

    <section class="contenedor-a" id="portafolio">
        <h2 class="subtitulo">PORTAFOLIO</h2>
        <section class="experts">
            <div class="cont-expert">
                <img class="images-a" src="img/primero.svg" alt="">
                <h3 class="n-expert">TRABAJO N°1</h3>
                <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis pariatur autem amet tempora tenetur adipisci quia atque totam illum voluptatem.</p>
            </div>
            <div class="cont-expert">
                <img class="images-a" src="img/segundo.svg" alt="">
                <h3 class="n-expert">TRABAJO N°2</h3>
                <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis pariatur autem amet tempora tenetur adipisci quia atque totam illum voluptatem.</p>
            </div>
            <div class="cont-expert">
                <img class="images-a" src="img/tercero.svg" alt="">
                <h3 class="n-expert">TRABAJO N°3</h3>
                <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis pariatur autem amet tempora tenetur adipisci quia atque totam illum voluptatem.</p>
            </div>
        </section>
    </section>

    <footer id="contactanos">
        <div class="contenedor footer-content">
            <div class="contact-pe">
                <h2 class="brand">Edward Josué</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
            </div>
                <div class="social-media">
                    <a href="https://www.facebook.com/profile.php?id=100006911144980" class="social-media-icon"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="https://twitter.com/EdwardK36996798" class="social-media-icon"><i class='bx bxl-twitter'></i></a>
                    <a href="https://www.instagram.com/edwardjosue_10/" class="social-media-icon"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://www.linkedin.com/in/edward-josu%C3%A9-mamani-m-8b2b6521b/" class="social-media-icon"><i class='bx bxl-linkedin-square' ></i></a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
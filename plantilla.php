<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<style>
    /* Start styles of Header */
    .nav-container {
        position: absolute;
        padding: unset;
        height: 140px;
        width: 100%;
        z-index: 11;
    }

    .navbar {
        width: 100%;
        padding: 20px 40px;
        margin: unset;
        display: block;
        position: absolute;
        top: 0px;
    }

    .nav-container .nav-link {
        font-family: sans-serif;
        font-size: 18px;
        color: white;
        border: 2px solid transparent;
        border-radius: 10px;
    }

    .nav-container .nav-link:hover {
        transition: border-color 1s, color 3s;
        border-color: white;
        color: white;
    }

    .clientphoto {
        width: 50px;
        height: 50px;
        margin: 0px 15px;
    }

    .navbar i {
        padding: 0px 15px;
        color: white;
        font-size: 22px;
    }

    #Search_Panel {
        height: 175px;
    }

    #Search_Panel .d-flex {
        width: 90%;
        align-items: center;
    }

    #Search_Panel input {
        width: 100%;
        margin: 0px 15px;
        border: unset;
        outline: 0;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 25px;
    }

    #Search_Panel input::placeholder {
        opacity: 0.7;
    }

    .navbar-toggler {
        border: unset;
        outline: 0;
        padding: unset;
        box-shadow: unset !important;
    }

    #Menu_Panel .offcanva-link {
        padding: 15px 20px;
        font-size: 24px;
        text-decoration: unset;
        color: black;
        font-family: sans-serif;
    }

    #Menu_Panel .offcanvas-redes i {
        padding: 20px 8px;
        color: black;
    }

    #Scroll_header {
        height: 140px;
        width: 100%;
        background-color: black;
    }

    /* End styles of Header */



    /* Start styles of Footer */
    footer {
        padding-top: 25px;
        padding-bottom: 15px;
        background-color: black;
        width: 100%;
        color: white;
    }

    footer .col a {
        color: white;
    }

    footer .col a:hover {
        color: white;
    }

    /* End styles of Footer */

    @media (max-width: 700px) {
        .img-nav {
            height: 80px;
        }

        .nav-container {
            height: 120px;
        }

        .navbar {
            padding: 20px 15px;
        }

        #Scroll_header {
            height: 120px;
        }
    }

    @media (max-width: 600px) {
        .img-nav {
            height: 55px;
        }

        .nav-container {
            height: 95px;
        }

        #Search_Panel {
            height: 100px;
        }

        #Search_Panel .d-flex {
            width: 100%;
        }

        #Scroll_header {
            height: 95px;
        }
    }
    /*estilos para la pagina */
    /* Estilos generales */
body {
    background-color: #000000;
    margin: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
/*Texto  Volver Neon*/
.neonText {
    color: #fff;
    text-shadow:
        0 0 4px #575757, 0 0 11px #000000, 0 0 19px #000000, 0 0 40px #016cdf, 0 0 80px #016cdf, 0 0 90px #016cdf, 0 0 100px #016cdf,  0 0 150px #016cdf;
    font-size: 4.2rem;
    font-weight: 100;
    line-height: 1;
    text-decoration: none;
    position: absolute;
    top: 10px;
    left: 10px;
}

h2 {
    font-weight: 100;
    line-height: 1;
    font-size: 1.8rem;
}

/* Imagen Banner */
.containerI {
    margin-top: 0px;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 1)), url('img/headimg.jpg');
    background-size: cover; 
    background-position: center;
    padding: 45px;
    position: relative;
}

/* Cuadros para Informacion principal */
.content {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

.content-group {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.Cuadro {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #f0f0f0;
    border-radius: 15px;
    padding: 20px;
    margin: 20px;
    box-shadow: 0 6px 10px #959595;
}

.text-content {
    margin-right: 20px;
}

.Cuadro h2 {
    margin: 10px 0 0;
    font-size: 30px;
    text-align: center;
}

.Cuadro p {
    margin: 20px 0 0;
    font-size: 25px;
    text-align: justify;
}

.imagen {
    max-width: 300px;
    max-height: 300px;
    border-radius: 15px;
    display: block;
    margin: 20px;
}

/* Css para presentacion */
.DatosGrupo {
    display: flex;
    justify-content: center; /* Centra horizontalmente los elementos */
    flex-wrap: wrap;
    padding: 20px;
}

.fundador {
    background-color: #f0f0f0;
    border-radius: 15px;
    padding: 20px;
    margin: 20px;
    box-shadow: 0 6px 10px #959595;
    text-align: center;
    width: 200px;
    cursor: pointer;
    transition: transform 0.3s ease, max-height 0.3s ease-in-out;
    overflow: hidden;
    max-height: 200px;
}

.fundador.expanded {
    transform: scale(1.1);
    max-height: 400px;
}

.fundador-image {
    
    width: 200px;
    height: 200px;
    border-radius: 5px;
    margin-bottom: 5px;
}

.fundador h3 {
    margin: 10px 0 0;
    font-size: 25px;
}

.fundador h4 {
    font-size: 15px;
    display: none;
}

.fundador p {
    margin: 20px 0 0;
    font-size: 25px;
    display: flex;
}

.fundador.expanded h4,
.fundador.expanded p {
    display: block;
}




/* HAcer Responsive la pagina */
@media (max-width: 768px) {
    .DatosGrupo {
        flex-direction: column;
        align-items: center;
    }

    .fundador {
        flex: 1 1 100%;
        max-width: 90%;
    }

    .footer {
        flex-direction: column;
    }

    .footer-izquierda,
    .footer-centro,
    .footer-derecha {
        text-align: center;
        margin: 5px 0;
    }

    .neonText {
        font-size: 2.5rem;
        top: 20px;
        left: 20px;
    }

    .content-group {
        flex-direction: column;
    }

    .imagen {
        margin: 0 auto 20px;
    }
    
}
.Equipotitle {
    color: #f0f0f0;
    text-align: center;
    font-size: 400%;
    margin: 20px 0;
}

</style>

<body>

    <!-- Start Header menu -->
    <div class="nav-container" id="Menu_navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand p-0" href="./">
                    <img src="img/Logo.png" alt="Logo" height="100" class="img-nav">
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-auto">
                        <li class="nav-item"><a class="nav-link" href="./">Ofertas</a></li>
                        <li class="nav-item"><a class="nav-link" href="./">Trabajos</a></li>
                        <li class="nav-item"><a class="nav-link" href="Empresas">Empresas</a></li>
                    </ul>
                    <div class="d-flex">
                        <a href='SingIn'><i class='fa-solid fa-user-lock'></i></a>
                    </div>
                </div>
                <div class="d-flex">
                    <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#Menu_Panel" aria-controls="Menu_Panel">
                        <i class='fa-solid fa-bars-staggered'></i>
                    </button>
                    <button class="btn p-0 d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#Search_Panel" aria-controls="Search_Panel">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <a href="./" class="d-flex align-items-center text-dark"><i class="fa-solid fa-briefcase"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Code for Rxplayer(evito perderme) -->
    <div style="background-color: black;">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="containerI">   
            <a href="" class="neonText"></a>
    </div>
    <br>
    <!--Codigo para informacion Pagina-->
    <div class="content">
        <div class="Cuadro">
            <div class="text-content">
                <h2><b>¿Qué es WorkHub?</b></h2>
                <p>WorkHub es una pagina web que busca agilizar la busqueda de empleo tanto 
                    personas que desean tener su primer experiencia laboral a personas que buscan
                    un nuevo empleo. El usuario que desea utilizar este servicio, creando una nueva
                    cuenta se le solicitaran datos que funcionaran como su curriculum personal, el cual
                    se puede actualizar, si por ejemplo este usuario consiguió un título y desea asignarlo
                    a su perfil este facilmente podrá asignarlo a su cuenta.
                </p>
            </div>
        </div>

    </div>
    <!--codigo para personajes del grupo-->
    <div class="content">
        <img src="img/Logo.png" alt="Logo" class="imagen">
        <div class="Cuadro">
            <div class="text-content">
                <h2><b>¿Porque Usamos este logo?</b></h2>
                <p>Este logo es utilizado con el fin de demostrar que nuestra pagina tiene como tema principal los 
                    empleos <br>El logo se conforma de una maleta y el nombre de la pagina "WorkHub" donde la maleta
                    representa como representación cuando alguien esta buscando o solicitando un empleo y asi para tener algo original 
                    a comparacion de la competencia
                </p>
            </div>
        </div>
    </div>
    <!-- Titulo Equipo -->
     <h1 class="Equipotitle">Equipo de desarrollo</h1>
    <!--codigo para personajes del grupo-->
    <br>
    <div class="DatosGrupo">
        <div class="fundador">
            <img src="img/fernando.png" alt="Fundador 1" class="fundador-image">
            <h3>Fernando Cuyun</h3>
            <p>Contacto:</p>
            <h4>
                Email: fercho@ejemplo.com
                <br>Tel: 5421-6321
            </h4>
        </div>
        <div class="fundador">
            <img src="img/oscar.jpg" alt="Fundador 2" class="fundador-image">
            <h3>Oscar Boj</h3>
            <p>Contacto:</p>
            <h4>
                Email: OscarB@ejemplo.com
                <br>Tel: 5421-6321
            </h4>
        </div>
        <div class="fundador">
            <img src="img/javier.jpg" alt="Fundador 3" class="fundador-image">
            <h3>Javier Juchuña</h3>
            <p>Contacto:</p>
            <h4>
                Email: Juchu@ejemplo.com
                <br>Tel: 5421-6321
            </h4>
        </div>
        <div class="fundador">
            <img src="img/jared.jpg" alt="Fundador 4" class="fundador-image">
            <h3>Jared Gutierrez</h3>
            <p>Contacto:</p>
            <h4>
                Email: JGuti@ejemplo.com
                <br>Tel: 5421-6321
            </h4>
        </div>
        <div class="fundador">
            <img src="img/steve.jpg" alt="Fundador 5" class="fundador-image">
            <h3>Steve Cruz</h3>
            <p>Contacto: </p>
            <h4>
                Email: Rx@ejemplo.com
                <br>Tel: 5421-6321
            </h4>
        </div>
        <script>
            document.querySelectorAll('.fundador').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.classList.toggle('expanded');
                });
                card.addEventListener('mouseleave', function() {
                this.classList.remove('expanded');
                });
            });
        </script>
    </div>

    <!--Codigo para informacion Pagina-->
    <div class="content">
    <h1 class="Equipotitle">¿Safe Jobs que significa?</h1>
        <div class="content-group">
            <img src="img/Investigar.png" class="imagen">
            <div class="Cuadro">
                <div class="text-content">
                    <p>Significa que nosotros en nuestra pagina agregaremos empresas que quieran estar publicitadas aqui 
                        donde mostraremos como perfil el nombre de la empresa, informacion acerca de ella y sus solicitudes 
                        de empleo o vacantes. <br>
                        Si una empresa desea que quiera ser visto en nuestra pagina, nosotros antes verificaremos la 
                        siguiente información para saber si es cierta o si existe dicha empresa, ya que cabe la posibilidad
                        de que de diez empresas envien solicitudes de publicidad, al menos una pueda que no sea real o 
                        mas bien una estafa.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
     <!-- Fin codigo RxPlayer -->
    <!-- End Header menu -->

    <div id="Scroll_header"></div>


    <!-- Tú código - Start -->
     
    <!-- Tú código - End -->


    <!-- Start footer -->
    <footer>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 w-100">

            <div class="col mb-3 text-center">
                WorkHub
                <br>
                <a href="./"><i class="fa-brands fa-discord fa-xl"></i></a>
                <a href="./"><i class="fa-brands fa-facebook fa-xl"></i></a>
                <a href="./"><i class="fa-brands fa-whatsapp fa-xl"></i></a>
                <a href="./"><i class="fa-brands fa-linkedin fa-xl"></i></a>
                <a href="./"><i class="fa-brands fa-instagram fa-xl"></i></a>
            </div>

            <div class="col mb-3"></div>

            <div class="col mb-3 text-center p-0">
                <h5>Sobre Nosotros</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Nuestros Objetivos</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">¿Que somos?</a></li>
                </ul>
            </div>

            <div class="col mb-3 text-center p-0">
                <h5>Ayuda</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Términos y condiciones</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Preguntas frecuentes</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Políticas y términos</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Contáctanos</a></li>
                </ul>
            </div>

            <div class="col mb-3 text-center p-0">
                <h5>Contactos</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">workhubgt502@gmail.com</a></li>
                </ul>
                <h5>Telefono:</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">+502 57773-3166</a></li>
                </ul>
            </div>
        </div>
        <p class="text-center m-0">&copy; WorHub | Todos los derechos reservados</p>
    </footer>
    <!-- End footer -->

</body>
<script>
    // Inicio de despliege de navbar
    let element = document.querySelector('#Scroll_header');

    let observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                $('#Menu_navbar').css({
                    "position": "absolute",
                    "background-color": "unset",
                    "border-bottom": "unset"
                })
            } else {
                $('#Menu_navbar').css("display", "none")
                $('#Menu_navbar').slideDown("fast")
                $('#Menu_navbar').css({
                    "position": "fixed",
                    "background-color": "black",
                    "border-bottom": "1px solid gray"
                })
            }
        });
    };

    let observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0
    };

    let observer = new IntersectionObserver(observerCallback, observerOptions);

    observer.observe(element);
    // Final de despliege de navbar
</script>

</html>
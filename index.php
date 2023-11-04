<?php include("configuracion.php");
//var_dump($contenido);die();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive Resume/CV Template for Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="assets/fotos/<?php echo $contenido["cv"]["foto"];?>" alt="<?php echo $contenido["cv"]["nombre"];?>" title="<?php echo $contenido["cv"]["nombre"];?>" height="100px"/>
                <h1 class="name"><?php echo $contenido["cv"]["nombre"];?></h1>
                <h3 class="tagline"><?php echo $contenido["cv"]["profesion"];?></h3> 
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto: frberon@gmail.com"><?php echo $contenido["cv"]["email"];?></a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="tel:123123333"><?php echo $contenido["cv"]["telefono"];?></a></li>
                    <li class="website"><i class="fa fa-globe"></i><a href="http://google.com/" target="_blank"><?php echo $contenido["cv"]["web"];?></a></li>
                    <li class="linkedin"><i class="fa fa-linkedin"></i><a href="#" target="_blank">linkedin.com/in/<?php echo $contenido["cv"]["linkedin"];?></a></li>
                    <li class="github"><i class="fa fa-github"></i><a href="#" target="_blank">github.com/<?php echo $contenido["cv"]["github"];?></a></li>
                    <li class="twitter"><i class="fa fa-twitter"></i><a href="https://twitter.com/3rdwave_themes" target="_blank">@<?php echo $contenido["cv"]["twitter"];?></a></li>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Educaciòn</h2>
                <div class="item">
                    <h4 class="degree"><?php echo $contenido["cv"]["titulo1"];?></h4>
                    <h5 class="meta"><?php echo $contenido["cv"]["institucion1"];?></h5>
                    <div class="time"><?php echo $contenido["cv"]["fecha1"];?></div>
                </div><!--//item-->
                <div class="item">
                    <h4 class="degree">B<?php echo $contenido["cv"]["titulo2"];?></h4>
                    <h5 class="meta"><?php echo $contenido["cv"]["institucion2"];?></h5>
                    <div class="time"><?php echo $contenido["cv"]["fecha2"];?></div>
                </div><!--//item-->
            </div><!--//education-container-->
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Lenguajes</h2>
                <ul class="list-unstyled interests-list">
                    <li>Español <span class="lang-desc">(Native)</span></li>
                    <li>Ingles <span class="lang-desc">(intermedio)</span></li>
                  
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Interes</h2>
                <ul class="list-unstyled interests-list">
                    <li>Entrenar</li>
                    <li>Estudiar</li>
                    
                    <li>TV</li>
                    <li>Cine</li>
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Carrera profesional</h2>
                <div class="summary">
                    <p>Soy un Ingeniero en Desarrollo Full Stack con más de 6 años de experiencia en la creación de soluciones tecnológicas completas. Mi carrera se ha centrado en dominar tanto el desarrollo del lado del cliente como el del servidor, lo que me permite abordar proyectos de software de manera integral</p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiencia</h2>
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Lead Developer</h3>
                            <div class="time">2013 - 2014</div>
                        </div><!--//upper-row-->
                        <div class="company">tartup tresCumbres, SanJuan Argentina</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Como Lead Developer en Startup Hubs, he liderado equipos técnicos en el desarrollo de soluciones tecnológicas innovadoras. Mis responsabilidades incluyen:</p>  
                        <li>Supervisé y gestioné un equipo de desarrolladores</li>
                        <li>Diseñé y desarrollé arquitecturas de software escalables</li>
                        <li>Colaboré con el equipo de producto en la definición de requisitos</li>
                        <li>Implementé mejores prácticas de desarrollo ágil</li>
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Senior Software Engineer</h3>
                            <div class="time">2014 - 2015</div>
                        </div><!--//upper-row-->
                        <div class="company">MercadoLibre, Buenos Aires Argentina</div>
                    </div><!--//meta-->
                    <div class="details">
                    <p>Como Senior Software Engineer en Mercado Libre, me enfoqué en el desarrollo de soluciones tecnológicas de alto impacto para uno de los principales líderes del comercio electrónico en América Latina. Mis responsabilidades incluyeron:</p>
                        <li>Diseñé y desarrollé soluciones escalables que optimizaron la eficiencia de la plataforma</li>
                        <li>Colaboré estrechamente con equipos multidisciplinarios para garantizar la entrega exitosa de productos tecnológicos</li>
                        <li>Optimicé algoritmos y potencié el rendimiento de aplicaciones clave</li>
                        
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">UI Developer</h3>
                            <div class="time">2016 - 2023</div>
                        </div><!--//upper-row-->
                        <div class="company">BancoGalicia, Argentina</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>  
                    </div><!--//details-->
                </div><!--//item-->

                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">UI Developer</h3>
                            <div class="time">2012 - 2014</div>
                        </div><!--//upper-row-->
                        <div class="company">BancoGalicia, Argentina</div>
                    </div><!--//meta-->
                    <div class="details">
                    <p>Durante mi tiempo en Banco Galicia, asumí el rol de UI Developer, donde me dediqué a perfeccionar y optimizar las interfaces de usuario tanto en aplicaciones web como móviles. Mis responsabilidades destacadas comprendieron:</p>
                        <li>Diseñe y desarrolle las interfaces de usuario web y móviles.</li>
                        <li>Colabore estrecha con diseñadores y equipos de experiencia de usuario.</li>
                        <li>Implemente el uso de estándares de calidad y usabilidad.</li>  
                    </div><!--//details-->
                </div><!--//item-->
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i>Proyectos</h2>
                <div class="intro">
                <p>Durante mi carrera profesional, he liderado y contribuido a una variedad de proyectos emocionantes que han tenido un impacto significativo en la industria tecnológica. Aquí hay algunos ejemplos destacados:</p>
                </div><!--//intro-->
                <div class="item">
                    <span class="project-title"><a href="#hook">Envios 2.0</a></span> - <span class="project-tagline">Como líder y colaborador clave en el proyecto Envios 2.0 en Mercado Libre, desempeñé un papel fundamental en la creación de soluciones tecnológicas innovadoras que revolucionaron el proceso de envío y entrega en línea en América Latina. Coordiné equipos multidisciplinarios y trabajé en estrecha colaboración con ellos para garantizar el éxito de este proyecto estratégico.</span>
                    
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank">DevStudio</a></span> - 
                    <span class="project-tagline">En Banco Galicia, participé en el desarrollo y la implementación de una plataforma de pagos innovadora que permitió a nuestros clientes realizar transacciones de manera más eficiente y segura en un entorno global. Contribuí al diseño y desarrollo de arquitecturas de software escalables que respaldaron esta iniciativa </span>
                </div><!--//item-->
               
            
            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Mis Skills</h2>
                <div class="skillset">        
                    <div class="item">
                        <h3 class="level-title">PHP</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="<?php echo $contenido["cv"]["php"];?>%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Javascript &amp; jQuery</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="<?php echo $contenido["cv"]["js"];?>%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Base de datos Mysql</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="<?php echo $contenido["cv"]["db"];?>%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Visual Studio 2019</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="<?php echo $contenido["cv"]["vs"];?>%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                   
                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>
 
    <footer class="footer">
        <div class="text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 


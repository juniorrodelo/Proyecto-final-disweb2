        
<?php 

session_start();

if (isset($_SESSION['admin'])) {
  header("location:plataform/dashboard.html");
  //echo "Bienvenido ".$_SESSION['admin'];
}else{

 ?>

<?php include("basictemplates/header.php"); ?>

       <section  class="text-center">
         
                <div class="">

                    <div class="carousel-inner">
                        <div class="item active">

                            <img class="full" src="assets/img/portada.jpg" alt="" />
                            <div class="carousel-caption" >
                                 <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="{% url 'social:begin' 'facebook' %}" class="btn btn-default btn-lg rfacebook"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Registrar con Facebook</span></a>
                            </li>
                            <li>
                                <a href="{% url 'social:begin' 'twitter' %}" class="btn btn-default btn-lg rtwiter"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Registrar con Twitter</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                            </div>
                            
                        </div>

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                      <!--  <li data-target="#carousel-example" data-slide-to="1"></li> -->

                    </ol>
                </div>
           
       </section>
    <!--/.SLIDESHOW END-->


    <!--/.INTRO END-->
      <section id="offer"  >
           <div class="container">
           <div class="row   alert alert-info" >
                 <div class="col-md-9 col-sm-9">
                      <h1>  Vive la mejor experiencia de eduación Online</h1>
                 </div>
                 <div class="col-md-3 col-sm-3" style="padding-top: 15px;">
                     <a href="#" class=" btn btn-success btn-lg scroll" data-toggle="modal" data-target="#login">Comenzar Ahora!</a> 
                 </div>
                          
             </div>
            </div>
      </section>
      <!--/.OFFFER END-->
         <section id="just-intro">
             <div class="container">
             <div class="row text-center pad-row">
            <div class="col-md-4  col-sm-4">
                 <i class="fa fa-desktop fa-5x"></i>
                            <h4> <strong>Contenidos Multimedia</strong> </h4>
                            <p class="text-justify">
                                Aprende de forma interactiva, en videos, rúbicras juegos, nos preocupamos por una educación interactiva.
                            </p>
                          
                </div>
             <div class="col-md-4  col-sm-4">
                 <i class="fa fa-edit fa-5x"></i>
                            <h4> <strong>Articulos</strong> </h4>
                            <p class="text-justify">
                             Cada clase contará con un articulo, para profundizar los conocimientos obtenidos.
                            </p>
                           
                </div>
            <div class="col-md-4  col-sm-4">
                  <i class="fa fa-comments-o fa-5x"></i>
                            <h4> <strong>Sistema de Discusiones</strong> </h4>
                            <p class="text-justify">
                              Habrá un sistema de discusión en cada curso, dónde los estudiantes expresarán sus dudas ó aportes.
                            </p>
                          
                </div>
                    
            </div>
                 </div>
         </section>
     <!--/.JUST-INTRO END-->
     <section  class="note-sec" >
         
               <div class="container">
           <div class="row text-center pad-row" >
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 ">
                <i class="fa fa-quote-left fa-3x"></i>
               <p>
                Somos un grupo de emprendedores con muchas ganas de ayudarte en tu ciclo universitario, si quieres contribuir a esta comunidad, dirigite a la sección de contacto y haznolos saber. 
                </p>
                </div>
               </div>
            </div>   
           
       </section>
    <!--/.NOTE END-->
     

<?php include("basictemplates/footer.php");?>

<?php 
  if (isset($_SESSION['llene']) ) {
    echo $_SESSION['llene'];
    unset($_SESSION['llene']);

  }elseif (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
  }
}

 ?>

 <a href="procesor/logout.php">cerrar</a>
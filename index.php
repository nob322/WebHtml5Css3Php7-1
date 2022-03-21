<!-- Este proyecto fue desarrollado por David (https://github.com/nob322) -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palabra clave 1, palabra clave 2">
    <meta name="description" content="descripción de la web">
    <title>Veterinaria Ros</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/logoIcono.jpg" type="image/x-icon">
    <link href="css/all.css" rel="stylesheet">
    <link href="css/fontawesome.css" rel="stylesheet">
    <link href="css/brands.css" rel="stylesheet">
    <link href="css/solid.css" rel="stylesheet">
</head>
    <body>
        <div class="contenedorIndex">
        <header>
            <div class="whatsappFijo">
                <a href="https://api.whatsapp.com/send?phone=3416206569"><i class="fa-brands fa-whatsapp" style="margin-left:12px;margin-top:8px;"></i></a> 
            </div>
           <div>
               <img src="img/logo.png" alt="logo" style="width:300px;height:auto;margin-left:4px;margin-top:20px;">
           </div>
           <div>
                <nav>
                <ul class="menu">
                    <li class="noneStyle liDistancia"><a href="index.php" class="colorBlancoLink noneSub transitionLink">Principal</a></li>
                    <li class="noneStyle liDistancia"><a href="nosotros.php" class="colorBlancoLink noneSub transitionLink">Nosotros</a></li>
                    <li class="noneStyle liDistancia"><a href="novedades.php" class="colorBlancoLink noneSub transitionLink">Novedades</a></li>
                    <li class="noneStyle liDistancia"><a href="servicios.php" class="colorBlancoLink noneSub transitionLink">Servicios</a></li>
                    <li class="noneStyle liDistancia"><a href="contacto.php" class="colorBlancoLink noneSub transitionLink">Contacto</a></li>
                </ul>
            </nav>
           </div>
           
        </header>
        <section class="videoOk">
         <p class="pVideo" >Bienvenido a Veterinaria Ros</p>
            <video class="videoConfig " autoplay preload loop>
                 <source src="video/animalitos.mp4" type="video/mp4">
            </video>
        </section>
            <section class="suscribirse" style="margin-top:-0.4%;">
            <div class="contenedorSuscribirse">
                <form action="post" class="formularioSuscripcion">
                   <p><b>Suscribase a nuestro boletín de noticias</b></p>
                    <input type="text" value="Nombre" name="Nombre" class="bgVerde fontBlanco" style="border:0px;margin-left:14px;margin-right:14px; width: 200px;height: 30px; font-size:16px;">
                    <input type="email" value="Email" name="Email" class="bgVerde fontBlanco" style="border:0px;margin-left:14px;margin-right:14px; width: 200px;height: 30px; font-size:16px;">
                   <input type="submit" value="Suscribir" name="Suscribir" class="bgVerde fontBlanco" style="border:0px;margin-left:14px;margin-right:14px; width:90px;height:30px;font-size:16px;">
                </form>
            </div>
        </section>
        <section class="servicios">
           <h2 class="fontBlanco mtYmbTitles"><i class="fa-brands fa-servicestack"></i> SERVICIOS QUE SON NUESTRA ESPECIALIDAD</h2>
       <div class="contenedorArticles">
          <article class="caja_article">
            <h4 class="fontBlanco centrarTextoHorizontal"><i class="fa-solid fa-circle-check"></i> Baño y Corte</h4> 
            <img src="img/perritoBa%C3%B1ado.jpg" alt="Mascota en pleno baño">
            <ul class="fontBlanco">
               <!--5 beneficios de bañar a su mascota con nosotros:-->
                <li>Perfumado.</li>
                <li>Seco.</li>
                <li>Pelo con más brillo.</li>
                <li>Menos Caspa.</li>
                <li>Piel más saludable.</li>
            </ul>
             <div class="centerCenter">
                 <a href="servicios.php" class="boton1 centrarTextoHorizontal">Ver más</a>
              </div> 
          </article>
          <article class="caja_article">
              <h4 class="fontBlanco centrarTextoHorizontal"><i class="fa-solid fa-circle-check"></i> Operaciones de Emergencia</h4>
              <img src="img/perritoOperado.jpg" alt="foto de un perro operado"> 
             <ul class="fontBlanco"> <!--  4 beneficios de contar con nuestras operaciones de emergencia:-->
                  <li>Tenemos guardia 24hs.</li>
                  <li>Máximo nivel de cuidado.</li>
                  <li>90% de probabilidades que salvemos a su mascota.</li>
                <li>Usamos anestesia importada   <!--   para garantizar que su mascota no sentíra dolor alguno.    </li>-->
              </ul>
              <div class="centerCenter">
                 <a href="servicios.php" class="boton1 centrarTextoHorizontal">Ver más</a>
              </div> 
          </article>
          <article class="caja_article">
              <h4 class="fontBlanco centrarTextoHorizontal"><i class="fa-solid fa-circle-check"></i> Desparacitación a Domicilio</h4> 
          <img src="img/perroRecibiendoPipeta.jpg" alt="Perro recibiendo una pipeta">
             <ul class="fontBlanco">
                  <li>Protección contra pulgas.</li>
                  <li>Protección contra garrapatas.</li>  
                  <li>Duración efectiva de 3 meses</li>
                  <li>Descuento del 10% para clientes.</li>              
              </ul>
              <div class="centerCenter">
                 <a href="servicios.php" class="boton1 centrarTextoHorizontal">Ver más</a>
              </div>    
          </article>
       </div>
        </section>
        <section class="estadisticas">
          <h2 class="fontNegro mtYmbTitles"><i class="fa-solid fa-stairs"></i> ESTADÍSTICAS DE ANIMALES INGRESADOS EN NUESTRO CENTRO </h2>
            <div class="contenedorEstadisticas">
                <div class="contieneUnaEstadistica">
                    <p><b style=" background-color: brown;color:white;padding:4px;">1.236</b></p>
                    <div class="porcentajePerros"></div>
                    <img  class="formatoImgEstadistica"src="img/perroEstadistica.jpg" alt="cara de un perrito">
                </div>
                <div class="contieneUnaEstadistica">
                    <p style="margin-bottom: 41%!important;"><b style="background-color: #04624c;color:white;padding:4px;">932</b></p>
                    <div class="porcentajeGatos"></div>
                    <img  class="formatoImgEstadistica"src="img/gatoEstadistica.jpg" alt="cara de un gato">
                </div>
                <div class="contieneUnaEstadistica">
                    <p style="margin-bottom: 88%!important;"><b style="background-color: #330095;color:white;padding:4px;">758</b></p>
                    <div class="porcentajeHamsters"></div>
                    <img  class="formatoImgEstadistica"src="img/jamstersEstadistica.jpg" alt="cara de un hámsters">
                </div>
                <div class="contieneUnaEstadistica">
                    <p style="margin-bottom: 119%!important;"><b style="background-color: #000000;color:white;padding:4px;">458</b></p>
                    <div class="porcentajePajaros"></div>
                    <img  class="formatoImgEstadistica"src="img/pajarosEstadistica.jpg" alt="un pájaro">
                </div>
                <div class="contieneUnaEstadistica">
                    <p style="margin-bottom: 195%!important;"><b style="background-color: #74014c;color:white;padding:4px;">231</b></p>
                    <div class="porcentajeLargarto"></div>
                    <img  class="formatoImgEstadistica"src="img/largartoOveroEstadistica.jpg" alt="cara de un perrito">
                </div>
                 <div class="contieneUnaEstadistica">
                    <p style="margin-bottom: 242%!important;"><b style="background-color: #745501;color:white;padding:4px;">101</b></p>
                    <div class="porcentajeMono"></div>
                    <img  class="formatoImgEstadistica"src="img/monoEstadistica.jpg" alt="cara de un perrito">
                </div>
            </div>
            <b><p>Datos actuales de hoy correspondientes al <?php echo date("j")."/".date("m")."/".date("Y");?><i> y no reflejan % de éxitos en las intervenciones.</i></p></b>
             <h2 class="fontNegro mtYmbTitles"><i class="fa-solid fa-cat"></i> USE NUESTRO AUTO-DIAGNÓSTICO SI SU MASCOTA TIENE PROBLEMAS</h2>
             <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="formularioAutoD" style="padding:3px;margin-top:1%;display:flex;flex-direction:column;!important;justify-content:center;align-items: center; width:auto;height:auto;">
            <div style="margin-top:-5%;width: 100%;height: auto;">
                 <label for="genero" class="fontNegro">Su mascota es un:</label>
                <input  class="inputSizes colorPlaceHolder fontSize1 fontNegro inputFormBgColor inputFormBgBorder" list="Mgenero" name="genero">
             <datalist id="Mgenero">
                 <option value="Perro"></option>
                 <option value="Gato"></option>
                 <option value="Otro"></option>
             </datalist>
              <label for="sintoma" class="fontNegro">El síntoma que tiene es el siguiente:</label>
                <input  class="inputSizes colorPlaceHolder fontSize1 fontNegro inputFormBgColor inputFormBgBorder" list="Msintoma" name="sintoma">
             <datalist id="Msintoma">
                 <option value="Sangra por el ocico"></option>
                 <option value="Respira con dificultad"></option>
                 <option value="No puede moverse y está paralizado"></option>
                 <option value="Bajó mucho de peso"></option>
                 <option value="No come"></option>
                 <option value="Lo veo enfermo, se le cae el pelo"></option>
             </datalist> 
             <input class="boton2 transitionLink" type="submit" name="submit" value="Evaluar">
            </div>   

            <div style="width: 100%;height: 50px;">
                <!-- <p style="background-color:black;">hola</p> -->
                <?php 
                if (isset($_POST['submit'])) {
                    $genero = $_POST['genero'];
                    $sintoma = $_POST['sintoma'];
                    if ($genero == "Perro") {
                        switch ($sintoma) {
                            case 'Sangra por el ocico':
                               echo "<p class='danger'><i class='fa-solid fa-skull-crossbones'></i> Cuidado, su perro corre peligro de muerte, con suma  urgencia debe venir a nuestra guardia para que lo atendamos sin turno previo</p>";
                                break;
                            case 'Respira con dificultad':
                               echo "<p class='danger'><i class='fa-solid fa-skull-crossbones'></i> Cuidado, su {$genero} corre peligro de muerte, con suma  urgencia debe venir a nuestra guardia para que lo atendamos sin turno previo</p>";
                                break;    
                            case 'No puede moverse y está paralizado':
                               echo "<p class='danger'><i class='fa-solid fa-skull-crossbones'></i> Su {$genero} corre peligro de muerte, con suma  urgencia debe venir a nuestra guardia para que lo atendamos sin turno previo</p>";
                                break;  
                            case 'Bajó mucho de peso':
                               echo "<p class='noAlert'><i class='fa-solid fa-circle-check'></i> Su {$genero} NO corre peligro de muerte inmediata, sin embargo debemos tratar ese problema, saque un turno y traígalo a nuestra clínica.</p>";
                                break;  
                            case 'No come':
                               echo "<p class='alert'><i class='fa-solid fa-triangle-exclamation'></i> Sufre un problema de gravedad media su {$genero}, si continua en ese estado puede agravarse, es necesario que lo atendamos, puede sacar un turno y traerlo para que le demos asistencia.</p>";
                                break;  
                             case 'Lo veo enfermo, se le cae el pelo':
                               echo "<p class='alert'><i class='fa-solid fa-biohazard'></i> Puede estar infectado con algún virus su {$genero}, sufre un problema de gravedad media, si continua en ese estado puede agravarse,es necesario que lo atendamos así que puede sacar un turno y traerlo para que le demos asistencia.</p>";
                                break;                 
                            default:
                                echo "<center><p class='alert'><i class='fa-solid fa-user-pen'></i> Debe ingresar un síntoma para su  {$genero} <i class='fa-solid fa-dog'></i>.</p></center>";
                                break;
                        }
                    }  
                if ($genero == "Gato") {
                        switch ($sintoma) {
                            case 'Sangra por el ocico':
                               echo "<p class='danger'><i class='fa-solid fa-skull-crossbones'></i> Cuidado!, su {$genero} corre peligro de muerte, con suma  urgencia debe venir a nuestra guardia para que lo atendamos sin turno previo!</p>";
                                break;
                            case 'Respira con dificultad':
                               echo "<p class='danger'><i class='fa-solid fa-skull-crossbones'></i> Cuidado, su {$genero} corre peligro de muerte, con suma  urgencia debe venir a nuestra guardia para que lo atendamos sin turno previo</p>";
                                break;    
                            case 'No puede moverse y está paralizado':
                               echo "<p class='alert'><i class='fa-solid fa-skull-crossbones'></i> La vida de su {$genero} no está en riesgo, pero esto no significa que no tenga problemas sino que lejos de eso debe traerlo a nuestra clínica!</p>";
                                break;  
                            case 'Bajó mucho de peso':
                               echo "<p class='noAlert'><i class='fa-solid fa-circle-check'></i> Su {$genero} NO corre peligro de muerte inmediata, sin embargo debemos tratar ese problema, saque un turno y traígalo a nuestra clínica.</p>";
                                break;  
                            case 'No come':
                               echo "<p class='alert'><i class='fa-solid fa-triangle-exclamation'></i> Sufre un problema de gravedad media su {$genero}, si continua en ese estado puede agravarse, es necesario que lo atendamos.</p>";
                                break;  
                             case 'Lo veo enfermo, se le cae el pelo':
                               echo "<p class='alert'><i class='fa-solid fa-biohazard'></i> Puede estar infectado con algún virus su {$genero}, pida un turno y traígalo a nosotros urgente, necesita atención.</p>";
                                break;                 
                            default:
                                echo "<center><p class='alert'><i class='fa-solid fa-user-pen'></i> Debe ingresar un síntoma para su  {$genero} <i class='fa-solid fa-cat'></i>.</p></center>";
                                break;
                        }
                    }  
                if ($genero == "Otro") {
                        switch ($sintoma) {
                            case 'Sangra por el ocico':
                               echo "<center><p class='danger'><i class='fa-solid fa-skull-crossbones'></i> Traiga con suma urgencia a su mascota, necesitamos evaluarlo personalmente!</p></center>";
                                break;
                            case 'Respira con dificultad':
                              echo "<center><p class='danger'><i class='fa-solid fa-skull-crossbones'></i> Traiga con suma urgencia a su mascota, necesitamos evaluarlo personalmente!</p></center>";
                                break;    
                            case 'No puede moverse y está paralizado':
                              echo "<center><p class='danger'><i class='fa-solid fa-skull-crossbones'></i> Traiga con suma urgencia a su mascota, necesitamos evaluarlo personalmente!</p></center>";
                                break;  
                            case 'Bajó mucho de peso':
                              echo "<center><p class='danger'><i class='fa-solid fa-skull-crossbones'></i> Traiga con suma urgencia a su mascota, necesitamos evaluarlo personalmente!</p></center>";
                                break;  
                            case 'No come':
                               echo "<center><p class='danger'><i class='fa-solid fa-skull-crossbones'></i> Traiga con suma urgencia a su mascota, necesitamos evaluarlo personalmente!</p></center>";
                                break;  
                             case 'Lo veo enfermo, se le cae el pelo':
                              echo "<center><p class='danger'><i class='fa-solid fa-skull-crossbones'></i> Traiga con suma urgencia a su mascota, necesitamos evaluarlo personalmente!</p></center>";
                                break;                 
                            default:
                                echo "<center><p class='alert'><i class='fa-solid fa-user-pen'></i> Debe ingresar un síntoma para su  mascota <i class='fa-solid fa-cat'></i>.</p></center>";
                                break;
                        }
                    }      
                }?> 
            </div>
             </form>
        </section>
        <section class="noticias">
           <h2 class="fontBlanco mtYmbTitles"><i class="fa-solid fa-hands-praying"></i> FUNDACIONES CON LAS QUE TRABAJAMOS</h2>
            <div class="contieneNoticias">
                <div class="mlR1">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ff.josemariaperalta&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
                <div>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffundacionsentimientoanimal&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </section>
        <section class="ofertas">
           <h2 class="fontNegro mtYmbTitles">
 
 
        <i class="fa-solid fa-cart-shopping"></i> OFERTAS SELECCIONADAS PARA USTED</h2>
           <div class="contenedorOfertas">
               <article class="contieneUnaOferta">
                   <h3>Comida para gatos</h3>
                   <img src="img/producto1.jpg" alt="producto 1">
                   <p><b>$3.250</b></p>
                   <a href="" class="boton1">Comprar</a>
               </article>
               <article class="contieneUnaOferta">
                   <h3>Comida para cachorros</h3>
                   <img src="img/producto6.jpg" alt="producto 1">
                   <p><b>$5.960</b></p>
                   <a href="" class="boton1">Comprar</a>
               </article>
               <article class="contieneUnaOferta">
                   <h3>Comida para gatos</h3>
                   <img src="img/producto4.jpg" alt="producto 1">
                   <p><b>$4.100</b></p>
                   <a href="" class="boton1">Comprar</a>
               </article>
           </div>
            
        </section>
        <footer class="fontBlanco" >
            <p class="centrarTextoHorizontal" style="font-size: 18px;margin-top:30px;">Este <strong>Sitio web fue desarrollado por <span class="fontVerdeLimon"> David (https://github.com/nob322) </span> </strong> con <img src="img/tecnologiasEmpleadas.png" alt="Html5 css3 y php Logo" class="alinearVerticalmenteImg tecnologias"></p>
        </footer>
         </div>
    </body>
</html>
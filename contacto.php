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
         <div class="contenedorContacto">
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
        <section class="cajaContacto">
           <h2 class="fontBlanco mtYmbTitles">
<i class="fa-solid fa-file-signature"></i> CONTACTO</h2>
       <div class="cajaNosotros" style="margin-top:-24px;">
        <p class="fontBlanco">
            Pongase en contacto con nosotros, queremos asesorarlo y despejar sus dudas y de la misma manera deseamos resolver sus problemas.</p>
            <form action="ProcesadorFormulariosPhp/procesa.php" style="" class="formularioFormato" method="post">
                <label for="nombre" class="fontBlanco">Nombre:</label>
                <input required class="inputSizes colorPlaceHolder fontSize1 fontBlanco inputFormBgColor inputFormBgBorder" type="text" name="nombre" placeholder="Ingrese su nombre por favor">
                <label for="apellido" class="fontBlanco">Apellido:</label>
                <input required class="inputSizes colorPlaceHolder fontSize1 fontBlanco inputFormBgColor inputFormBgBorder" type="text" name="apellido" placeholder="Ingrese su apellido por favor">
                <label for="provincia" class="fontBlanco">Provincia:</label>
                <input required class="inputSizes colorPlaceHolder fontSize1 fontBlanco inputFormBgColor inputFormBgBorder" type="text" name="provincia" placeholder="Ingrese su provincia por favor">
                <label for="email" class="fontBlanco">Localidad:</label>
                <input required class="inputSizes colorPlaceHolder fontSize1 fontBlanco inputFormBgColor inputFormBgBorder" type="text" name="localidad" placeholder="Ingrese su localidad por favor">
                <label for="localidad" class="fontBlanco">Domicilio:</label>
                <input required class="inputSizes colorPlaceHolder fontSize1 fontBlanco inputFormBgColor inputFormBgBorder" type="text" id="domicilio" placeholder="Ingrese su domicilio por favor">
                <label for="email" class="fontBlanco">Email:</label>
                <input required class="inputSizes colorPlaceHolder fontSize1 fontBlanco inputFormBgColor inputFormBgBorder" type="mail" name="email" placeholder="Ingrese su email por favor">
                <label for="message" class="fontBlanco">Mensaje:</label>
                <input required style=" width:80%;
    height: 20%;" class="inputSizes colorPlaceHolder fontSize1 fontBlanco inputFormBgColor inputFormBgBorder" type="text" name="message" placeholder="Ingrese su consulta por favor">
                 <input class="boton2" type="submit" placeholder="Envíar">
                 
             </form>
             <br>
             <div class="fontBlanco" style="display:flex;flex-direction:row;width:100%;height:100%;">
                 <div style="display:flex;flex-direction:column;width:20%;height:100%;">
                     <p><i class="fa-solid fa-map-location"></i> Laprida 1420, Rosario&nbsp;</p>
                 <p style="margin-top:-5px;"><i class="fa-brands fa-whatsapp"></i> 341-6206569</p>
                  <p style="margin-top:-5px;"><i class="fa-brands fa-telegram"></i> 341-6206569</p>
                 <p style="margin-top:-5px;"><i class="fa-brands fa-facebook"></i> veterinariaRos</p>
                 <p style="margin-top:-5px;"><i class="fa-brands fa-twitter"></i> @veterinariaRos</p>
                 <p style="margin-top:-5px;"><i class="fa-brands fa-instagram"></i> @veterinariaRos</p>
                 </div>
                 <div style="display:flex;flex-direction:row;width:77.4%;height:100%;">
                      <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.854688894139!2d-60.6383624850656!3d-32.95484567963268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab04f1f2e1e9%3A0x72a275ad4d517a2d!2sCFT%2C%20Laprida%201420%2C%20S2000%20Rosario%2C%20Santa%20Fe!5e0!3m2!1ses!2sar!4v1647467396329!5m2!1ses!2sar" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                 </div>
             </div> 
              <p class="fontBlanco"><i class="fa-solid fa-calendar-days"></i> Atendemos: de Lunes a Viernes de 9am a 12pm y 17pm a 20pm.
                </p>
                 <p class="fontBlanco emergencias" style="margin-top:-1%;"><i class="fa-solid fa-triangle-exclamation" ></i> Emergencias: 24hs</p>
<!--      <div style="display:flex; flex-direction:row;">
                    <ul class="fontBlanco">CIRUGIA
                 <li>Dr. Gabriel Fernández</li>
                 <li>Dr. Gabriela Ramirez</li>
                 <li>Dra. Verónica Venegas</li>
             </ul>
              <ul class="fontBlanco">ANESTESISTAS
                 <li>Dr. Ariel Antonelli</li>
                 <li>Dr. Federico Anastasi</li>
             </ul>
                <ul class="fontBlanco">CARDIOLOGIA
                 <li>Dr. Mario Bartolomeo</li>
                 <li>Dr. Guillermo Rivelis</li>
             </ul>
               <ul class="fontBlanco">ECOGRAFIA
                 <li>Dra. Silvana Pallo</li>
             </ul>
                  <ul class="fontBlanco">DERMATOLOGIA
                 <li>Dra. David Tolosa</li>
             </ul>
         </div>-->
         
         
         
         
         
         
         
         
         
         
         
       
<!--
          <article class="caja_article">
              <h4 class="fontBlanco centrarTextoHorizontal">Desparacitación a Domicilio</h4> 
          <img src="img/perroRecibiendoPipeta.jpg" alt="Perro recibiendo una pipeta">
             <ul class="fontBlanco">
                  <li>Protección contra pulgas.</li>
                  <li>Protección contra garrapatas.</li>  
                  <li>Duración efectiva de 3 meses</li>
                  <li>Descuento del 10% para clientes.</li>
                  <li></li>                
              </ul>
          </article>
-->
       </div>
        </section>


        <section class="ofertas">
           <h2 class="fontNegro mtYmbTitles"><i class="fa-solid fa-cart-shopping"></i> OFERTAS SELECCIONADAS PARA USTED</h2>
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
            <p class="centrarTextoHorizontal" style="font-size: 18px;margin-top:30px;">Este <strong>Sitio web fue desarrollado por <span class="fontVerdeLimon">David Sanchez </span> </strong> para <strong> <a href="http://isei.com.ar/" style="color:white; text-decoration: none;">Isei</a></strong> con <img src="img/tecnologiasEmpleadas.png" alt="Html5 css3 y php Logo" class="alinearVerticalmenteImg tecnologias"></p>
        </footer>
         </div>
    </body>
</html>
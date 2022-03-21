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
         <div class="contenedorServicios">
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
           <h2 class="fontBlanco mtYmbTitles"><i class="fa-brands fa-servicestack"></i> SERVICIOS</h2>
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
          </article>
          <article class="caja_article">
              <h4 class="fontBlanco centrarTextoHorizontal"><i class="fa-solid fa-circle-check"></i> Operaciones de Emergencia</h4>
              <img src="img/perritoOperado.jpg" alt="foto de un perro operado"> 
             <ul class="fontBlanco"> <!--  4 beneficios de contar con nuestras operaciones de emergencia:-->
                  <li>Tenemos guardia 24hs.</li>
                  <li>Máximo nivel de cuidado.</li>
                  <li>90% de probabilidades que salvemos a su mascota.</li>
                  <li>Usamos anestesia importada para garantizar que su mascota no sentíra dolor alguno.</li>
                  
              </ul>
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
          </article>
           <article class="caja_article" style="margin-top:4%;">
            <h4 class="fontBlanco centrarTextoHorizontal"><i class="fa-solid fa-circle-check"></i> Veterinarios a Domicilio</h4> 
            <img src="img/perroRecibiendoAuxilio.jpg" alt="Mascota en pleno baño">
            <ul class="fontBlanco">
               <!--5 beneficios de bañar a su mascota con nosotros:-->
                <li>Equipo capacitado para responder a domicilio.</li>
                <li>Disponemos de una flota de móviles equipados para poder llegar a tu domicilio.</li>
                <li>Personal capacitado para ésta tarea.</li>
            </ul>
          </article>
          <article class="caja_article" style="margin-top:4%;">
              <h4 class="fontBlanco centrarTextoHorizontal"><i class="fa-solid fa-circle-check"></i> Pronta Respuesta</h4>
              <img src="img/perroRecibiendoRespuesta.jpg" alt="foto de un perro operado"> 
             <ul class="fontBlanco"> <!--  4 beneficios de contar con nuestras operaciones de emergencia:-->
              <li>En casos donde sea necesario llegar de manera rápida y ágil, contamos con vehículos equipados para responder en situaciones de extrema gravedad y poder trasladar a tu mascota, medir sus signos vitales en el trayecto.</li>                  
              </ul>
          </article>
          <article class="caja_article" style="margin-top:4%;">
              <h4 class="fontBlanco centrarTextoHorizontal"><i class="fa-solid fa-circle-check"></i> Sanatorio Integral Veterinario</h4> 
          <img src="img/perroRecibiendoAyuda.jpg" alt="Perro recibiendo una pipeta">
             <ul class="fontBlanco">
                <li>Estamos preparados para recibir a tu mascota las 24 hs., los 365 días del año para brindra el más completo servicio veterinario en casos de baja y alta complejidad.</li>
                <li>También podrás realizar análisis complementarios.</li>  
                               
              </ul>
          </article>
           <article class="caja_article" style="margin-top:4%;">
              <h4 class="fontBlanco centrarTextoHorizontal"><i class="fa-solid fa-circle-check"></i> Medicamentos y Vacunas</h4> 
          <img src="img/perroRecibiendoVacuna.jpg" alt="Perro recibiendo una pipeta">
             <ul class="fontBlanco">
                  <li>Accedé descuentos de hasta el 30% de descuento en medicamentos ambulatorios para perros y gatos, también aplicación de vacunas gratuitas, válido para el plan 410 (según calendario anual obligatorio).</li>           
              </ul>
          </article>
           <article class="caja_article" style="margin-top:4%;">
              <h4 class="fontBlanco centrarTextoHorizontal"><i class="fa-solid fa-circle-check"></i> Alimentos y accesorios</h4> 
          <img src="img/perroRecibiendoComida.jpg" alt="Perro recibiendo una pipeta">
             <ul class="fontBlanco">
                  <li>20% de descuento en alimentos y 15% accesorios, para acceder al beneficio el socio debe indicar su número de DNI.</li>
                  <li>Envío domicilio sin cargo.</li>           
              </ul>
          </article>
           <article class="caja_article" style="margin-top:4%;">
              <h4 class="fontBlanco centrarTextoHorizontal"><i class="fa-solid fa-circle-check"></i> Servicio de Cremación</h4> 
          <img src="img/perroCrematorio.jpg" alt="Perro recibiendo una pipeta">
             <ul class="fontBlanco">
                  <li>Simplificamos momentos díficiles, por eso ante estás situaciones queremos brindarte contención y llevar adelante este proceso.</li>
                  <li>Contamos con altos estándares de calidad.</li>    
              </ul>
          </article>
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
            <p class="centrarTextoHorizontal" style="font-size: 18px;margin-top:30px;">Este <strong>Sitio web fue desarrollado por <span class="fontVerdeLimon">David Sanchez </span> </strong> para <strong> <a href="http://isei.com.ar/" style="color:white; text-decoration: none;">Isei</a></strong> con <img src="img/tecnologiasEmpleadas.png" alt="Html5 css3 y php Logo" class="alinearVerticalmenteImg tecnologias"></p>
        </footer>
         </div>
    </body>
</html>
<?php 
  include('src/includes/header.php');
  include('src/includes/nav.php');
?>

<main>
  <section id="servicios">
    <h2>Servicios que ofrecemos</h2>
    <div class="servicios">
      <div class="servicio">
        <img src="src/img/servicio1.jpg" alt="Reformas integrales">
        <h3>Reformas Integrales</h3>
        <p>Transformamos tu vivienda completa con acabados profesionales y materiales de primera calidad.</p>
      </div>
      <div class="servicio">
        <img src="src/img/servicio2.jpg" alt="Cocinas y baños">
        <h3>Cocinas, Baños, Almacenes, Salones, Etc</h3>
        <p>Diseños modernos, funcionales y adaptados a tus necesidades.</p>
      </div>
      <div class="servicio">
        <img src="src/img/servicio3.jpg" alt="Pintura">
        <h3>Pintura</h3>
        <p>Dale un nuevo aire a tu hogar con nuestros servicios de pintura, revestimientos y diseño interior.</p>
      </div>
    </div>
  </section>

  <section id="nosotros">
    <h2>Sobre ReformaPlus</h2>
    <p>Con más de 30 años de experiencia en el sector, en <strong>ReformaPlus</strong> ofrecemos soluciones completas para todo tipo de reformas en Madrid. Nuestro compromiso es la calidad, el cumplimiento de plazos y la satisfacción total de nuestros clientes.</p>
  </section>

  <section id="contacto">
    <h2>Contáctanos</h2>
    <p>Rellena el siguiente formulario y te responderemos en menos de 24 horas.</p>
    <form action="src/includes/form-handler.php" method="POST">
      <input type="text" name="nombre" placeholder="Nombre completo" required />
      <input type="email" name="email" placeholder="Correo electrónico" required />
      <textarea name="mensaje" rows="4" placeholder="Cuéntanos qué necesitas" required></textarea>
      <button type="submit">Enviar mensaje</button>
    </form>
  </section>
</main>

<?php include('src/includes/footer.php'); ?>
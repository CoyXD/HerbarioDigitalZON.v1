  <!-- Header - menu -->
  <?php  require('../layout/header.php'); ?>

<!-- Efectos de cuadrados moviendose de fondo -->
<div class="container__background-triangle">
    <div class="triangle triangle1"></div>
    <div class="triangle triangle2"></div>
    <div class="triangle triangle3"></div>
</div>



<div class="content">

<h1 class="logo">Contact <span>Us</span></h1>

<div class="contact-wrapper animated bounceInUp">
    <div class="contact-form">
        <form action="">
            <p>
                <label>Nombre completo</label>
                <input type="text" name="fullname">
            </p>
            <p>
                <label>Email</label>
                <input type="email" name="email">
            </p>
            <p>
                <label>Numero de telefono</label>
                <input type="tel" name="phone">
            </p>
            <p>
                <label>Asunto</label>
                <input type="text" name="affair">
            </p>
            <p class="block">
               <label>Mensaje</label> 
                <textarea name="message" rows="3"></textarea>
            </p>
            <p class="block">
                <button>
                    Enviar
                </button>
            </p>
        </form>
    </div>
    <div class="contact-info">
        <h4>Mas informacion</h4>
        <ul>
            <li><i class="fas fa-map-marker-alt"></i> Baker Street</li>
            <li><i class="fas fa-phone"></i> (111) 111 111 111</li>
            <li><i class="fas fa-envelope-open-text"></i> contact@website.com</li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
        <p>Company.com</p>
    </div>
</div>

</div>






  <!-- Footer -->
  <?php  require('../layout/footer.php'); ?>
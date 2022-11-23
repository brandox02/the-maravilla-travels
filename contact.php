<?php 
   include_once("components/header.php")
?>
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <form class="container" action="request-post.php" method="POST">
          <h1 class="contact_taital" style="color:white;">Solicitar una llamada</h1>
          <div class="email_text">
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Nombre" name="name" required>
             </div>
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Número" name="number" required>
             </div>
             <div class="form-group">
                <input type="email" class="email-bt" placeholder="Email" name="email" required>
             </div>
             <div class="form-group">
                <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message" required></textarea>
             </div>
             <button class="send_btn" type="submit">Enviar</button>
          </div>
      </form>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      
   <?php 
      include_once("components/footer.php")
   ?>
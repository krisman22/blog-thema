<?php if(!is_front_page()): ?>

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="img-side my-3">
          <img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="img-responsive 				" alt="Responsive image">
   </div>

         
          <div class="sidebar-module">
            <div class="sidebar-module-inset">
            <h4>About</h4>
            <p>Seorang yang suka mengembara di dunia per-internetan. Suka dengan <em>Design Graphic</em>, serta ngotak-ngatik coding. Pernah menjadi Video Editor tapi sekarang mau fokus dulu ke dunia IT. Penyuka kopi, karena nggak bisa ngoding kalo belum ngpopi. Berbakat untuk mengundang perhatian. <em>Easy Going</em>, itu yang dikatakan orang-orang yang pertama kali bertemu gue. Aktif dalam dunia permusikan juga.</p>
          </div>
          <div class="sidebar-module-cat">
          <?php if(is_active_sidebar('sidebar')): ?> 
          <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
        </div>
      </div>

        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
  <?php endif; ?>

    <footer class="blog-footer">
      <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
      
    </footer>
      <?php wp_footer(); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url') ; ?>/js/bootstrap.js"></script>
    
  </body>
</html>
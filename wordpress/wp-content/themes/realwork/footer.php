<?php 
   $logoFooter = get_field('logo_footer', 'option'); 
   $commonInfo = get_field('common_info', 'option');
?>
</section>
<footer>
   <div class="footer-center">
      <div class="container">
         <div class="block-footer-center">
            <div class="row flex-wrap">
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <p class="ft_logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo $logoFooter ?>"
                           alt="<?php bloginfo( 'name' ) ?>"></a></p>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <h4 class="tit-ft">Site Map</h4>
                  <ul class="ul-ft sitemap">
                     <li><i class="fas fa-angle-right"></i><a href="<?php echo site_url(); ?>">Trang chủ</a></li>
                     <li><i class="fas fa-angle-right"></i><a href="<?php echo site_url('gioi-thieu'); ?>">Giới
                           thiệu</a>
                     </li>
                     <li><i class="fas fa-angle-right"></i><a href="<?php echo site_url('dich-vu'); ?>">Dịch vụ</a></li>
                     <li><i class="fas fa-angle-right"></i><a href="<?php echo site_url('tin-tuc'); ?>">Tin tức</a></li>
                     <li><i class="fas fa-angle-right"></i><a href="<?php echo site_url('hinh-anh'); ?>">Hình ảnh</a>
                     </li>
                     <li><i class="fas fa-angle-right"></i><a href="<?php echo site_url('lien-he'); ?>">Liên hệ</a></li>
                  </ul>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <h4 class="tit-ft">LIÊN HỆ</h4>
                  <ul class="ul-ft contact">
                     <li><i class="fas fa-map-marker-alt"></i><?php echo $commonInfo[0]['address'] ?></li>
                     <li><i class="fas fa-phone"></i><a
                           href="tel:<?php echo $commonInfo[0]['phone'] ?>"><?php echo $commonInfo[0]['phone'] ?></a>
                     </li>
                     <li><i class="far fa-envelope"></i><a
                           href="mailto:<?php echo $commonInfo[0]['email'] ?>"><?php echo $commonInfo[0]['email'] ?></a>
                     </li>
                     <li><i class="far fa-clock"></i><?php echo $commonInfo[0]['working_time'] ?></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="address center">
         <address>&copy;
            <script>
            document.write(new Date().getFullYear());
            </script> RealWorks All rights reserved</address>
      </div>
   </div>
</footer>
<div id="show-search" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tìm kiếm</h4>
         </div>
         <div class="modal-body">
            <form class="f-search">
               <div class="input-group stylish-input-group">
                  <input type="text" class="form-control" placeholder="Tìm kiếm ...">
                  <span class="input-group-addon">
                     <button type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                     </button>
                  </span>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" data-toggle="tooltip"
   data-placement="left" data-original-title="" title="" style="display: inline;"><span
      class="glyphicon glyphicon-chevron-up"></span></a>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="<?php echo JS_PATH; ?>js/owl.carousel.min.js"></script>
<script src="<?php echo JS_PATH; ?>js/main.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH; ?>js/slider.js" type="text/javascript"></script>
</body>

</html>
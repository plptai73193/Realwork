<?php
/**
 * Template for displaying search forms in Foodconnection
 *
 * @package WordPress
 * @subpackage Food_Connection
 * @since Foodconnection 1.0
 */
?>
<div id="show-search" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tìm kiếm</h4>
         </div>
         <div class="modal-body">
            <form class="f-search search-form" role="search" method="get"
               action="<?php echo esc_url( home_url( '/' ) ); ?>">
               <div class="input-group stylish-input-group">
                  <input type="text" class="form-control" placeholder="Tìm kiếm ..."
                     value="<?php echo get_search_query(); ?>" name="s">
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
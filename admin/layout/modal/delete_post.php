<div class="modal  fade in" id="DeletePost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
          <?php 
              if (isset($_POST['delete_post_id_btn'])) {
                $delete_post_id_input = $_POST['post_id_delete'];
                $sql_delete_post_id = "DELETE FROM  posts WHERE id ={$delete_post_id_input}";
                $result_sql_delete_post_id = mysqli_query($dbconnection, $sql_delete_post_id);
                header("Location: post_admin.php");
              }
           ?>
    <div class="modal-content">
      <form method="post" action="">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" align="center">Supprimer Post!!!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <input type="hidden" class="form-control" id="post_id_delete" name="post_id_delete">
            
            Etes vous sure de vouloir supprimer ce post?</p>
        </div>
      </div>
      <div class="modal-footer">
     
        <button type="submit" name="delete_post_id_btn" class=""><span class="" aria-hidden="true"></span> Supprimer</button>
      </div>
      </form>
    </div>
  </div>
</div>
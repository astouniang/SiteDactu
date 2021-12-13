<div class="modal  fade in" id="DeleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
          <?php 
              if (isset($_POST['delete_user_id_btn'])) {
                $delete_user_id_input = $_POST['user_id_delete'];
                $sql_delete_user_id = "DELETE FROM  users WHERE id ={$delete_user_id_input}";
                $result_sql_delete_user_id = mysqli_query($dbconnection, $sql_delete_user_id);
                header("Location: users_admin.php");
              }
           ?>
    <div class="modal-content">
      <form method="post" action="">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" align="center">Supprimer un utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <input type="hidden" class="form-control" id="user_id_delete" name="user_id_delete">
            <p align="center"> 
            Etes vous sure de vouloir supprimer cet utilisateur?</p>
        </div>
      </div>
      <div class="modal-footer">
        
        <button type="submit" name="delete_user_id_btn" class=""><span class="" aria-hidden="true"></span> OUI</button>
      </div>
      </form>
    </div>
  </div>
</div>
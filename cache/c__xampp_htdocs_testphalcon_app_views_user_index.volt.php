<div class="container py-5">
   <?= $this->tag->form(['user/create', 'role' => 'form']) ?>
    <label for="name">Nama</label>
    <input class="form-control" type="text" name="txt_nama">
         <br>
       <label for="email">Email</label>
    <input type="text" name="txt_email">
       <br>
       <button type="submit">Save</button>
   </form>
</div>


<div class="container">
   <?php
   echo Phalcon\Tag::linkTo("User/viewData", "Lihat Data");
   ?>
</div>
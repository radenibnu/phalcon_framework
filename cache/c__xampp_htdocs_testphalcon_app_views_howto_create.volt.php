
<div class="container py-5">
    <h3>Tambah Data </h3>
    <?= $this->tag->form(['howto/create', 'role' => 'form']) ?>
        <div class="form-group">
            <label for="name">Title</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group">
            <label for="name">Content</label>
            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
            <!-- <input class="form-control" type="text" name="content"> -->
        </div>
        <button class="btn btn-primary btn-sm" type="submit">Save</button>
    </form>
</div>
    
    
    <div class="container">
    <?php
    echo Phalcon\Tag::linkTo("Howto/viewData", "Lihat Data");
    ?>
    </div>

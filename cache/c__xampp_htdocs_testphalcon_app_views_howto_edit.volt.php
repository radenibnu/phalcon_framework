
<div class="container mt-3">
    <div class="row">
        <div class="col-md-3">
            <h3 class="mb-4">Edit Data </h3>
        </div>
    </div>
</div>

<div class="container py-5">
    <?= $this->tag->form(['howto/update', 'role' => 'form']) ?>
        <input type="hidden" name="id" value=<?php echo $id ?>>

        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" value="<?php echo $title ?>">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input class="form-control" type="text" name="content" value="<?php echo $content ?>">
        </div>
        <button class="btn btn-primary btn-sm" type="submit">Save</button>
    </form>
</div>
    
   

<div class="container mt-3">
    <div class="row">
        <div class="col-md-3">
            <h3 class="mb-4">Tambah Data </h3>
        </div>
        <div class="col-md-4">
            <a href="{{ url('Howto/View') }}" class="btn btn-info btn-sm"> Lihat Data </a>
        </div>
    </div>
</div>

<div class="container py-5">
    {{ form('howto/create', 'role': 'form') }}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input class="form-control" type="text" name="content">
        </div>
        <button class="btn btn-primary btn-sm" type="submit">Save</button>
    </form>
</div>
    
   
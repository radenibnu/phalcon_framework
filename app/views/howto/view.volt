<div class="container">
    <h2 class="py-3">List Data</h2>
    <div class="table-responsive">
        {% for datas in data %}
        {% if loop.first %}
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th class="text-center" colspan="2">Action</th>
                </tr>
            </thead>
            {% endif %}
            <tbody>
               <tr>
                   <td> {{ datas.id }}</td>
                   <td> {{ datas.title }}</td>
                   <td> {{ datas.content }}</td>
                   <td> <a href="{{ url('howto/edit/'~datas.id) }}">Edit</a></td>
                   <td> <a href="{{ url('howto/hapus/'~datas.id) }}">Hapus</a></td>
               </tr>
            </tbody>
            {% if loop.last %}
        </table>
        {% endif %}
    {% else %}
        No Data
    {% endfor %}

</div>

<div class="container">
    <a href="{{ url('howto') }}" class="btn btn-primary btn-sm">Back</a>

</div>
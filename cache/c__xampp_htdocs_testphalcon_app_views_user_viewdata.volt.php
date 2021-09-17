<?php $v41524560561iterated = false; ?><?php $v41524560561iterator = $data; $v41524560561incr = 0; $v41524560561loop = new stdClass(); $v41524560561loop->self = &$v41524560561loop; $v41524560561loop->length = count($v41524560561iterator); $v41524560561loop->index = 1; $v41524560561loop->index0 = 1; $v41524560561loop->revindex = $v41524560561loop->length; $v41524560561loop->revindex0 = $v41524560561loop->length - 1; ?><?php foreach ($v41524560561iterator as $datas) { ?><?php $v41524560561loop->first = ($v41524560561incr == 0); $v41524560561loop->index = $v41524560561incr + 1; $v41524560561loop->index0 = $v41524560561incr; $v41524560561loop->revindex = $v41524560561loop->length - $v41524560561incr; $v41524560561loop->revindex0 = $v41524560561loop->length - ($v41524560561incr + 1); $v41524560561loop->last = ($v41524560561incr == ($v41524560561loop->length - 1)); ?><?php $v41524560561iterated = true; ?>
<?php if ($v41524560561loop->first) { ?>
<table border="1" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
<?php } ?>

    <tbody>
        <tr>
            <td><?= $datas->id_user ?></td>
            <td><?= $datas->nama_user ?></td>
            <td><?= $datas->email_user ?></td>
            <td> <a href="<?= $this->url->get('user/edit/' . $datas->id_user) ?>">Edit</a></td>
            <td> <a href="<?= $this->url->get('user/hapus/' . $datas->id_user) ?>">Hapus</a></td>
        </tr>
    </tbody>
    <?php if ($v41524560561loop->last) { ?>
</table>
<?php } ?>
<?php $v41524560561incr++; } if (!$v41524560561iterated) { ?>
    No Data
<?php } ?>

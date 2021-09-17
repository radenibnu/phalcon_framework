<div class="container">
    <h2 class="py-3">List Data</h2>
    <div class="table-responsive">
        <?php $v15468417761iterated = false; ?><?php $v15468417761iterator = $data; $v15468417761incr = 0; $v15468417761loop = new stdClass(); $v15468417761loop->self = &$v15468417761loop; $v15468417761loop->length = count($v15468417761iterator); $v15468417761loop->index = 1; $v15468417761loop->index0 = 1; $v15468417761loop->revindex = $v15468417761loop->length; $v15468417761loop->revindex0 = $v15468417761loop->length - 1; ?><?php foreach ($v15468417761iterator as $datas) { ?><?php $v15468417761loop->first = ($v15468417761incr == 0); $v15468417761loop->index = $v15468417761incr + 1; $v15468417761loop->index0 = $v15468417761incr; $v15468417761loop->revindex = $v15468417761loop->length - $v15468417761incr; $v15468417761loop->revindex0 = $v15468417761loop->length - ($v15468417761incr + 1); $v15468417761loop->last = ($v15468417761incr == ($v15468417761loop->length - 1)); ?><?php $v15468417761iterated = true; ?>
        <?php if ($v15468417761loop->first) { ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th class="text-center" colspan="2">Action</th>
                </tr>
            </thead>
            <?php } ?>
            <tbody>
               <tr>
                   <td> <?= $datas->id ?></td>
                   <td> <?= $datas->title ?></td>
                   <td> <?= $datas->content ?></td>
                   <td> <a href="<?= $this->url->get('howto/edit/' . $datas->id) ?>">Edit</a></td>
                   <td> <a href="<?= $this->url->get('howto/hapus/' . $datas->id) ?>">Hapus</a></td>
               </tr>
            </tbody>
            <?php if ($v15468417761loop->last) { ?>
        </table>
        <?php } ?>
    <?php $v15468417761incr++; } if (!$v15468417761iterated) { ?>
        No Data
    <?php } ?>

</div>

<div class="container">
    <a href="<?= $this->url->get('howto') ?>" class="btn btn-primary btn-sm">Back</a>

</div>
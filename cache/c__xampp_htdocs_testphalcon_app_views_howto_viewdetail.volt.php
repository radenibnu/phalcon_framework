<div class="container py-5">
    <h2 class="mb-3">View Details</h2>

    <h4>Title : <?php echo $title ?> </h4>
    <h6>Content : <?php echo $content ?></h6>
    
    <a href="<?= $this->url->get('index') ?>" class="btn btn-primary btn-sm mt-5">Back to Home</a>
</div>

<?php echo $this->getContent() ?>  


<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Phalcon Framework</h1>
        <p class="lead">Phalcon is an open source full stack framework for PHP, written as a C-extension. Phalcon is optimized for high performance. Its unique architecture allows the framework to always be memory resident, offering its functionality whenever it’s needed, without expensive file stats and file reads that traditional PHP frameworks employ. Usage</p>
        <hr class="my-4">
        <p>Our mission is to offer developers an advanced, feature rich tool, which they can use to develop powerful applications with low server consumption and high performance.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="https://docs.phalcon.io/4.0/id-id/installation" role="button" >Learn more</a>
        </p>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center">All about Install Phalcon Framework</h2>
    <hr class="mb-3">
    <div class="container">
        <div class="row mb-3">
            <?php foreach ($data as $datas) { ?>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $datas->title ?></h5>
                        <p class="card-text"><?= $datas->content ?></p>
                        <a href="<?= ('howto/viewDetail/' . $datas->id) ?>" class="btn btn-primary">View Detail</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container-fluid footer">
    <div class="container py-3">
        <div class="row">
            <div class="col-md-6">
                <h4>More Information</h4>
                <ul>
                    <li><a href="https://github.com/jbboehr/php-psr/blob/master/"> php-psr . jbboehr/blob/master </a></li>
                    <li><a href="https://blog.phalcon.io/"> Phalcon Blog</a></li>
                    <li><a href="https://github.com/phalcon/cphalcon/discussions"> Discussion on Github</a></li>
                    <li><a href="https://t.me/phalcon_news"> Telegram</a></li>
                    <li><a href="https://twitter.com/phalconphp"> Twitter</a></li>
                </ul>
            </div>
            <div class="col-md-6">
            
            </div>
        </div>
    </div>
</div>


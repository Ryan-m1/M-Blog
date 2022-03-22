<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="container footer" >

    
    <?php $this->options->footerEcho(); ?>

       <br>
       &copy; <?php echo date('Y'); ?>

    <a class="footer-item" style="text-align:center" href="<?php $this->options->siteUrl(); ?>">
        <?php $this->options->title(); ?></a>


    <p class="footer-item">Powered by <b><a target="_blank" href="https://www.wormholestack.cn/index.php/aboutme.html">MRyan</a></b></p>


    <?php if ($this->options->recordNo) : ?>
        <a class="footer-item" target="_blank" href="http://beian.miit.gov.cn/"> <?php $this->options->recordNo(); ?></a>
    <?php endif; ?>
    <br />

    <a class="footer-item" target="_blank" style="font-size:13px;">
        <?php Uptime_Plugin::show(); ?>
    </a>
    <br />


</footer>
<?php $this->footer(); ?>
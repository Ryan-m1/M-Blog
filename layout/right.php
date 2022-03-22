<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<div class="col-12 col-md-3 position-relative right d-none d-md-block" >
    <div class="search-bar" style="position: relative;box-shadow: 0px 2px 13px rgba(0,0,0,0.3),0px 3px 2px rgba(0,0,0,0.1) inset;">
        <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
            <input type="text" id="s" name="s" class="nav-search-input" placeholder="<?php _e('输入关键字搜索'); ?>">
            <button class="nav-search-btn" type="submit">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-sousuo"></use>
                </svg>
            </button>
        </form>
        </form>
    </div>
    <div class="card user-container" style="position: relative;box-shadow: 0px 2px 13px rgba(0,0,0,0.3),0px 3px 2px rgba(0,0,0,0.1) inset;">
    <br/>        
    <div class="card-header user-info">
            <div class="info">
                <img class="pic" src="<?php $this->options->rightAvatar(); ?>" alt="博主">
            </div>
        </div>
        <p>
            <?php $this->options->rightName(); ?>
        </p>
    <br/>
        <div class="card-info-description" style="padding-left: 4%;padding-right: 4%;"><?php echo $this->options->rightMotto ? $this->options->rightMotto : '博主很懒，啥都没有'; ?></div>
        <br>
    </div>
    <?php if ($this->options->couple): ?>
        <div class="sidebar-box couple" style="position: relative;box-shadow: 0px 2px 13px rgba(0,0,0,0.3),0px 3px 2px rgba(0,0,0,0.1) inset;">
            <img class="pic" src="<?php $this->options->rightAvatar(); ?>" alt="博主">
            <img class="couple-love" src="<?php utils::indexTheme('assets/img/love.png'); ?>" alt="爱心">
            <img class="pic" src="<?php $this->options->taAvatar(); ?>" alt="另一半">
            <div id="our-company" data-start="<?php $this->options->company(); ?>"></div>
        </div>
    <?php endif; ?>
    <div class="sidebar-box" style="position: relative;box-shadow: 0px 2px 13px rgba(0,0,0,0.3),0px 3px 2px rgba(0,0,0,0.1) inset;">
        <div class="p-3"><h6>可能感兴趣</h6></div>
        <div class="sidebar-content px-3 pb-2">
            <?php utils::getRandomPosts(5); ?>
        </div>
    </div>
    <?php $this->need('layout/footer.php'); ?>
</div>
<div class="col-12 d-md-none">
<?php $this->need('layout/footer.php'); ?>
</div>


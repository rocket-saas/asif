<?php

if(get_sub_field('references_content')) : ?>
<section class="imasReferences" id="references">
    <div class="container">
        <div class="col-lg-9">
            <div class="references__title"><?php echo get_sub_field('references_title');?></div>
            <div class="text-block">
                <?php echo get_sub_field('references_content');?>
            </div>
        </div>
    </div>
</section>

<style>
.page-id-3727 .imasReferences .col-lg-9{
    margin-left: auto;
}
</style>
<?php endif;?>
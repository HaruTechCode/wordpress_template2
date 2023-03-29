<?php if (!is_front_page()) { ?>
    <?php if (function_exists('bcn_display')) { ?>
        <div class="breadcrumb-wrapper">
            <div id="breadcrumb" class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                <?php bcn_display(); ?>
            </div>
        </div>
    <?php } ?>
<?php } ?>
<?php
    defined('JPATH_BASE') or die();
    gantry_import('core.gantryfeature');
    class GantryFeatureDev extends GantryFeature {
        var $_feature_name = 'dev';
        function render($position="") {
            ob_start();
            ?>
            <div class="rt-block">
                <div class="rt-dev-box">
                    <div class="box-dev"><?php echo $this->get('text'); ?></div>
                </div>
            </div>
    <?php
        return ob_get_clean();
    }
}
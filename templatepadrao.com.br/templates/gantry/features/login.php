<?php
    defined('JPATH_BASE') or die();
    gantry_import('core.gantryfeature');
    class GantryFeatureLogin extends GantryFeature {
        var $_feature_name = 'login';
        function render($position="") {
            ob_start();
            $user =& JFactory::getUser();
?>
            

            <a style="display: none" id="simple-menu" href="#sidr">
                <?php echo $this->get('text'); ?>
            </a>
<?php
    return ob_get_clean();
        }
    }
<?php
/**
 * @version   $Id: copyright.php 2355 2012-08-14 01:04:50Z btowles $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2013 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */

defined('JPATH_BASE') or die();

gantry_import('core.gantryfeature');
/**
 * @package     gantry
 * @subpackage  features
 */
class GantryFeatureCopyright extends GantryFeature
{
	var $_feature_name = 'copyright';

	function render($position)
	{
		ob_start();

		$ano = explode('|', $this->get('text'));

		?>
	<div class="clear"></div>
	<div class="rt-block">
		<div>
            <div class="text-copy"><?php echo ($ano[0] === date('Y')) ? '© '.date('Y').' - '.$ano[1] : '© '.$ano[0].' / '.date('Y').' - '.$ano[1]; ?></div>
        </div>
	</div>
	<?php
		return ob_get_clean();
	}
}
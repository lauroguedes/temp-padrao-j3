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
		?>
	<div class="clear"></div>
	<div class="rt-block">
		<a href="#" id="rocket"></a>
		<table width="100%">
          <tr>
            <td width="13%"><img src="templates/gantry/images/logo/powered.png" alt="Logo <?php echo $this->get('text')?>" /></td>
            <td width="87%"><?php echo '© '.date('Y').' - '.$this->get('text').'<br><img src="images/eagle.png"> Desenvolvido por <a href="http://eagletecnologia.com" target="_blank" title="Soluções Inteligentes para a sua Empresa">Eagle Tecnologia LTDA</a>'; ?></td>
          </tr>
        </table>
	</div>
	<?php
		return ob_get_clean();
	}
}
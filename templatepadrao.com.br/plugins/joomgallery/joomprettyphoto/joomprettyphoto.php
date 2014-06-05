<?php
// $HeadURL: https://joomgallery.org/svn/joomgallery/JG-3/Plugins/JoomprettyPhoto/trunk/joomprettyphoto.php $
// $Id: joomprettyphoto.php 4190 2013-04-08 21:56:20Z chraneco $
/****************************************************************************************\
**   Plugin 'JoomprettyPhoto' 1.0                                                       **
**   By: JoomGallery::ProjectTeam                                                       **
**   Copyright (C) 2010 - 2010 Patrick Alt                                              **
**   Released under GNU GPL Public License                                              **
**   License: http://www.gnu.org/copyleft/gpl.html or have a look                       **
**   at administrator/components/com_joomgallery/LICENSE.TXT                            **
\****************************************************************************************/

defined('_JEXEC') or die('Direct Access to this location is not allowed.');

require_once JPATH_ADMINISTRATOR.'/components/com_joomgallery/helpers/openimageplugin.php';

/**
 * JoomGallery prettyPhoto Plugin
 *
 * With this plugin JoomGallery is able to use prettyPhoto
 * (http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/) for displaying images.
 *
 * @package     Joomla
 * @subpackage  JoomGallery
 * @since       1.0
 */
class plgJoomGalleryJoomprettyPhoto extends JoomOpenImagePlugin
{
  /**
   * Name of this popup box
   *
   * @var   string
   * @since 1.0
   */
  protected $title = 'prettyPhoto';

  /**
   * Initializes the box by adding all necessary JavaScript and CSS files.
   * This is done only once per page load.
   *
   * Please use the document object of Joomla! to add JavaScript and CSS files, e.g.:
   * <code>
   * $doc = JFactory::getDocument();
   * $doc->addStyleSheet(JUri::root().'media/plg_exampleopenimage/css/exampleopenimage.css');
   * $doc->addScript(JUri::root().'media/plg_exampleopenimage/js/exampleopenimage.js');
   * $doc->addScriptDeclaration("    jQuery(document).ready(function(){ExampleOpenImage.init()}");
   * </code>
   *
   * or if using Mootools or jQuery the respective JHtml method:
   * <code>
   * JHtml::_('jquery.framework');
   * JHtml::_('behavior.framework');
   * </code>
   *
   * @return  void
   * @since   1.0
   */
  protected function init()
  {
    $doc = JFactory::getDocument();

    $doc->addStyleSheet(JURI::root().'media/plg_joomprettyphoto/css/prettyPhoto.css');

    JHtml::_('jquery.framework');

    $doc->addScript(JURI::root().'media/plg_joomprettyphoto/js/jquery.prettyPhoto.js');
    $doc->addScriptDeclaration("    jQuery(document).ready(function(){
    jQuery(\"a[data-rel^='prettyPhoto']\").prettyPhoto({
      hook: 'data-rel',
      animation_speed: 'fast', /* fast/slow/normal */
      ajaxcallback: function() {},
      slideshow: 5000, /* false OR interval time in ms */
      autoplay_slideshow: false, /* true/false */
      opacity: 0.80, /* Value between 0 and 1 */
      show_title: true, /* true/false */
      allow_resize: true, /* Resize the photos bigger than viewport. true/false */
      allow_expand: true, /* Allow the user to expand a resized image. true/false */
      default_width: 500,
      default_height: 344,
      counter_separator_label: '/', /* The separator for the gallery counter 1 \"of\" 2 */
      theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
      horizontal_padding: 20, /* The padding on each side of the picture */
      hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
      wmode: 'opaque', /* Set the flash wmode attribute */
      autoplay: true, /* Automatically start videos: True/False */
      modal: false, /* If set to true, only the close button will close the window */
      deeplinking: true, /* Allow prettyPhoto to update the url to enable deeplinking. */
      overlay_gallery: true, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
      overlay_gallery_max: 60, /* Maximum number of pictures in the overlay gallery */
      keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
      changepicturecallback: function(){}, /* Called everytime an item is shown/changed */
      callback: function(){}, /* Called when prettyPhoto is closed */
      ie6_fallback: true,
      custom_markup: '',
      social_tools: false /* html or false to disable */
    });
  });");
  }

  /**
   * This method should set an associative array of attributes for the 'a'-Tag (key/value pairs) which opens the image.
   *
   * <code>
   * $attribs['data-rel']   = 'examplebox';
   * $attribs['data-group'] = $group;
   * </code>
   *
   * The example above will create a link tag like that: <a href="<image URL>"  data-rel="examplebox" group="<image group>" ... >
   *
   * ($attribs is passed by references and should only be filled)
   *
   * By default the attribute 'href' is filled with the URL to the image which shall be opened. You only have to set that
   * attribute if you want to change that (the image URL is passed in the third argument of this method).
   *
   * NOTE!!!: You are not allowed to set the attributes 'title' and 'class' because these are handled internally by JoomGallery.
   *
   * @param   array   $attribs  Associative array of HTML attributes which you have to fill
   * @param   object  $image    An object holding all the relevant data about the image to open
   * @param   string  $img_url  The URL to the image which shall be openend
   * @param   string  $group    The name of an image group, most popup boxes are able to group the images with that
   * @param   string  $type     'orig' for original image, 'img' for detail image or 'thumb' for thumbnail
   * @return  void
   * @since   1.0
   */
  protected function getLinkAttributes(&$attribs, $image, $img_url, $group, $type)
  {
    $attribs['data-rel'] = 'prettyPhoto['.$group.']';
  }
}
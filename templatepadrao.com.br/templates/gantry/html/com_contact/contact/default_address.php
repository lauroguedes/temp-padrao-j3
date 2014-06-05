<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * marker_class: Class based on the selection of text, none, or icons
 * jicon-text, jicon-none, jicon-icon
 */
?>
<div class="contact-address rt-grid-4">
	<?php if (($this->params->get('address_check') > 0) &&
		($this->contact->address || $this->contact->suburb  || $this->contact->state || $this->contact->country || $this->contact->postcode)) : ?>

		<?php if ($this->contact->address && $this->params->get('show_street_address')) : ?>
			<p>
				<i class="icon-home"></i> <?php echo $this->contact->address;?>
		<?php endif; ?>

		<?php if ($this->contact->suburb && $this->params->get('show_suburb')) : ?>
				<?php echo ", ".$this->contact->suburb; ?>
		<?php endif; ?>
		<?php if ($this->contact->state && $this->params->get('show_state')) : ?>
				<?php echo "/".$this->contact->state; ?>
		<?php endif; ?>
		<?php if ($this->contact->postcode && $this->params->get('show_postcode')) : ?>
				<?php echo "<strong>CEP: </strong>".$this->contact->postcode .'<br/>'; ?>
			</p>
		<?php endif; ?>
		<?php if ($this->contact->country && $this->params->get('show_country')) : ?>
		<p>
			<span class="contact-country">
				<?php echo $this->contact->country .'<br/>'; ?>
			</span>
		</p>
		<?php endif; ?>
	<?php endif; ?>

<?php if ($this->contact->email_to && $this->params->get('show_email')) : ?>
	<p>
		<span class="contact-emailto">
			<i class="icon-envelope"></i> <?php echo $this->contact->email_to; ?>
		</span>
	</p>
<?php endif; ?>

<?php if ($this->contact->telephone && $this->params->get('show_telephone')) : ?>
	<p>
		<i class="icon-phone"></i> <?php echo nl2br($this->contact->telephone.", "); ?>
<?php endif; ?>
<?php if ($this->contact->fax && $this->params->get('show_fax')) : ?>
		<?php echo nl2br($this->contact->fax); ?>
<?php endif; ?>
<?php if ($this->contact->mobile && $this->params->get('show_mobile')) :?>
		<?php echo nl2br($this->contact->mobile); ?>
	</p>
<?php endif; ?>

<?php if ($this->contact->webpage && $this->params->get('show_webpage')) : ?>
	<dt>
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
		</span>
	</dt>
	<dd>
		<span class="contact-webpage">
			<a href="<?php echo $this->contact->webpage; ?>" target="_blank">
			<?php echo JStringPunycode::urlToUTF8($this->contact->webpage); ?></a>
		</span>
	</dd>
<?php endif; ?>
</div>

<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_content_extended
 *
 * @copyright   (C) 2024 Herman Peeren, Yepr
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var \Yepr\Component\Content_extended\Administrator\View\Article\HtmlView $this */
?>
<div class="subhead noshadow mb-3">
    <?php echo $this->getDocument()->getToolbar('toolbar')->render(); ?>
</div>
<div class="container-popup">
    <?php $this->setLayout('edit'); ?>
    <?php echo $this->loadTemplate(); ?>
</div>

<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_content_extended
 *
 * @copyright   (C) 2024 Herman Peeren, Yepr
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\LayoutHelper;

// Add strings for translations in Javascript.
Text::script('JGLOBAL_EXPAND_CATEGORIES');
Text::script('JGLOBAL_COLLAPSE_CATEGORIES');

/** @var \Yepr\Component\Content_extended\Site\View\Categories\HtmlView $this */
/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $this->getDocument()->getWebAssetManager();
$wa->getRegistry()->addExtensionRegistryFile('com_categories');
$wa->usePreset('com_categories.shared-categories-accordion');

?>
<div class="com-content-categories categories-list">
    <?php
        echo LayoutHelper::render('joomla.content.categories_default', $this);
        echo $this->loadTemplate('items');
    ?>
</div>

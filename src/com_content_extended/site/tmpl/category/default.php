<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_content_extended
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Layout\LayoutHelper;

/** @var \Yepr\Component\Content_extended\Site\View\Category\HtmlView $this */
?>
<div class="com-content-category category-list">

<?php
$this->subtemplatename = 'articles';
echo LayoutHelper::render('joomla.content.category_default', $this);
?>

</div>

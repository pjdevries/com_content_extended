<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_content_extended
 *
 * @copyright   (C) 2007 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace Yepr\Component\Content_extended\Site\Helper;

use Joomla\CMS\Categories\CategoryNode;
use Joomla\CMS\Language\Multilanguage;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Content Component Route Helper.
 *
 * @since  1.5
 */
abstract class RouteHelper
{
    /**
     * Get the article route.
     *
     * @param   integer  $id        The route of the content item.
     * @param   integer  $catid     The category ID.
     * @param   string   $language  The language code.
     * @param   string   $layout    The layout value.
     *
     * @return  string  The article route.
     *
     * @since   1.5
     */
    public static function getArticleRoute($id, $catid = 0, $language = null, $layout = null)
    {
        // Create the link
        $link = 'index.php?option=com_content_extended&view=article&id=' . $id;

        if ((int) $catid > 1) {
            $link .= '&catid=' . $catid;
        }

        if (!empty($language) && $language !== '*' && Multilanguage::isEnabled()) {
            $link .= '&lang=' . $language;
        }

        if ($layout) {
            $link .= '&layout=' . $layout;
        }

        return $link;
    }

    /**
     * Get the category route.
     *
     * @param   integer  $catid     The category ID.
     * @param   integer  $language  The language code.
     * @param   string   $layout    The layout value.
     *
     * @return  string  The article route.
     *
     * @since   1.5
     */
    public static function getCategoryRoute($catid, $language = 0, $layout = null)
    {
        if ($catid instanceof CategoryNode) {
            $id = $catid->id;
        } else {
            $id = (int) $catid;
        }

        if ($id < 1) {
            return '';
        }

        $link = 'index.php?option=com_content_extended&view=category&id=' . $id;

        if ($language && $language !== '*' && Multilanguage::isEnabled()) {
            $link .= '&lang=' . $language;
        }

        if ($layout) {
            $link .= '&layout=' . $layout;
        }

        return $link;
    }

    /**
     * Get the form route.
     *
     * @param   integer  $id  The form ID.
     *
     * @return  string  The article route.
     *
     * @since   1.5
     */
    public static function getFormRoute($id)
    {
        return 'index.php?option=com_content_extended&task=article.edit&a_id=' . (int) $id;
    }
}

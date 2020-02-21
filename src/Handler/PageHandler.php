<?php
/**
 * Created by PhpStorm.
 * User: arnaudyanga <arnaud.yanga@believedigital.com>
 * Date: 18/02/2020
 * Time: 16:39.
 */

declare(strict_types=1);

namespace App\Handler;

use App\Entity\Page;
use App\Manager\PageManager;

/**
 * Class PageHandler.
 */
class PageHandler extends AbstractHandler
{
    /**
     * @var PageManager
     */
    private PageManager $pageManager;

    /**
     * PageHandler constructor.
     * @param PageManager $pageManager
     */
    public function __construct(PageManager $pageManager)
    {
        $this->pageManager = $pageManager;
    }

    /**
     * @param int $id
     * @return Page|null
     */
    public function getPageById(int $id)
    {
        return $this->pageManager->findById($id);
    }
}
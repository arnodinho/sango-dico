<?php
/**
 * Created by PhpStorm.
 * User: arnaudyanga <arnaud.yanga@believedigital.com>
 * Date: 18/02/2020
 * Time: 16:39.
 */

declare(strict_types=1);

namespace App\Handler;

use App\Entity\Unknown;
use App\Entity\StorableEntityInterface;
use App\Manager\UnknownManager;

/**
 * Class UnknownHandler.
 */
class UnknownHandler extends AbstractHandler implements HandlerInterface
{
    /**
     * @var UnknownManager
     */
    protected UnknownManager $unknownManager;

    /**
     * UnknownHandler constructor.
     * @param UnknownManager $unknownManager
     */
    public function __construct(UnknownManager $unknownManager)
    {
        $this->unknownManager = $unknownManager;
    }

    /**
     * @param int $id
     * @return Unknown|null
     */
    public function retrieveById(int $id)
    {
        return $this->unknownManager->findById($id);
    }

    /**
     * @return array|null
     */
    public function retrieveAll(): ?array
    {
        return $this->unknownManager->findAll();
    }

    /**
     * @param StorableEntityInterface $entity
     */
    public function create(StorableEntityInterface $entity): void
    {
        $this->unknownManager->save($entity);
    }

    public function deleteById(int $id)
    {
        if ($entity = $this->unknownManager->findById($id)) {
            $this->unknownManager->delete($entity);
        }
    }
}

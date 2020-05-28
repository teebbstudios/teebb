<?php
/**
 * This file is part of the teebb package.
 *
 * Author: Quan Weiwei <qww.zone@gmail.com>
 * Date: 2020/5/21
 * (c) teebbstudios
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Teebb\CoreBundle\Entity\EntityType\ContentType as BaseContentType;

/**
 * @ORM\Entity
 * @ORM\Table(name="teebb_content_type")
 */
class ContentType extends BaseContentType
{

}
<?php
/**
 * Created by PhpStorm.
 * User: dylan
 * Date: 25/01/2018
 * Time: 13:41
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Category
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 *
 */
class Category
{

    /**
     * @var int
     *
     * @ORM\Column(name="categoryid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="memberType")
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Member", inversedBy="categorys")
     * @ORM\JoinColumn(nullable=true)
     */
    private $member;

    public function getId()
    {
        return $this->id;
    }

    public function getMember(): Member
    {
        return $this->member;
    }

    public function setMember(Member $member)
    {
        $this->member = $member;
    }
}
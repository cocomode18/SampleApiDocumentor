<?php

namespace Cocomode\SampleApiDocumentorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Api
 *
 * @ORM\Table(name="api")
 * @ORM\Entity
 */
class Api
{
    const API_TYPE_NORMAL = 0;
    const API_TYPE_TEMP = 1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="route1", type="string", length=50, nullable=false)
     */
    private $route1;

    /**
     * @var string
     *
     * @ORM\Column(name="route2", type="string", length=50, nullable=true)
     */
    private $route2;

    /**
     * @var string
     *
     * @ORM\Column(name="route3", type="string", length=50, nullable=true)
     */
    private $route3;

    /**
     * @var string
     *
     * @ORM\Column(name="route4", type="string", length=50, nullable=true)
     */
    private $route4;

    /**
     * @var string
     *
     * @ORM\Column(name="route5", type="string", length=50, nullable=true)
     */
    private $route5;

    /**
     * @var string
     *
     * @ORM\Column(name="route6", type="string", length=50, nullable=true)
     */
    private $route6;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="status_code", type="string", length=50, nullable=false)
     */
    private $statusCode;

    /**
     * @var string
     *
     * @ORM\Column(name="content_type", type="string", length=50, nullable=false)
     * @Assert\NotBlank(
     *   message = "ContentType field is empty",
     *   groups = {"create_api", "edit_api"}
     * )
     */
    private $contentType;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="text", nullable=false)
     * @Assert\NotBlank(
     *   message = "Response field is empty",
     *   groups = {"create_api", "edit_api"}
     * )
     */
    private $response;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expire_date", type="datetime", nullable=true)
     */
    private $expireDate;

    /**
     * @var string
     *
     * @Assert\NotBlank(
     *   message = "Api url field is empty",
     *   groups = {"create_api"}
     * )
     * @Assert\Regex(
     *   pattern = "/^[a-zA-Z0-9\/_-]+$/",
     *   message = "Api url can only contain alphabets and numbers",
     *   groups = {"create_api"}
     * )
     */
    private $route;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set route1
     *
     * @param string $route1
     * @return Api
     */
    public function setRoute1($route1)
    {
        $this->route1 = $route1;

        return $this;
    }

    /**
     * Get route1
     *
     * @return string
     */
    public function getRoute1()
    {
        return $this->route1;
    }

    /**
     * Set route2
     *
     * @param string $route2
     * @return Api
     */
    public function setRoute2($route2)
    {
        $this->route2 = $route2;

        return $this;
    }

    /**
     * Get route2
     *
     * @return string
     */
    public function getRoute2()
    {
        return $this->route2;
    }

    /**
     * Set route3
     *
     * @param string $route3
     * @return Api
     */
    public function setRoute3($route3)
    {
        $this->route3 = $route3;

        return $this;
    }

    /**
     * Get route3
     *
     * @return string
     */
    public function getRoute3()
    {
        return $this->route3;
    }

    /**
     * Set route4
     *
     * @param string $route4
     * @return Api
     */
    public function setRoute4($route4)
    {
        $this->route4 = $route4;

        return $this;
    }

    /**
     * Get route4
     *
     * @return string
     */
    public function getRoute4()
    {
        return $this->route4;
    }

    /**
     * Set route5
     *
     * @param string $route5
     * @return Api
     */
    public function setRoute5($route5)
    {
        $this->route5 = $route5;

        return $this;
    }

    /**
     * Get route5
     *
     * @return string
     */
    public function getRoute5()
    {
        return $this->route5;
    }

    /**
     * Set route6
     *
     * @param string $route6
     * @return Api
     */
    public function setRoute6($route6)
    {
        $this->route6 = $route6;

        return $this;
    }

    /**
     * Get route6
     *
     * @return string
     */
    public function getRoute6()
    {
        return $this->route6;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return Api
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set statusCode
     *
     * @param string $statusCode
     * @return Api
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Get statusCode
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Set contentType
     *
     * @param string $contentType
     * @return Api
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set response
     *
     * @param string $response
     * @return Api
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Api
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Api
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set expireDate
     *
     * @param \DateTime $expireDate
     * @return Api
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Get expireDate
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    public function setRoute($route)
    {
        $this->route = trim($route, '/');
        $routes = explode('/', trim($route, '/'));
        $i = 1;
        foreach ($routes as $r) {
            $this->{'route'.$i} = $r;
            $i++;
        }

        return $this;
    }

    public function getRoute()
    {
        $route = '';
        for ($i=1;$i<7;$i++) {
            if ($this->{'route'.$i})
                $route .= $this->{'route'.$i} . '/';
        }
        return trim($route, '/');
    }
}

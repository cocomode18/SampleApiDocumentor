<?php

namespace Cocomode\SampleApiDocumentorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Api
 *
 * @ORM\Table(name="api")
 */
class Api
{
    const API_TYPE_NORMAL = 0;
    const API_TYPE_TEMP = 1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
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
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_code", type="integer", nullable=false)
     */
    private $statusCode;

    /**
     * @var string
     *
     * @ORM\Column(name="response_format", type="integer", nullable=false)
     */
    private $responseFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="response_format", type="text", nullable=false)
     */
    private $response;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expire_date", type="datetime", nullable=false)
     */
    private $expireDate;



    public function getId()
    {
        return $this->id;
    }

    public function setRoute1($route1)
    {
        $this->route1 = $route1;

        return $this;
    }

    public function getRoute1()
    {
        return $this->route1;
    }

    public function setRoute2($route2)
    {
        $this->route2 = $route2;

        return $this;
    }

    public function getRoute2()
    {
        return $this->route2;
    }

    public function setRoute3($route3)
    {
        $this->route3 = $route3;

        return $this;
    }

    public function getRoute3()
    {
        return $this->route3;
    }

    public function setRoute4($route4)
    {
        $this->route4 = $route4;

        return $this;
    }

    public function getRoute4()
    {
        return $this->route4;
    }

    public function setRoute5($route5)
    {
        $this->route5 = $route5;

        return $this;
    }

    public function getRoute5()
    {
        return $this->route5;
    }

    public function setRoute6($route6)
    {
        $this->route6 = $route6;

        return $this;
    }

    public function getRoute6()
    {
        return $this->route6;
    }

    public function setType($type)
    {
        if ($type !== self::API_TYPE_NORMAL || $this !== self::API_TYPE_TEMP )
            throw new \Exception('Must give const entity value to Api::setType()');

        $this->type = $type;

        return $this;
    }

    public function getType()
    {
        switch ($this->type) {
        case (self::API_TYPE_NORMAL):
            $type = 'normal';
            break;
        case (self::API_TYPE_TEMP):
            $type = 'temp';
            break;
        }

        return $type;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setResponseFormat($responseFormat)
    {
        $this->responseFormat = $responseFormat;

        return $this;
    }

    public function getResponseFormat()
    {
        return $this->responseFormat;
    }

    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    public function getExpireDate()
    {
        return $this->expireDate;
    }
}

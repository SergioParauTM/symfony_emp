<?php

namespace ConfigBundle\Entity;

/**
 * config
 */
class config
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $param;

    /**
     * @var string
     */
    private $configuracion;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set param
     *
     * @param string $param
     *
     * @return config
     */
    public function setParam($param)
    {
        $this->param = $param;

        return $this;
    }

    /**
     * Get param
     *
     * @return string
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Set configuracion
     *
     * @param string $configuracion
     *
     * @return config
     */
    public function setConfiguracion($configuracion)
    {
        $this->configuracion = $configuracion;

        return $this;
    }

    /**
     * Get configuracion
     *
     * @return string
     */
    public function getConfiguracion()
    {
        return $this->configuracion;
    }
}


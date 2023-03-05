<?php

class FlowersRepository extends AbstractRepository
{
    /**
     * @return string
     */
    public function getClass(): string
    {
        return 'FlowerModel';
    }

    /**
     * @return string
     */
    public function getTable(): string
    {
        return 'flowers';
    }

}

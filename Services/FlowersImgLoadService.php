<?php

class FlowersImgLoadService
{

    /**
     * Заполняется таблица с картинками находящимися на внешних ресурсах
     * @param FlowerImgDTO[] $flowerImagesDTOs
     */
    public function saveTempImg(array $flowerImagesDTOs)
    {

    }

    /**
     * загрузка картинок с внешних ресурсов
     */
    public function downloadImages()
    {

    }

    /**
     * Привязка картинок к цветам в таблице flowers и flowersImages
     * сразу сохраняются картинки только с локального ресурса
     * @param FlowerImageModel $flowerImagesDto
     * @param int $idFlower
     */
    public function saveImg(FlowerImageModel $flowerImagesDto, int $idFlower)
    {

    }
}
<?php

namespace Market;

use Market\Interfaces\FileStorageRepositoryInterface;

/**
 * Represents a single product record stored in DB.
 */
class Product
{
    /*...*/
    /**
     * @var \Market\Interfaces\FileStorageRepositoryInterface
     */
    private FileStorageRepositoryInterface $storage;
    
    /**
     * @param \Market\Interfaces\FileStorageRepositoryInterface $fileStorageRepository
     */
    public function __construct(FileStorageRepositoryInterface $fileStorageRepository)
    {
        $this->storage = $fileStorageRepository;
    }
    
    /**
     * @return array
     */
    private function imageFileNames(): array
    {
        $imageFileNames = [];
    
        /* Получение списка имен изображений, где-бы они не хранились */
        
        return $imageFileNames;
    }
    
    /*...*/
    /**
     * Returns product images URLs.
     *
     * @return array
     */
    public function getImageUrls(): array
    {
        $imageUrls = [];
    
        foreach ($this->imageFileNames() as $fileName) {
            $imageUrl = $this->storage->getUrl($fileName);
            if ($imageUrl !== null) {
                $imageUrls[] = $imageUrl;
            }
        }
    
        return $imageUrls;
    }
    
    /**
     * Returns whether image was successfully updated or not.
     *
     * @return bool
     */
    public function updateImages(): bool
    {
        // ...
        try {
            // Update existing images
            foreach ($this->imageFileNames() as $fileName) {
                if ($this->storage->fileExists($fileName) === true) {
                    $this->storage->deleteFile($fileName);
                }
                $this->storage->saveFile($fileName);
            }
   
        } catch (\Exception $exception) {
            // ...
            return false;
        }
    
        // ...
        return true;
    }
    /*...*/
}

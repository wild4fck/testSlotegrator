<?php
namespace B\Market;

use Exception;
use AwsS3\AwsUrlInterface;
use AwsS3\Client\AwsStorageInterface;
use Market\Interfaces\FileStorageRepositoryInterface;

final class AwsS3StorageRepository implements FileStorageRepositoryInterface
{
    private AwsStorageInterface $awsStorage;
    
    public function __construct(AwsStorageInterface $awsStorage)
    {
        $this->awsStorage = $awsStorage;
    }
    
    
    public function getUrl($fileName): ?string
    {
        try {
            return $this->awsStorage->getUrl($fileName);
        } catch (Exception $exception) {
            // Обработка ошибок
            return null;
        }
    }
    
    public function fileExists(string $fileName): bool
    {
        // Реализация проверки существования файла в AWS S3
    }
    
    public function deleteFile(string $fileName): void
    {
        // Реализация удаления файла из AWS S3
    }
    
    public function saveFile(string $fileName): void
    {
        // Реализация сохранения файла в AWS S3
    }
}

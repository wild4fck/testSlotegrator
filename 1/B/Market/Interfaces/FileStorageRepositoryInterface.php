<?php

namespace Market\Interfaces;

use Exception;

/**
 * Interface for file storage repository.
 */
interface FileStorageRepositoryInterface
{
    /**
     * Returns image URL or null.
     *
     * @param string $fileName
     * @return string|null
     */
    public function getUrl(string $fileName): ?string;
    
    /**
     * Returns whether file exists or not.
     *
     * @param string $fileName
     * @return bool
     */
    public function fileExists(string $fileName): bool;
    
    /**
     * Deletes a file in the filesystem and throws an exception in case of errors.
     *
     * @param string $fileName
     * @return void
     * @throws Exception
     */
    public function deleteFile(string $fileName): void;
    
    /**
     * Saves a file in the filesystem and throws an exception in case of errors.
     *
     * @param string $fileName
     * @return void
     * @throws Exception
     */
    public function saveFile(string $fileName): void;
}

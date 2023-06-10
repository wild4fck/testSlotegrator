<?php

namespace AwsS3\Client;

use Exception;
use AwsS3\AwsUrlInterface;

/**
 *
 */
interface AwsStorageInterface
{
    /*...*/
    /**
     * Returns whether S3 connection is authorized or not.
     *
     * @return bool
     */
    public function isAuthorized(): bool;
    /*...*/
    /**
     * Returns AwsUrlInterface instance and throws an exception in case
     * connection or authorization errors.
     *
     * @param string $fileName
     *
     * @return \FirstB\AwsS3\AwsUrlInterface
     * @throws Exception
     */
    public function getUrl(string $fileName): AwsUrlInterface;
    /*...*/
}

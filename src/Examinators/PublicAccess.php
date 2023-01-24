<?php

namespace Mbtnet\Devcheck\Examinators;

use Mbtnet\Devcheck\Examinators\ExamResult;

/**
 * This class exams the access to the public directory.
 */
class PublicAccess implements ExaminatorInterface
{
    public function run(): ExamResult
    {
        $results = [];
        $examResult = new ExamResult(self::class, 'Examming /public directory access', $results);

        return $examResult;
    }
}

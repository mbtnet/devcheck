<?php

namespace Mbtnet\Devcheck\Examinators;

use Mbtnet\Devcheck\Examinators\ExamResult;

/**
 * This class exams the access database.
 */
class DatabaseConnection
{
    public function run(): ExamResult
    {
        $results = [];
        $examResult = new ExamResult(self::class, 'Examming database connection', $results);

        return $examResult;
    }
}

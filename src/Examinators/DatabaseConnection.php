<?php

namespace Mbtnet\Devcheck\Examinators;

use Exception;
use Illuminate\Support\Facades\DB;
use Mbtnet\Devcheck\Examinators\ExamResult;

/**
 * This class exams the access database.
 */
class DatabaseConnection implements ExaminatorInterface
{
    public function run(): ExamResult
    {
        $results = [];

        try {
            $databaseConfig = DB::getConfig();

            // Verify host
            if(in_array($databaseConfig['host'], ['127.0.0.1', 'localhost'])) {
                $results[] = 'Using localhost as host is risky. Verify app/database.php.';
            }

            // Verify user name & password
            if(in_array($databaseConfig['username'], ['admin', 'root', 'user'])) {
                $results[] = 'User name value is weak. Don\'t use the default user. Verify app/database.php.';
            }
            if(in_array($databaseConfig['password'], ['', 'admin', 'root', 'user', '123', 'asd123', 'qwerty'])) {
                $results[] = 'Password value is dangerous. Make password long and complicated. Verify app/database.php.';
            }
        } catch (Exception $exception) {
            $results[] = 'Unable to open database config. Verify app/database.php.';
        }

        $examResult = new ExamResult('DB connection', self::class, 'Examming database connection', $results);

        return $examResult;
    }
}

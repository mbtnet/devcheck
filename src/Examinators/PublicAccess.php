<?php

namespace Mbtnet\Devcheck\Examinators;

use Exception;
use Mbtnet\Devcheck\Examinators\ExamResult;
use Illuminate\Support\Facades\Storage as FacadesStorage;

/**
 * This class exams the access to the public directory.
 */
class PublicAccess implements ExaminatorInterface
{
    public function run(): ExamResult
    {
        $results = [];

        try {
            // Check access to the /public directory.
            $pathToImages = public_path('images');
            $pathToCSS = public_path('cs');
            $pathToJS = public_path('js');
            if(!$pathToImages || !$pathToCSS || !$pathToJS) {
                $results[] = 'No path returned for assets (img, css, js). Verify /public directory.';
            }
        } catch (Exception $exception) {
            $results[] = 'No access to the public directory from PHP/framework. Verify access to the /public dir.';
        }

        try {
            // Check the storage input
            $testFileName = 'devcheck_test_' . rand();
            FacadesStorage::put($testFileName, rand());
            FacadesStorage::delete($testFileName);
        } catch (Exception $exception) {
            $results[] = 'No access to the storage directory from PHP/framework. Verify access to the /storage directory.';
        }

        $examResult = new ExamResult(
            'Access to /public & /storage',
            self::class,
            'Examming /public & /storage directory access',
            $results
        );

        return $examResult;
    }
}

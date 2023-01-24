<?php

namespace Mbtnet\Devcheck;

use Mbtnet\Devcheck\Examinators\PublicAccess;
use Mbtnet\Devcheck\Examinators\DatabaseConnection;

class Devcheck {
    public function examine() {
        $examinators = [
            new PublicAccess(),
            new DatabaseConnection(),
        ];

        foreach($examinators as $examinator) {
            $exams[] = $examinator->run();
        }

        return $exams;
    }
}

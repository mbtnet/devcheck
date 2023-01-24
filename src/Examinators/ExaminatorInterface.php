<?php

namespace Mbtnet\Devcheck\Examinators;

interface ExaminatorInterface {
    public function run(): ExamResult;
}

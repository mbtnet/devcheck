<?php
namespace Mbtnet\Devcheck\Controllers;

use Illuminate\Http\Request;
use Mbtnet\Devcheck\Devcheck;

/**
 * Dev check controller that invokes single route (singular responsibility)
 */
class DevcheckController
{
    public function __invoke(Devcheck $devcheck) {
        $examsResults = $devcheck->examine();

        return view('devcheck::index', compact('examsResults'));
    }
}

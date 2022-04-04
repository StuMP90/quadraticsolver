<?php

namespace StuMP90\QuadraticSolver\Model;

use PageController;
use SilverStripe\View\Requirements;
use SilverStripe\View\SSViewer;

class QuadraticSolverPageController extends \PageController {

    public function init() {
        parent::init();

        Requirements::css('stump90/quadraticsolver:css/quadratic-solver.css');

        Requirements::javascript('stump90/quadraticsolver:javascript/quadratic-solver.js', [ 'defer' => true ]);
        
    }

}

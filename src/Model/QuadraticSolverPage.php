<?php

namespace StuMP90\QuadraticSolver\Model;

use SilverStripe\Core\ClassInfo;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\Forms\Tab;
use Silverstripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\ORM\ArrayList;
use SilverStripe\View\Requirements;
use SilverStripe\View\SSViewer;

class QuadraticSolverPage extends \Page {

    private static $icon = 'innoweb/silverstripe-page-icons: client/icons/education.svg';
    private static $description = 'A quadratic equation solver.';
    private static $singular_name = 'Quadratic Solver Page';
    private static $plural_name = 'Quadratic Solver Pages';
    private static $table_name = 'QuadraticSolverPage';

    private static $db = array(
        'Postscript' => "HTMLText"
    );

    public static function requirements() {

        Requirements::css('stump90/quadraticsolver:css/quadratic-solver.css');

        Requirements::javascript('stump90/quadraticsolver:javascript/quadratic-solver.js', [ 'defer' => true ]);

    }

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        // Second Content Block
        $PostscriptHTMLfield = new HTMLEditorField('Postscript', 'Intro');
        $PostscriptHTMLfield->setRows(8);
        $fields->addFieldToTab('Root.Main', $PostscriptHTMLfield, 'Content');
        //$fields->addFieldToTab('Root.Main', $PostscriptHTMLfield);

        return $fields;
    }

}

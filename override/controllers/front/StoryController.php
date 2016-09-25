<?php

/**
 * Class1 short summary.
 *
 * Class1 description.
 *
 * @version 1.0
 * @author chois
 */
class StoryController extends FrontController {

/**
 *  Initialize controller
 *  @see FrontController::init()
 */
public function init() {
    parent::init();
}

/**
 *  Assign template vars related to page content
 *  @see FrontController::initContent()
 */
public function initContent() {
    /*show left/ right columns - will be true and shown by default*/
    $this->display_column_left  = false;
    $this->display_column_right = false;

    parent::initContent();

    $this->setTemplate(_PS_THEME_DIR_.'story.tpl');
}

}
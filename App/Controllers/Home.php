<?php
/*
 * This file contains the C:/TLME/Websites/root/App/Controllers/Home.php class for the TLME Main Website
 *
 * PHP Version: 8.2
 *
 * @author troylmarker
 * @version 1.0
 * @since 2023-4-5
 */

namespace App\Controllers;

use Core\Controller;
use Core\View;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class Home extends Controller {

    /**
     * Home Index Action
     *
     * This action will display the index page
     *
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws LoaderError
     */
    public function indexAction(): void {
        View::render("Home/index.twig");
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace Controller;

use Model\Portfolio;
use Model\PortfolioManager;

/**
 * Class ItemController
 *
 */
class PortfolioController extends AbstractController
{

    /**
     * Display item listing
     *
     * @return string
     */
    public function index()
    {
        $portfolioManager = new PortfolioManager();
        $portfolios = $portfolioManager->selectAll();

        return $this->twig->render('Portfolio/index.html.twig', ['portfolios' => $portfolios]);
    }

}
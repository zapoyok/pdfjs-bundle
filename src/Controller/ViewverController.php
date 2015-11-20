<?php

namespace Zapoyok\PdfJsBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewverController extends Controller
{
    /**
     * @Route(name="zapoyok_pdf_js_viewer", path="view/pdf", options={"expose": true})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('ZapoyokPdfJsBundle::viewver.html.twig');
    }

    /**
     * @Route(name="zapoyok_pdf_js_waiting", path="wait/pdf", options={"expose": true})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function waitAction()
    {
        return $this->render('ZapoyokPdfJsBundle::waiting.html.twig');
    }
}

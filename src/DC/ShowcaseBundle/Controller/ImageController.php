<?php

namespace DC\ShowcaseBundle\Controller;

use \Imagick;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class ImageController extends Controller
{
    public function resizeAction($path,$width)
    {
    	//return new Response('Hello ', 200, array('Content-Type' => 'text/plain'));
    	//Detect if image already generated
    	$newFileName = $_SERVER['DOCUMENT_ROOT'].'/gen/'.$width.$path;
    	$newFileNameShort = '/gen/'.$width.$path;
    	if(file_exists($newFileName))
    		return new Response($newFileNameShort, 200, array('Content-Type' => 'text/plain'));
    	$image = new Imagick($_SERVER['DOCUMENT_ROOT'].$path);
    	$imageprops = $image->getImageGeometry();
    	$scale = $width/$imageprops['width'];
		$image->resizeImage($width,$imageprops['height']*$scale, imagick::FILTER_LANCZOS, 0.9, true);
		$newFilePathInfo = pathinfo($newFileName);
		if(!file_exists($newFilePathInfo['dirname']))
			mkdir($newFilePathInfo['dirname'],0777,true);
		$image->setCompressionQuality(70);
		$image->writeImage($newFileName);
		$image->clear();
		$image->destroy();
        return new Response($newFileNameShort, 200, array('Content-Type' => 'text/plain'));
    }
}
 

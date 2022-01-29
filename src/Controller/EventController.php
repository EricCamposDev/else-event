<?php
	

	namespace App\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\Response;


	class EventController extends AbstractController
	{
		public function index():Response
		{
			return new Response("<h1>Hi</h1>");
		}
	}
?>
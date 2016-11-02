<?php

class IndexController extends Controller
{
	public function indexAction($request)
	{
		$this->render('pages:index');
	}

	public function aboutAction($request)
	{
		$this->render('pages:about');
	}

	public function contactsAction($request)
	{
		$this->render('pages:contacts');
	}

	public function deliveryAction($request)
	{
		$this->render('pages:delivery');
	}
	
	public function paymentAction($request)
	{
		$this->render('pages:payment');
	}
}

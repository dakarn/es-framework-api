<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29.09.2018
 * Time: 22:38
 */

namespace App\Controller\API\V001;

use Http\Response\Response;
use System\Controller\AbstractController;

class ProfileController extends AbstractController
{
	public function saveAction()
	{

	}

	/**
	 * @return \Http\Response\Response
	 */
	public function infoAction(): Response
	{
		return $this->responseApiOK([
			'title' => 'sdsd'
		]);
	}

	public function registerAction()
	{

	}
}
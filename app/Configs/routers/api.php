<?php

use App\MiddlewareApp\MiddlewareCheckAjax;
use Http\Middleware\MiddlewareGrantAccess;
use Models\User\User;

return [
	[
		'name'       => 'api-get',
		'path'       => 'v001/profile/get',
		'controller' => 'Controller:API:V001:ProfileController',
		'action'     => 'info',
		'allow'      => ['GET'],
		'access'      => User::ROLE_USER,
		'middleware' => [MiddlewareGrantAccess::class],
	],
	[
		'name'       => 'api-add',
		'path'       => 'api/add',
		'controller' => 'Controller:Api:V1:ApiController',
		'action'     => 'add',
		'allow'      => ['PUT'],
		'middleware' => [MiddlewareCheckAjax::class],
	],
	[
		'name'       => 'api-update',
		'path'       => 'api/update',
		'controller' => 'Controller:Api:V1:ApiController',
		'action'     => 'update',
		'allow'      => ['POST'],
		'middleware' => [MiddlewareCheckAjax::class],
	],
	[
		'name'       => 'api-delete',
		'path'       => 'api/delete',
		'controller' => 'Controller:Api:V1:ApiController',
		'action'     => 'delete',
		'allow'      => ['DELETE'],
		'middleware' => [MiddlewareCheckAjax::class],
	],
	[
		'name'       => 'search-word-api',
		'path'       => 'api/search-word',
		'controller' => 'Controller:Api:V1:ApiController',
		'action'     => 'searchWord',
		'allow'      => ['POST'],
		'middleware' => [MiddlewareCheckAjax::class],
	],
];
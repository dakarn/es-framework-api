<?

namespace ES\App\Controller\API\V001;

use ES\Kernel\Http\Response\Response;
use ES\Kernel\Models\User\User;
use ES\Kernel\System\Controller\AbstractController;

class ProfileController extends AbstractController
{
	public function saveAction()
	{

	}

	/**
	 * @return Response
	 * @throws \ES\Kernel\Exception\FileException
	 */
	public function infoAction(): Response
	{
		return $this->responseApiOK([
			'title' => User::current()->getLogin()
		]);
	}

	public function registerAction()
	{

	}

	public function createAuthCookieAction(): Response
	{
		$this->response->withCookie('JWT', $this->request->takePost('cookie'));

		return $this->responseApiOK([]);
	}

	public function destroyAuthCookieAction(): Response
	{
		return $this->responseApiOK([]);
	}
}
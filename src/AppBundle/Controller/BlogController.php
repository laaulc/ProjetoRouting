<?php 

	namespace AppBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\Request;

	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

	class BlogController extends Controller {

		/**
		* @Route ("/blog", name="index")
		*/

		public function indexAction(Request $request){

			$nome_user = $request->request->get ('nome_user');
			$email = $request->request->get ('email');
			$senha = $request->request->get ('senha');		

			if ($nome_user == 'laaulc' && $email == 'lau123@lau.com' && $senha == '110799'){
				return $this->redirectToRoute (
					'home_page',
					array ('request' => $request, "nome_user" => $nome_user, "email" => $email, "senha" => $senha),
					307
					);
			}

			return $this->render (
				'blog/index.html.php',
				array()
			);
		}

		/**
		* @Route ("/blog/home", name="home_page")
		*/

		public function homeAction(){

			$request = Request::createFromGlobals ();
			$nome_user = $request->request->get ('nome_user');
			$email = $request->request->get ('email');
			$senha = $request->request->get ('senha');

			return $this->render (
				'blog/home.html.php',
				array('nome_user'=>$nome_user, 'email'=>$email, 'senha'=>$senha)
				);

		}

	}

 ?>
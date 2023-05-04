<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use CodeIgniter\Files\File;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['assets', 'session', 'config', 'formatter'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();

        // #region vérification que le user est connecté avant de le rediriger
            //protected_session(array('', 'login'), array());
        // #endregion
    }

    // #region fonction permettant de charger une vue
        public function render($titre,$view=null, $leftMenu = 'default')
        {   
            if(!empty($view)){
                echo view($this->zone.'/'.$view, array('data' => $this->data, 'titre'=>$titre, 'menu'=>$leftMenu));
            }           
            die;
        }

        function upload_file($name, $location)
		{
			if($_FILES[$name]['name']!='')
			{
				$file = $this->request->getFile($name);
                $new_name = time().str_replace(' ', '', $file->getName());
                $file->move($location, $new_name);
                return $new_name;
			}
            return "";
		}
    // #endregion
}

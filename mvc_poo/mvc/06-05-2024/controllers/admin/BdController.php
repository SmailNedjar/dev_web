<?php
require '../core/Controller.php';
require '../models/BdManager.php';
require '../controllers/admin/PrivateController.php';
class bdController extends PrivateController
{
    private BdManager $bdManager;

    public function __construct()
    {
        parent::__construct();
        $this->bdManager = new BdManager();
    }


    public function index()
    {   
        $resultats = $this->bdManager->getAllBd();
        $this->render('home/bd.html.php',[
            'nombrePageTotal' => $resultats['nombrePageTotal'], 'recordset'=>$resultats['recordset'], 'nbPerPage' => $resultats['nbPerPage']
        ]);

    }


    public function form() {
        $this->render('home/form.html.php');
    }

}
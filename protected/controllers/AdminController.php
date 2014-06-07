<?php

class AdminController extends Controller
{
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' action
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform all actions
				'actions'=>array('create','delete', 'update', 'index', 'dashboard'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionCreate()
	{
		$this->render('create');
	}

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	public function actionIndex()
	{
            $this->menu=array('abc'=>'123');
            $sql = 'SELECT * FROM tbl_stamps';
            $time1=  microtime(true);
            $rawdata = Stamps::model()->findAllBySql($sql);
            $frm= new CNumberFormatter("TH");
            foreach ($rawdata as &$stamp){
                $stamp->price = $frm->formatCurrency($stamp->price,"THB");
            }
            $dataProvider=new CArrayDataProvider($rawdata,array(
                    'sort'=>array(
                    'attributes'=>array(
                    'id')),
                'pagination'=>array(
                    'pageSize'=>10),
                ));
            //$dataProvider=new CActiveDataProvider('Stamps',array('criteria'=>array('order'=>'id DESC')));
            //foreach ($dataprovider as Stamps) {
                
            //};
            $time=microtime(true) - $time1;
            $this->render('index',array(
                    'dataProvider'=>$dataProvider,
		));
	}
        /*
         * function ip_details($ip) {
                $json = file_get_contents("http://ipinfo.io/{$ip}");
                $details = json_decode($json);
                return $details;
            }

            $details = ip_details("8.8.8.8");

            echo $details->city;     // => Mountain View
            echo $details->country;  // => US
            echo $details->org;      // => AS15169 Google Inc.
            echo $details->hostname; // => google-public-dns-a.google.com
         */
	public function actionInit()
	{
		$this->render('init');
	}

	public function actionUpdate($id='')
	{
		$this->render('update');
	}
        public function actionDashboard()
        {
            $this->render('dashboard');
        }
        public function loadModel($id)
        {
		$model=Stamps::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
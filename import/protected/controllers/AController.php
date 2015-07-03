<?php

include('excel_reader2.php');

class AController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('allow', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new A;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['A'])) {
            $model->attributes = $_POST['A'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['A'])) {
            $model->attributes = $_POST['A'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('A');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new A('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['A']))
            $model->attributes = $_GET['A'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return A the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = A::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param A $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'a-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /* public function actionExcel() {
      // include('excel_reader2.php');
      $model = new A;
      if (isset($_POST['A'])) {
      $model->attributes = $_POST['A'];
      $filename = CUploadedFile::getInstance($model, 'filee');
      $path= '/../coba1.xls';
      // $filename->saveAs(Yii::app()->basePath . '/../controller/coba1.xls');
      $filename->saveAs($path);
      $data = new Spreadsheet_Excel_Reader($path);
      $id = array();
      $nama = array();

      for ($j = 2; $j <= $data->sheets[0]['numRows']; $j++) {
      $id[$j] = $data->sheets[0]['cells'][$j][1];
      $nama[$j] = $data->sheets[0]['cells'][$j][2];
      }

      for ($i = 0; $i < count($id); $i++) {
      $model = new CobaExcel;

      $model->id = $id[$i];
      $model->nama = $keg[$i];
      $model->save();
      }
      //unlink($path);
      $this->redirect(array('index'));
      }
      $this->render('excel', array('model' => $model));
      } */

    public function actionImport() {
        $model = new A();
        if (isset($_POST['A'])) {
            Yii::import('ext.phpexcelreader.excel_reader2', true);
            $model->attributes = $_POST['A'];
            $import = CUploadedFile::getInstance($model, 'filee');
            if ($import == null) {
                Yii::app()->user->setFlash('error', 'File Kosong');
                $this->redirect(array(''));
            } else {
                $import->saveAs('coba/' . $import);
            }

            if ($import->type == "application/ynd.ms.excel") {
                $data = new Spreadsheet_Excel_Reader('/../controller/coba1.xls/');
                echo $data->dump(true, true);
                $id = array();
                $nama = array();

                for ($j = 2; $j <= $data->rowcount(); $j++) {
                    if (empty($data->sheets[0]['cells'][$j][1]) || empty($data->sheets[0]['cells'][$j][2])) {
                        Yii::app()->user->setFlash('error', 'Data Gagal di Import (File excel harus diisi semua)');
                        $id[$j] = null;
                        $nama[$j] = null;
                    } else {
                        $id[$j] = $data->sheets[0]['cells'][$j][1];
                        $nama[$j] = $data->sheets[0]['cells'][$j][2];
                    }
                }
                $niki = $data->rowcount(0);
                for ($i = 1; $i < $niki; $i++) {
                    $model = new A();
                    $model->id = $id[$i];
                    $model->nama = $nama[$i];
                    $model2 = A::model()->findByPk($id[$i]);
                    if ($model2 != null) {
                        Yii::app()->user->setFlash('error', 'Data Gagal di Import (NIDN sudah ada sebelumnya)');
                        $this->redirect(array('import'));
                    } else {
                        $model->save();
                    }
                }
                $this->redirect(array('index'));
            } else {
                Yii::app()->user->setFlash('error', 'Format file tidak dikenali (format file harus .xls)');
                $this->redirect(array('import'));
            }
        }
        $this->render('import', array(
            'model' => $model,
        ));

        /* $model = new A();
          if (isset($_POST['A'])) {
          $model->attributes = $_POST['A'];
          $itu = CUploadedFile::getInstance($model, 'filee');
          $path = 'coba1.xls';
          //$itu->saveAs($path);
          $data = new Spreadsheet_Excel_Reader('coba1.xls');
         
          }*/ 
    }

    public function actionExport() {
        $model = new A;
        //$model->attributes = $_POST['A'];
        $this->widget('ext.EExcelView', array(
            'title' => 'Coba',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'grid_mode' => 'export',
            'columns' => array(
                'id',
                'nama',
            ),
        ));
    }
    

}

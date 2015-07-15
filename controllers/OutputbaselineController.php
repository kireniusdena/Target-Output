<?php

namespace kemdikbud\to\controllers;

use Yii;
use kemdikbud\to\models\Model;
use yii\data\ActiveDataProvider;
use kemdikbud\to\models\Baseline;
use kemdikbud\to\models\Outputbaseline;
use kemdikbud\to\models\OutputbaselineSearch;
use kemdikbud\to\models\Templatetable;
use kemdikbud\to\models\To220150713110605;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OutputbaselineController implements the CRUD actions for Outputbaseline model.
 */
class OutputbaselineController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Outputbaseline models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OutputbaselineSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionViewoutput($id){

        $datawiki           = Outputbaseline::findOne(['id_base_line' => $id]);
        $data               = Baseline::findOne(['id' => $id]);
        $class_name         = '\kemdikbud\to\models\\'.ucfirst(str_replace(['_'], [''], $datawiki->nama_tabel));
        
        $dataProvider = new ActiveDataProvider([
            'query' => $class_name::find(),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('viewoutput', [
            'data' => $data,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionInsertoutput($id){

        $datawiki           = Outputbaseline::findOne(['id_base_line' => $id]);
        $data               = Baseline::findOne(['id' => $id]);
        $class_name         = '\kemdikbud\to\models\\'.ucfirst(str_replace(['_'], [''], $datawiki->nama_tabel));
        $model              = new $class_name();

        $dataProvider = new ActiveDataProvider([
            'query' => $class_name::find(),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['viewoutput', 'id' => $id, 'dataProvider' => $dataProvider, 'data' => $data]);
        } else {
            return $this->render('_insertoutput', [
                'datawiki' => $datawiki,
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays a single Outputbaseline model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Outputbaseline model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model          = new Outputbaseline();
        $template       = [new Templatetable()];

        if (Yii::$app->request->post()) {

            /* Template Table */

            $template                   = Model::createMultiple(Templatetable::classname());
            Model::loadMultiple($template, Yii::$app->request->post());

            $string_sql                 = '';
            $nama_kolom                 = [];
            $string_integer             = '';
            $string_string              = '';

            /* Format table_name = id_base_line_date_created */
            $string_sql                 .= '
                CREATE TABLE to_'.$_POST['Outputbaseline']['id_base_line'].'_'.date('Y_m_d_h_i_s').' (
                   id serial,
            ';
            
            foreach ($template as $tmp) {

                $type                   = '';
                
                if ($tmp->column_type == 0) {
                    $type               = 'character varying';
                    $string_string      .= strtolower(str_replace([' '], [''], $tmp->column_name)) . ',';
                }elseif ($tmp->column_type == 1) {
                    $type               = 'integer';
                    $string_integer     .= strtolower(str_replace([' '], [''], $tmp->column_name)) . ',';
                }
                
                $nama_kolom[strtolower(str_replace([' '], [''], $tmp->column_name))]     = $tmp->column_name;

                $string_sql             .=  strtolower(str_replace([' '], [''], $tmp->column_name)) . ' ' . $type . ',';
            }

            $string_sql                 .= '
                   PRIMARY KEY( id )
                );
            ';

            /* Template Table */

            /* Tempalte Model */

            //$script_model               = '';

            $table_name                 = 'To'.$_POST['Outputbaseline']['id_base_line'].''.date('Ymdhis');

            $script_model               = "<?php

namespace kemdikbud\\to\models;

use Yii;

/**
 * This is the model class for table \"to_2_2015_07_13_11_06_05\".
 *
 */
class ".$table_name." extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'to_".$_POST['Outputbaseline']['id_base_line'].'_'.date('Y_m_d_h_i_s')."';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no'], 'integer'],
            [['uraian', 'keterangan'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return ".str_replace(['{', ':', '}'], ['[', '=>', ']'], json_encode($nama_kolom)).";
    }
}
            ";
            
            $fp                         = fopen(Yii::getAlias('@vendor/kemdikbud/yii2-target-output/models/') . $table_name . '.php','w');
            fwrite($fp, $script_model);
            fclose($fp);
            /* Template Model */

            /* Save Model */

            $datenow                    = date('Y-m-d h:i:s');

            $model->id_base_line        = $_POST['Outputbaseline']['id_base_line'];
            $model->nama_tabel          = 'to_'.$_POST['Outputbaseline']['id_base_line'].'_'.date('Y_m_d_h_i_s');
            $model->nama_kolom_array    = str_replace(['{', ':', '}'], ['[', '=>', ']'], json_encode($nama_kolom));
            $model->nama_kolom_json     = json_encode($nama_kolom);
            $model->nama_class          = $table_name;
            $model->date_created        = $datenow;
            //$model->id_user_created     = $_POST['Outputbaseline']['id_base_line'];
            //$model->date_updated        = $_POST['Outputbaseline']['id_base_line'];
            //$model->id_user_updated     = $_POST['Outputbaseline']['id_base_line'];
            $model->approved            = false;
            //$model->date_approved       = $_POST['Outputbaseline']['id_base_line'];

            /* Save Model */

            if ($model->save()) {
                Yii::$app->db->createCommand($string_sql)->execute();
                return $this->redirect(['viewoutput', 'id' => $model->id_base_line]);
            }else{
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

            
        } else {
            return $this->render('create', [
                'model' => $model,
                'template' => (empty($template)) ? [new Templatetable] : $template
            ]);
        }
    }

    /**
     * Updates an existing Outputbaseline model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Outputbaseline model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Outputbaseline model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Outputbaseline the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Outputbaseline::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

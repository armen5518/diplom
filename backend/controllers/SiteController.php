<?php
namespace backend\controllers;

use backend\models\RegisterAdminOrganization;
use common\helpers\Helper;
use common\models\Event;
use common\models\LoginForm;
use backend\models\RegisterOrganization;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['login', 'error'],
//                        'allow' => true,
//                    ],
//                    [
//                        'actions' => ['logout', 'index'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $models = new Event();
        $models = $models->find()->all();
        $events = [];
        if(!empty($models)) {
            foreach ($models as $model) {


                $Event = new \yii2fullcalendar\models\Event();
                $Event->id = $model->id;
                $Event->title = $model->title;
                $Event->start = $model->start;
                $Event->description = $model->description;
                $Event->allDay = $model->allDay;
                $Event->start = $model->start;
                $Event->end = $model->end;
                $Event->ranges = $model->ranges;
                $Event->dow = $model->dow;
                $Event->url = Yii::$app->params['domain'].'/event/view?id='.$model->id;
                $Event->className = $model->className;
                $Event->editable = $model->editable;
                $Event->startEditable = $model->startEditable;
                $Event->durationEditable = $model->durationEditable;
                $Event->source = $model->source;
                $Event->color = $model->color;
                $Event->backgroundColor = $model->backgroundColor;
                $Event->borderColor = $model->borderColor;
                $Event->textColor = $model->textColor;

                $events[] = $Event;
            }
        }
//        Helper::out($models);
        return $this->render('index', [
            'events' => $events
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionLogout1()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionRegisterOrganization()
    {
        $model = new RegisterOrganization();
        return $this->render('register-organization',[
            'model' => $model
        ]);
    }

    public function actionRegisterAdminOrganization()
    {
        $model = new RegisterAdminOrganization();
        return $this->render('register-admin-organization',[
            'model' => $model
        ]);
    }
}

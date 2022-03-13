<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Problem;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $problems = Problem::find()->where(['status'=>'Оформлен'])->orderBy(['timestamp'=>SORT_DESC])->limit(4)->all();
        return $this->render('index', ['problems'=>$problems,]);
    }

    public function actionDone()
    {
        $problems = Problem::find()->where(['status'=>'Оформлен'])->orderBy(['timestamp'=>SORT_DESC])->all();
        return Yii::$app->response->content=count($problems);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionCatalog()
    {
        return $this->render('catalog');
    }

    public function actionBombbarwheyprotein()
    {
        return $this->render('bombbarwheyprotein');
    }

    public function actionMilkyshakewhey()
    {
        return $this->render('milkyshakewhey');
    }

    public function actionCybermasswhey()
    {
        return $this->render('cybermasswhey');
    }

    public function actionCybermasscasein()
    {
        return $this->render('cybermasscasein');
    }

    public function actionCybermassmultiprotein()
    {
        return $this->render('cybermassmultiprotein');
    }

    public function actionCybermasssoyprotein()
    {
        return $this->render('cybermasssoyprotein');
    }

    public function actionGeneticlabcaseinpro()
    {
        return $this->render('geneticlabcaseinpro');
    }

    public function actionInnovativehellfire()
    {
        return $this->render('innovativehellfire');
    }

    public function actionMyproteincla()
    {
        return $this->render('myproteincla');
    }

    public function actionNutrexlipo()
    {
        return $this->render('nutrexlipo');
    }

    public function actionEpiclabs()
    {
        return $this->render('epiclabs');
    }

    public function actionCybermassgainer()
    {
        return $this->render('cybermassgainer');
    }

    public function actionHoffmantop()
    {
        return $this->render('hoffmantop');
    }

    public function actionKevinlevrone()
    {
        return $this->render('kevinlevrone');
    }

    public function actionMaxlermega()
    {
        return $this->render('maxlermega');
    }

    public function actionNutriversumgainer()
    {
        return $this->render('nutriversumgainer');
    }

    public function actionBiotech()
    {
        return $this->render('biotech');
    }

    public function actionCitrulinemalate()
    {
        return $this->render('citrulinemalate');
    }

    public function actionAminopower()
    {
        return $this->render('aminopower');
    }

    public function actionXplode()
    {
        return $this->render('xplode');
    }

    public function actionStatiapro()
    {
        return $this->render('statiapro');
    }

    public function actionAtlecsshock()
    {
        return $this->render('atlecsshock');
    }

    public function actionWorkliquid()
    {
        return $this->render('workliquid');
    }

    public function actionStatiazoh()
    {
        return $this->render('statiazoh');
    }

   
}

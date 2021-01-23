<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Curso;
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\DetailView;


$this->title = 'Cursos';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="features_items">
	<h2 class="p-2 btn-success text-center">CURSOS</h2>


 <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
            	<img height="150" width="322" src="/img/quimica.jpg" alt="" />
                <h2>Química</h2>
                <p><b>Sesión:</b> Matutino </p>
                <p><b>Hora:</b> 13:00 p.m. </p>
                <p><b>Asesor:</b> Hesiquio Zarate Landa </p>
                <p><a class="btn btn-success" href="http://www.yiiframework.com/doc/">Comunicarme &raquo;</a></p>
            </div>

            <div class="col-lg-4">
            	<img height="150" width="322" src="/img/fisica.jpg" alt="" />
                <h2>Física</h2>
                <p><b>Sesión:</b> Matutino </p>
                <p><b>Hora:</b> 13:00 p.m. </p>
                <p><b>Asesor:</b> Hesiquio Zarate Landa </p>

                <p><a class="btn btn-success" href="http://www.yiiframework.com/doc/">Comunicarme &raquo;</a></p>
            </div>


            <div class="col-lg-4">
            	<img height="150" width="322" src="/img/matematicas.jpg" alt="" />
                <h2>Matemáticas</h2>
                <p><b>Sesión:</b> Matutino </p>
                <p><b>Hora:</b> 13:00 p.m. </p>
                <p><b>Asesor:</b> Hesiquio Zarate Landa </p>

                <p><a class="btn btn-success" href="http://www.yiiframework.com/doc/">Comunicarme &raquo;</a></p>
            </div>

 
       		<div class="col-lg-4" class="border border-primary">
            	<img height="150" width="322" src="/img/mecatronica.jpg" alt=""/>
                <h2>Mecatronica</h2>
                <p><b>Sesión:</b> Matutino </p>
                <p><b>Hora:</b> 13:00 p.m. </p>
                <p><b>Asesor:</b> Hesiquio Zarate Landa</p>

                <p><a class="btn btn-success" href="http://www.yiiframework.com/doc/">Comunicarme &raquo;</a></p>
            </div>

        </div>

    </div>
</div>

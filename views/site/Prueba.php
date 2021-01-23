<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>


<?php $f = ActiveForm::begin([
	"method" => "get",
	"action" => Url::toRoute("site/Prueba"),
	"enableClientValidation" => true,
]);
?>

<div class="form-group">
	<?= $f->field($form, "q")->input("search") ?>
</div>

<?php Html::submitButton("Buscar", ["class" => "btn btn-primary"]) ?>
<?php $f->end() ?>
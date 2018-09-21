<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Busqueda';
?>
<h1>Buscar Categoria</h1>

<div class="body-content">
  <div class="row">
    <div class="collapse in">
      <section class="row">
        <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
      </section>
    </div>
  </div>
</div>

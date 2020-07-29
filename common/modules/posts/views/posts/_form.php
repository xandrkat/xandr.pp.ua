<?php

use dosamigos\tinymce\TinyMce;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\posts\models\Posts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body')->widget(TinyMce::className(), [
        'options' => ['rows' => 15],
        'language' => 'ru',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern noneditable"
            ],
            'image_advtab' => true,
            'image_title' => true,
            'automatic_uploads' => true,
            'images_upload_url' => '../postAcceptor.php',//way to file with images uploads routes
            'images_reuse_filename' => true,
            'file_picker_types' => 'image',
            /*'content_css' => 'https://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',*/
            'noneditable_noneditable_class' => 'fa',
            'extended_valid_elements' => 'i[*]',

            'toolbar' => [
                "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                "print preview media | forecolor backcolor emoticons"
            ],
            'file_picker_callback' => new yii\web\JsExpression("function(cb, value, meta) {
					var input = document.createElement('input');
					input.setAttribute('type', 'file');
					input.setAttribute('accept', 'image/*');

					input.onchange = function() {
					  var file = this.files[0];
					  
					  var reader = new FileReader();
					  reader.readAsDataURL(file);
					  reader.onload = function () {
						
						var id = 'blobid' + (new Date()).getTime();
						var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
						var base64 = reader.result.split(',')[1];
						var blobInfo = blobCache.create(id, file, base64);
						blobCache.add(blobInfo);

						cb(blobInfo.blobUri(), { title: file.name });
					  };
					};
					
					input.click();
				  }"),
        ]
    ]) ?>

    <?= $form->field($model, 'status')->dropDownList($model->getStatusesArray()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

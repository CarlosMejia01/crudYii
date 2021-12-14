<?php
#http://localhost/crudYii/hola/index
class HolaController extends Controller {

    public function actionIndex() {
        $model=Users::model()->findAll();
        $twitter="@ejemplo.com";
         $this->render("index", array("model"=> $model, "twitter"=> $twitter));
    }


}


?>
<?php

class BaseController {

    const VIEW_FOLDER = 'Views';
    const MODEL_FOLDER = 'Models';

    /** 
     * Des: 
     * + path name: folderName.fileName
     * + Lấy từ sau thư mục View
    */
    protected function view($viewPath, $data = []) {

        foreach ($data as $key => $value) {
            //$$ = Khai báo biến + key
            $$key = $value;
        }
        
        return require (self::VIEW_FOLDER . '/' . str_replace(".",'/',$viewPath) . '.php');
        
    }

    protected function loadModel($modelPath) {

        return require (self::MODEL_FOLDER . '/' . $modelPath . '.php');

    }

   

}


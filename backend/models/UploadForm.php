<?php


namespace backend\models;


use yii\base\Model;

class UploadForm extends Model
{
    public $imageFile;

    public $filename;

    public $path;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->path = \Yii::getAlias('@backend') . '/web/uploads/';
            if (!is_dir($this->path)) {
                mkdir($this->path, 0775);
            }
            $this->filename = $this->imageFile->name;
            $this->path .= $this->filename;
            $this->imageFile->saveAs($this->path);
//            $this->imageFile->saveAs('uploads/' . $this->imageFile->name . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }

//    public function getFullPath(){
//        return $this->path . DIRECTORY_SEPARATOR . $this->filename;
//    }

}
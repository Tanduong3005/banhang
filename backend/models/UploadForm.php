<?php


namespace backend\models;


use yii\base\Model;

class UploadForm extends Model
{
    public $avatar;

    public $path;

    public function rules()
    {
        return [
            [['avatar'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->path = \Yii::getAlias('@backend') . '/web/uploads/';
            if (!is_dir($this->path)) {
                mkdir($this->path, 0775);
            }
           $avatarName = $this->avatar->name;
            $this->path .= $avatarName;
            $this->avatar->saveAs($this->path);
//            $this->avatar->saveAs('uploads/' . $this->avatar->name . '.' . $this->avatar->extension);
            return $this->path;
        } else {
            return "";
        }
    }

//    public function getFullPath(){
//        return $this->path . DIRECTORY_SEPARATOR . $this->filename;
//    }

}
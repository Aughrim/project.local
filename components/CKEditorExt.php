<?php
/**
 * Created by PhpStorm.
 * User: BATPYIIIKOB
 * Date: 28.08.2016
 * Time: 15:52
 */

namespace app\components;

use yii\helpers\ArrayHelper;
use iutbay\yii2kcfinder\KCFinderAsset;

class CKEditorExt extends \dosamigos\ckeditor\CKEditor
{

    public $enableKCFinder = true;

    /**
     * Registers CKEditor plugin
     */
    protected function registerPlugin()
    {
        if ($this->enableKCFinder)
        {
            $this->registerKCFinder();
        }

        parent::registerPlugin();
    }

    /**
     * Registers KCFinder
     */
    protected function registerKCFinder()
    {
        $register = KCFinderAsset::register($this->view);
        $kcfinderUrl = $register->baseUrl;

        $browseOptions = [
            'filebrowserBrowseUrl' => $kcfinderUrl . '/browse.php?opener=ckeditor&type=files',
            'filebrowserUploadUrl' => $kcfinderUrl . '/upload.php?opener=ckeditor&type=files',
        ];

        $this->clientOptions = ArrayHelper::merge($browseOptions, $this->clientOptions);
    }

}
<?php

namespace yii2mod\cms;

/**
 * Class Module
 *
 * @package yii2mod\cms
 */
class Module extends \yii\base\Module
{
    /**
     * @var string the namespace that controller classes are in
     */
    public $controllerNamespace = 'yii2mod\cms\controllers';

    /**
     * @var string the default route of this module
     */
    public $defaultRoute = 'manage';

    /**
     * @var array froala editor options
     *
     * @see https://www.froala.com/wysiwyg-editor/docs
     */
    public $froalaEditorOptions = [
        'clientOptions' => [
            'heightMin' => 300,
            'theme' => 'gray',
            'imageUploadURL' => '/cms/manage/upload-image',
            'imageManagerDeleteURL' => '/cms/manage/delete-image',
            'imageManagerDeleteMethod' => 'POST',
            'imageManagerLoadURL' => '/cms/manage/images',
        ],
        'excludedPlugins' => [
            'file',
            'emoticons',
        ],
    ];

    /**
     * @var bool whether to enable the markdown editor and markdown converter
     */
    public $enableMarkdown = false;

    /**
     * @var array markdown editor options
     *
     * @see https://github.com/NextStepWebs/simplemde-markdown-editor#configuration
     */
    public $markdownEditorOptions = [
        'showIcons' => ['code', 'table'],
    ];
}

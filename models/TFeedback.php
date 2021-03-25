<?php

namespace app\models;

use Yii;
use kartik\date\DatePicker;
use yii\helpers\Url;
/**
 * This is the model class for table "tFeedback".
 *
 * @property int $id
 * @property date $date
 * @property string $login
 * @property string $text
 *
 */
class TFeedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tFeedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['date', 'default', 'value' => 	date('Y-m-d H:i:s')],
            ['login', 'default', 'value' => 'Гость'],
            ['login', function ($attribute, $params)
            {
                if (preg_match('/href|url|http|www|.ru|.com|.net|.info|.org/i', $this->login)) 
                {
                    $this->addError($attribute, 'Логин не может быть ссылкой!!!');
                }
            }
        ],
            ['text', function ($attribute, $params)
            {
                if (preg_match('/href|url|http|www|.ru|.com|.net|.info|.org/i', $this->text)) 
                {
                    $this->addError($attribute, 'В отзывах нельзя использовать ссылки и тэги!!!');
                }
            }
        ],
        ];
    }

    /*public function myvalidator($attribute)
        {
            return 'bnvjhafbvh';
            $pattern = '/href|url|http|www|.ru|.com|.net|.info|.org/i';
            if (preg_match($pattern , $this->text)) 
            {
                $this->addError($attribute, 'В отзывах нельзя использовать ссылки и тэги!!!');
            }
        }*/
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'date' => Yii::t('app', 'Дата'),
            'login' => Yii::t('app', 'Никнейм'),
            'text' => Yii::t('app', 'Текст отзыва')
        ];
    }


    
    /**
     * @return \yii\db\ActiveQuery
     */
}

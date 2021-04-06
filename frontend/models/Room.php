<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property string $Name
 * @property string $Quality
 * @property int $Quantity
 * @property int $Bed
 * @property int $Room
 * @property string|null $View
 * @property int $Balcony
 * @property string|null $Else
 * @property string $Img
 * @property int $Id
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Quality', 'Quantity', 'Bed', 'Room', 'Balcony', 'Img'], 'required'],
            [['Quantity', 'Bed', 'Room', 'Balcony'], 'integer'],
            [['Else'], 'string'],
            [['Name', 'Quality'], 'string', 'max' => 256],
            [['View', 'Img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Name' => Yii::t('app', 'Name'),
            'Quality' => Yii::t('app', 'Quality'),
            'Quantity' => Yii::t('app', 'Quantity'),
            'Bed' => Yii::t('app', 'Bed'),
            'Room' => Yii::t('app', 'Room'),
            'View' => Yii::t('app', 'View'),
            'Balcony' => Yii::t('app', 'Balcony'),
            'Else' => Yii::t('app', 'Else'),
            'Img' => Yii::t('app', 'Img'),
            'Id' => Yii::t('app', 'ID'),
        ];
    }
}

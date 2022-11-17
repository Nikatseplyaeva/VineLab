<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string|null $title
 * @property string $rating
 * @property string $color
 * @property string $sweet
 * @property string $country
 * @property string $type
 * @property string $degree
 * @property string $after_taste
 * @property string $snack
 * @property string $price
 * @property string $image
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title', 'rating', 'color', 'sweet', 'country', 'type', 'degree', 'after_taste', 'snack', 'price', 'image'], 'string', 'max' => 255],
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->image->saveAs('uploads/' . $this->image->dbName . '.' . $this->image->extension);
            return true;
        } else {
            return false;
        }
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'rating' => Yii::t('app', 'Rating'),
            'color' => Yii::t('app', 'Color'),
            'sweet' => Yii::t('app', 'Sweet'),
            'country' => Yii::t('app', 'Country'),
            'type' => Yii::t('app', 'Type'),
            'degree' => Yii::t('app', 'Degree'),
            'after_taste' => Yii::t('app', 'After Taste'),
            'snack' => Yii::t('app', 'Snack'),
            'price' => Yii::t('app', 'Price'),
            'image' => Yii::t('app', 'Image'),
        ];
    }
}

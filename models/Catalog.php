<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "catalog".
 *
 * @property int $id
 * @property string $title
 * @property string $desc
 * @property float $price
 * @property int|null $discount
 * @property int $genres
 */
class Catalog extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'desc', 'price', 'genres'], 'required'],
            [['desc'], 'string'],
            [['price'], 'number'],
            [['discount', 'genres'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'desc' => 'Описание',
            'price' => 'Цена',
            'discount' => 'Скидка',
            'genres' => 'Жанр',
        ];
    }
}

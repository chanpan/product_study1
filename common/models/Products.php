<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property string $pro_id
 * @property string $pro_name
 * @property string $pro_detail
 * @property int $pro_price
 * @property int $created_by
 * @property string $created_date
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pro_id', 'pro_name', 'pro_detail', 'pro_price'], 'required'],
            [['pro_detail'], 'string'],
            [['pro_price', 'created_by'], 'integer'],
            [['created_date'], 'safe'],
            [['pro_id'], 'string', 'max' => 50],
            [['pro_name'], 'string', 'max' => 100],
            [['pro_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pro_id' => 'Pro ID',
            'pro_name' => 'Pro Name',
            'pro_detail' => 'Pro Detail',
            'pro_price' => 'Pro Price',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
        ];
    }
}

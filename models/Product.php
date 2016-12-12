<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $product_id
 * @property string $product_name
 * @property integer $customer_id
 * @property integer $group_id
 * @property integer $packing
 * @property integer $price
 * @property integer $payment
 * @property string $unit
 * @property string $remark
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_name', 'unit', 'remark'], 'string'],
            [['customer_id', 'group_id', 'packing', 'price', 'payment'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_name' => 'Product Name',
            'customer_id' => 'Customer ID',
            'group_id' => 'Group ID',
            'packing' => 'Packing',
            'price' => 'Price',
            'payment' => 'Payment',
            'unit' => 'Unit',
            'remark' => 'Remark',
        ];
    }
}

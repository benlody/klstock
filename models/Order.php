<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $order_id
 * @property string $order_number
 * @property string $order_number2
 * @property string $order_date
 * @property string $send_date
 * @property integer $product_id
 * @property integer $address_id
 * @property integer $qty
 * @property integer $status
 * @property string $remark
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_number', 'order_number2', 'remark'], 'string'],
            [['order_date', 'send_date'], 'safe'],
            [['product_id', 'address_id', 'qty', 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_number' => 'Order Number',
            'order_number2' => 'Order Number2',
            'order_date' => 'Order Date',
            'send_date' => 'Send Date',
            'product_id' => 'Product ID',
            'address_id' => 'Address ID',
            'qty' => 'Qty',
            'status' => 'Status',
            'remark' => 'Remark',
        ];
    }
}

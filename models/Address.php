<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property integer $address_id
 * @property integer $customer_id
 * @property string $contact
 * @property string $tel
 * @property string $address
 * @property string $company_name
 * @property string $remark
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id'], 'integer'],
            [['contact', 'tel', 'address', 'company_name', 'remark'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'address_id' => 'Address ID',
            'customer_id' => 'Customer ID',
            'contact' => 'Contact',
            'tel' => 'Tel',
            'address' => 'Address',
            'company_name' => 'Company Name',
            'remark' => 'Remark',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vehicles".
 *
 * @property string $id
 * @property string $organization_id
 * @property string $vin
 * @property string $make
 * @property string $model
 * @property string $reg_no
 * @property string $first_reg
 * @property string $created_at
 * @property string $updated_at
 */
class Vehicle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehicles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at'], 'required'],
            [['id', 'organization_id'], 'string'],
            [['first_reg', 'created_at', 'updated_at'], 'safe'],
            [['vin', 'make', 'model', 'reg_no'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'organization_id' => Yii::t('app', 'Organization ID'),
            'vin' => Yii::t('app', 'Vin'),
            'make' => Yii::t('app', 'Make'),
            'model' => Yii::t('app', 'Model'),
            'reg_no' => Yii::t('app', 'Reg No'),
            'first_reg' => Yii::t('app', 'First Reg'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}

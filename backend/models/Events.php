<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property string $title
 * @property string $start_data
 * @property string $end_date
 * @property string $location
 * @property string $sub_title
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_data', 'end_date'], 'safe'],
            [['title'], 'string', 'max' => 512],
            [['location'], 'string', 'max' => 32],
            [['sub_title'], 'string', 'max' => 1024]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'start_data' => 'Start Data',
            'end_date' => 'End Date',
            'location' => 'Location',
            'sub_title' => 'Sub Title',
        ];
    }
}

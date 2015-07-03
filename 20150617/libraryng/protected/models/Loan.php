<?php

/**
 * This is the model class for table "loan".
 *
 * The followings are the available columns in table 'loan':
 * @property string $id
 * @property string $borrower_id
 * @property string $staff_id
 * @property string $copy_id
 * @property string $start_date
 * @property string $due_date
 * @property double $fines
 *
 * The followings are the available model relations:
 * @property Member $borrower
 * @property BookCopy $copy
 * @property Member $staff
 */
class Loan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'loan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('borrower_id, staff_id, copy_id, start_date', 'required'),
			array('fines', 'numerical'),
			array('borrower_id, staff_id, copy_id', 'length', 'max'=>10),
			array('due_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, borrower_id, staff_id, copy_id, start_date, due_date, fines', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'borrower' => array(self::BELONGS_TO, 'Member', 'borrower_id'),
			'copy' => array(self::BELONGS_TO, 'BookCopy', 'copy_id'),
			'staff' => array(self::BELONGS_TO, 'Member', 'staff_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'borrower_id' => 'Borrower',
			'staff_id' => 'Staff',
			'copy_id' => 'Copy',
			'start_date' => 'Start Date',
			'due_date' => 'Due Date',
			'fines' => 'Fines',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('borrower_id',$this->borrower_id,true);
		$criteria->compare('staff_id',$this->staff_id,true);
		$criteria->compare('copy_id',$this->copy_id,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('fines',$this->fines);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Loan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

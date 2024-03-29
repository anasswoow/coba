<?php

/**
 * This is the model class for table "book_copy".
 *
 * The followings are the available columns in table 'book_copy':
 * @property string $id
 * @property string $book_id
 * @property string $call_number
 * @property string $year
 * @property integer $availability
 * @property integer $loanable
 *
 * The followings are the available model relations:
 * @property Book $book
 * @property Loan[] $loans
 */
class BookCopy extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'book_copy';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('book_id, call_number', 'required'),
			array('availability, loanable', 'numerical', 'integerOnly'=>true),
			array('book_id', 'length', 'max'=>10),
			array('call_number', 'length', 'max'=>16),
			array('year', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, book_id, call_number, year, availability, loanable', 'safe', 'on'=>'search'),
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
			'book' => array(self::BELONGS_TO, 'Book', 'book_id'),
			'loans' => array(self::HAS_MANY, 'Loan', 'copy_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'book_id' => 'Book',
			'call_number' => 'Call Number',
			'year' => 'Year',
			'availability' => 'Availability',
			'loanable' => 'Loanable',
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
		$criteria->compare('book_id',$this->book_id,true);
		$criteria->compare('call_number',$this->call_number,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('availability',$this->availability);
		$criteria->compare('loanable',$this->loanable);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BookCopy the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

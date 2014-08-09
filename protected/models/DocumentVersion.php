<?php

/**
 * This is the model class for table "documents_versions".
 *
 * The followings are the available columns in table 'documents_versions':
 * @property integer $id
 * @property integer $document_id
 * @property string $name
 * @property integer $user_id
 * @property string $file
 */
class DocumentVersion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'documents_versions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('document_id, user_id', 'numerical', 'integerOnly'=>true),
			array('name, file', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, document_id, name, user_id, file', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'document_id' => 'Document',
			'name' => 'Name',
			'user_id' => 'User',
			'file' => 'File',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('document_id',$this->document_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('file',$this->file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DocumentVersion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

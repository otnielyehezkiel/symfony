<?php


/**
 * This class defines the structure of the 'material' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 03/31/16 03:20:02
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class MaterialTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.MaterialTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('material');
		$this->setPhpName('Material');
		$this->setClassname('Material');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('MATNR', 'Matnr', 'VARCHAR', false, 20, null);
		$this->addColumn('MTART', 'Mtart', 'VARCHAR', false, 4, null);
		$this->addColumn('MBRSH', 'Mbrsh', 'VARCHAR', false, 255, null);
		$this->addColumn('MAKTX', 'Maktx', 'VARCHAR', false, 255, null);
		$this->addColumn('MEINS', 'Meins', 'VARCHAR', false, 3, null);
		$this->addColumn('MATKL', 'Matkl', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // MaterialTableMap
<?php
/**
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @package		JoomlaFramework
 */

//Complusoft JoomlaTeam - Support: JoomlaTeam@Complusoft.es
require_once JPATH_BASE.'/libraries/joomla/access/access.php';
require_once JPATH_BASE.'/tests/unit/JoomlaDatabaseTestCase.php';
/**
 * Test class for JAccess.
 * Generated by PHPUnit on 2009-10-08 at 11:50:03.
 * @package		JoomlaFramework
 */

class JAccessTest extends JoomlaDatabaseTestCase {
	/**
	 * @var		JAccess
	 * @access	protected
	 */
	protected $object;
	var $have_db = false;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @access protected
	 */
	protected function setUp() {
		// Need to run parent::setUP() to load date from test.xml
		// Note: This class does not write to the DB, so we only run parent::setup() once in the first test class to save time
		$this->object = new JAccess;
	}

	public function testGetActions() {
		$access = new JAccess();
		$array1 = array(
			'name'	      => "core.admin",
                        'title'       => "JACTION_ADMIN",
                        'description' => "JACTION_ADMIN_COMPONENT_DESC"
                        );
                        $array2 = array(
			'name'	      => "core.manage",
                        'title'       => "JACTION_MANAGE",
                        'description' => "JACTION_MANAGE_COMPONENT_DESC"
                        );
                        $array3 = array(
			'name'	      => "core.create",
                        'title'       => "JACTION_CREATE",
                        'description' => "JACTION_CREATE_COMPONENT_DESC"
                        );
                        $array4 = array(
			'name'	      => "core.delete",
                        'title'       => "JACTION_DELETE",
                        'description' => "JACTION_DELETE_COMPONENT_DESC"
                        );
                        $array5 = array(
			'name'	      => "core.edit",
                        'title'       => "JACTION_EDIT",
                        'description' => "JACTION_EDIT_COMPONENT_DESC"
                        );
                        $array6 = array(
			'name'		  => "core.edit.state",
                        'title'       => "JACTION_EDITSTATE",
                        'description' => "JACTION_EDITSTATE_COMPONENT_DESC"
                        );


 		$obj = $access->getActions('com_banners', 'component');
        $arraystdClass =  (array)$obj[0];
        $this->assertThat(
        	$array1,
            $this->equalTo($arraystdClass)
        );
		$arraystdClass =  (array)$obj[1];
		$this->assertThat(
			$array2,
            $this->equalTo($arraystdClass)
        );
		$arraystdClass =  (array)$obj[2];
		$this->assertThat(
        	$array3,
            $this->equalTo($arraystdClass)
        );
		$arraystdClass =  (array)$obj[3];
		$this->assertThat(
			$array4,
			$this->equalTo($arraystdClass)
		);
		$arraystdClass =  (array)$obj[4];
		$this->assertThat(
			$array5,
			$this->equalTo($arraystdClass)
		);
		$arraystdClass =  (array)$obj[5];
		$this->assertThat(
			$array6,
			$this->equalTo($arraystdClass)
		);
		$this->assertThat(
			$array7 = array(),
			$this->equalTo($access->getActions('com_complusoft', 'component'))
		);

	}
}

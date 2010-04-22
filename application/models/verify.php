<?php defined('SYSPATH') or die('No direct script access.');

/**
* Model for Verifications of incidents
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 * @author     Ushahidi Team <team@ushahidi.com> 
 * @package    Ushahidi - http://source.ushahididev.com
 * @module     Verify Model  
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL) 
 */

class Verify_Model extends ORM
{
	protected $belongs_to = array('incident', 'users');
	
	// Database table name
	protected $table_name = 'verified';
	
	public function __construct($id = null)
	{
		parent::__construct($id);

		if ( ! $this->loaded)
		{
			// Set reasonable defaults
			$this->user_id = $_SESSION['auth_user']->id; // This User
			$this->verified_date = date("Y-m-d H:i:s",time()); // Now
		}
	}
}

<?php
/**
 * Nextcloud - passman
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Sander Brand <brantje@gmail.com>
 * @copyright Sander Brand 2016
 */

namespace OCA\Passman\Db;
use \OCP\AppFramework\Db\Entity;

/**
 * @method integer getId()
 * @method void setId(integer $value)
 * @method void setName(string $value)
 * @method string getName()
 * @method void setGuid(string $value)
 * @method string getGuid()
 * @method void setUserId(string $value)
 * @method string getUserid()
 * @method void setCreated(integer $value)
 * @method integer getCreated()
 * @method void setlastAccess(integer $value)
 * @method integer getlastAccess()
 */


class Vault extends Entity {

	protected $guid;
	protected $name;
	protected $userId;
	protected $created;
	protected $lastAccess;

	public function __construct() {
		// add types in constructor
		$this->addType('created', 'integer');
		$this->addType('lastAccess', 'integer');
	}
}
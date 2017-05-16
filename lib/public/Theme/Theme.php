<?php
/**
 * @author Philipp Schaffrath <github@philipp.schaffrath.email>
 *
 * @copyright Copyright (c) 2017, ownCloud GmbH
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */
namespace OCP\Theme;

/**
 * @package OCP\Theme
 * @since 10.0.1
 */
class Theme {

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var string
	 */
	private $directory;

	/**
	 * @var string
	 */
	private $webPath;

	/**
	 * @param string $name
	 * @param string $directory
	 * @param string $webPath
	 * @since 10.0.1
	 */
	public function __construct($name = '', $directory = '', $webPath = '') {
		$this->name = $name;
		$this->directory = $directory;
		$this->webPath = $webPath;
	}

	/**
	 * @return string
	 * @since 10.0.1
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return string
	 * @since 10.0.1
	 */
	public function getDirectory() {
		return $this->directory;
	}

	/**
	 * @return string
	 * @since 10.0.1
	 */
	public function getWebPath() {
		return $this->webPath;
	}

	/**
	 * @param string $name
	 * @since 10.0.1
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @param string $directory
	 * @since 10.0.1
	 */
	public function setDirectory($directory) {
		$this->directory = $directory;
	}

	/**
	 * @param string $webPath
	 * @since 10.0.1
	 */
	public function setWebPath($webPath) {
		$this->webPath = $webPath;
	}
}

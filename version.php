<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    block
 * @subpackage firephp
 * @copyright  2011 onwards Frank Ralf
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Frank Ralf <Frank.Ralf@gmx.net>
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2013101400;
$plugin->requires  = 2013051400; #2010112400;
$plugin->component = 'block_firephp';
$plugin->cron      = 0;
$plugin->maturity  = MATURITY_RC;
$plugin->release   = '1.0 (Build: 2013101400)';
<?php
/**
 * BlueSpiceNotesLinkConnector extension for BlueSpice
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * This file is part of BlueSpice MediaWiki
 * For further information visit http://bluespice.com
 *
 * @author     Patric Wirth <wirth@hallowelt.com>
 * @package    BlueSpiceNotesLinkConnector
 * @subpackage BlueSpiceNotesLinkConnector
 * @copyright  Copyright (C) 2017 Hallo Welt! GmbH, All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License v2 or later
 * @filesource
 */


class BlueSpiceNotesLinkConnector extends \BsExtensionMW {

	public static function onBSInsertMagicAjaxGetData( &$response, $type ) {
		if( $type !== 'tags' ) {
			return true;
		}
		$helplink = '';
		$extensions = \ExtensionRegistry::getInstance()->getAllThings();
		if( isset( $extensions['NotesLink'] ) ) {
			$helplink = $extensions['NotesLink']['url'];
		}

		$response->result[] = (object) [
			'id' => 'ndl',
			'type' => 'tag',
			'name' => 'NDL',
			'desc' => \Message::newFromkey(
				'bs-noteslinkconnector-tag-ndl-description'
			)->plain(),
			'code' => "<NDL>
    <REPLICA >
    <VIEW >
    <NOTE >
    <HINT></HINT>
    <REM></REM>
</NDL>",
			'helplink' => $helplink,
			'examples' => [
				[ 'code' => '<NDL>
    <REPLICA 852565A7:005100C7>
    <VIEW OFAAC7D56C:A8FC874B-ON852563BE:00619639>
    <NOTE ON852563BE:A8FC874B-OFAAC7D56C:00619639>
    <HINT>CN=MYHOST/O=IDC</HINT>
    <REM>sampleDB</REM>
</NDL>'
			]],
		];

		return true;
	}
}
<?php

namespace BlueSpice\NotesLinkConnector\Hook\BSInsertMagicAjaxGetData;

class AddNDLTag extends \BlueSpice\InsertMagic\Hook\BSInsertMagicAjaxGetData {

	protected function skipProcessing() {
		return $this->type !== 'tags';
	}

	protected function doProcess() {
		$this->response->result[] = (object) [
			'id' => 'ndl',
			'type' => 'tag',
			'name' => 'NDL',
			'desc' => \Message::newFromkey( 'bs-noteslinkconnector-tag-ndl-description' )->plain(),
			'code' => $this->getCode(),
			'helplink' => $this->getHelpLink(),
			'examples' => $this->getExamples(),
		];

		return true;
	}

	protected function getCode() {
		return "<NDL></NDL>";
	}

	protected function getHelpLink() {
		$extensions = \ExtensionRegistry::getInstance()->getAllThings();
		if( !isset( $extensions['NotesLink'] ) ) {
			return '';
		}

		return $extensions['NotesLink']['url'];
	}

	protected function getExamples() {
		return [
			'code' => '<NDL>
    <REPLICA 852565A7:005100C7>
    <VIEW OFAAC7D56C:A8FC874B-ON852563BE:00619639>
    <NOTE ON852563BE:A8FC874B-OFAAC7D56C:00619639>
    <HINT>CN=MYHOST/O=IDC</HINT>
    <REM>sampleDB</REM>
</NDL>'
		];
	}
}

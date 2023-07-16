<?php

namespace BlueSpice\NotesLinkConnector\ContentDroplets;

use MediaWiki\Extension\ContentDroplets\Droplet\TagDroplet;
use Message;

class NotesDataLinkDroplet extends TagDroplet {

	/**
	 * @inheritDoc
	 */
	public function getName(): Message {
		return Message::newFromKey( 'bs-noteslinkconnector-ve-ndl-title' );
	}

	/**
	 * @inheritDoc
	 */
	public function getDescription(): Message {
		return Message::newFromKey( 'bs-noteslinkconnector-tag-ndl-description' );
	}

	/**
	 * @inheritDoc
	 */
	public function getIcon(): string {
		return 'droplet-notes-data-link';
	}

	/**
	 * @inheritDoc
	 */
	public function getRLModules(): array {
		return [ 'ext.bluespice.noteslinkconnector.visualEditor' ];
	}

	/**
	 * @inheritDoc
	 */
	public function getCategories(): array {
		return [ 'data' ];
	}

	/**
	 * @inheritDoc
	 */
	protected function getTagName(): string {
		return 'ndl';
	}

	/**
	 * @inheritDoc
	 */
	protected function getAttributes(): array {
		return [];
	}

	/**
	 * @inheritDoc
	 */
	protected function hasContent(): bool {
		return true;
	}

	/**
	 * @inheritDoc
	 */
	public function getVeCommand(): ?string {
		return 'ndlCommand';
	}
}

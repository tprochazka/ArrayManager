<?php

namespace Mesour\ArrayManage;

/**
 * @author mesour <matous.nemec@mesour.com>
 * @package Mesour ArrayManager
 */
class Container implements \Iterator, \ArrayAccess {

	private $data;

	public function __construct(array $arr) {
		$this->data = $arr;
	}

	public function offsetExists($offset): bool {
		return isset($this->data[$offset]);
	}

	public function offsetGet($offset): mixed {
		return $this->data[$offset];
	}

	public function offsetSet($offset, $value): void {
		$this->data[$offset] = $value;
	}

	public function offsetUnset($offset): void {
		unset($this->data[$offset]);
	}

	function rewind(): void {
		reset($this->data);
	}

	function current(): mixed {
		return current($this->data);
	}

	function key(): mixed {
		return key($this->data);
	}

	function next(): void {
		next($this->data);
	}

	function valid(): bool {
		return !is_null(key($this->data));
	}
}
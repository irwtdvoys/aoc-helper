<?php
	namespace AoC\Utils\LinkedList;

	class Node
	{
		public int $data;
		public ?Node $previous = null;
		public ?Node $next = null;

		public function __construct(int $data, Node $previous = null, Node $next = null)
		{
			$this->data = $data;
			$this->previous = $previous;
			$this->next = $next;
		}

		public function flip(): void
		{
			$tmp = $this->next;
			$this->next = $this->previous;
			$this->previous = $tmp;
		}

		public function __toString(): string
		{
			return $this->previous->data . " <- " . $this->data . " -> " . $this->next->data;
		}
	}
?>

<?php

        /**
     	 * Copyright (C) 2013 - Pablo Sepúlveda @psep
         *
	 * IteratorPattern v1.0a
	 *
     	 * This file is part of gEvents.
     	 * gEvents is free software: you can redistribute it and/or modify
     	 * it under the terms of the GNU General Public License as published by
    	 * the Free Software Foundation, either version 3 of the License, or
     	 * any later version.
     	 *
     	 * gEvents is distributed in the hope that it will be useful,
     	 * but WITHOUT ANY WARRANTY; without even the implied warranty of
     	 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     	 * GNU General Public License for more details.
     	 *
     	 * You should have received a copy of the GNU General Public License
	 * along with gEvents.  If not, see <http://www.gnu.org/licenses/>.
	 *
	 */
	class IteratorPattern{
	
		private $position;
		private $sizeList;
		private $array;

		function __construct($list){
			$this->position	= 0;
			$this->array	= $list;
			$this->sizeList = $this->size();		
		}

		/*
		 * @return tamaño de la lista
		 */
		private function size(){
			$size = 0;

			foreach ($this->array as $item) {
        			$size++;
      			}

			return $size;		
		}

		/*
		 * @return boolean
		 * 
		 * Retorna true cuando el puntero (position) 
		 * está dentro de la lista.
		 */
		public function hasNext(){
			$result = false;
			
			if($this->position == 0 && $this->sizeList > 0){
				$result	= true;	
			}else if($this->position < $this->sizeList){
				$result	= true;
			}

			return $result;		
		}
		
		/*
		 * @return item de la lista según posición
		 */
		public function next(){
			$item = NULL;
			
			if($this->position < $this->sizeList){
				$item = $this->array[$this->position];
				$this->position++;
			}
			
			return $item;
		}	

	}

?>

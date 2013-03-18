<?php

	/*
	 * Copyright (C) 2013 - Pablo Sepúlveda @psep
     	 *
	 * ArrayList v1.5a
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
	final class ArrayList {
 
		private $array = array();
		
		/*
		 * @return valor del ArrayList
		 */
		final public function getArrayList(){
			return $this->array;
		}
		
		/*
		 * Limpia el array()
		 */
		final public function clear(){
			$this->array = array();
		}
 
 		/*
		 * @param $item
		 * 
		 * Agrega un nuevo item al array
		 */
    		final public function add($item){
      			$this->array[] = $item ;
    		}
 
 		/*
		 * @return array como una cadena de string
		 */
    		final public function toString(){
    			$cadena = "";
      			foreach ($this->array as $item) {
        			$cadena .= $item;
      			}
      			return $cadena;
    		}
 
 		/*
		 * @param $item
		 * 
		 * Remueve un item determinado del array
		 */
    		final public function remove($item){
    			unset($this->array[$item]);
    		}

		/*
		 * @param $item
		 * 
		 * Retorna un item determinado
		 */
    		final public function get($item){
			return $this->array[$item];
    		}
		
 		/*
		 * @return tamaño del array
		 */
 		final public function size(){
    			$size = 0;
      			foreach ($this->array as $item) {
        			$size++;
      			}
      			return $size;
    		}
		
	}
?>

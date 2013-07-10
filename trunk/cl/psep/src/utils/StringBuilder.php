<?php

	/**
	 * Copyright (C) 2013 - Pablo Sepúlveda @psep
	 * 
	 * StringBuilder v1.0a
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
	 * Website: http://www.psep.cl/
	 */
	
	class StringBuilder{
         
		private $value = NULL;
 
		
		/*
        	 * @param $st
        	 * Concatena la cadena agregando valor.
        	 */
		public function append($st){
			$this->value .= $st;
		}

 
		/*
		 * @param $intChar, $st
        	 * Reemplaza caracter en cadena según posición (intChar)
       		 */
		public function setCharAt($intChar, $st){
			$int  = $this->length();

			if($intChar > ($intFinal-1)){
				throw new Exception("Error! valor es más grande que la cadena: ".$intFinal);
			}else if(strlen($st) <> 1){
				throw new Exception("Error! Debe ser un sólo caracter");
           	 	}else{
                		$stInicio   = substr($this->value, 0, $intChar);
                		$st   = substr($this->value, $intChar + 1, $intFinal);
                		$this->value= $stInicio;
                		$this->value.= $st;
                		$this->value.= $stFinal;
            		}
        	}

         
        	/*
        	 * @param posicion caracter
        	 * Elimina de la cadena el número de caracter ingresado.
        	 */
        	public function deleteCharAt($intChar){
			$int  = $this->length();
             
            		if($intChar > ($intFinal-1)){
                		throw new Exception("Error! Excede cadena de caracteres");
            		}else{
                		$stInicio   = substr($this->value, 0, $intChar);
                		$st   = substr($this->value, $intChar + 1, $intFinal);
                		$this->value= $stInicio;
                		$this->value.= $stFinal;
            		}
        	}
         

	        /*
	         * @param start, end, string
	         * Reemplaza cadena desde inicio a definido
	         * con la cadena string ingresada.
	         */
        	public function replace($start, $end, $st){
			$int  = $this->length();

			if($start > ($intFinal-1)){
                		throw new Exception("Error! valor es más grande que la cadena: ".$intFinal);               
            		}else{
                		$stInicio   = substr($this->value, 0, $start);
                		$st   = substr($this->value, $end, $intFinal);
                		$this->value= $stInicio;
                		$this->value.= $st;
                		$this->value.= $stFinal;
            		}
        	}
         

        	/*
	         * @param inicio, final
	         * Elimina de la cadena según las posiciones ingresadas.
	         */
	        public function delete($start, $end){
			$int  = $this->length();

			if($start > ($intFinal-1)){
                		throw new Exception("Error! valor inicial es más grande que la cadena");
			}else{
                		$stInicio   = substr($this->value, 0, $start);
                		$st   = substr($this->value, $end, $intFinal);
                		$this->value= $stInicio;
                		$this->value.= $stFinal;
            		}
        	}

         
	        /*
	         * @return largo de la cadena
	         */
	        public function length(){
			return strlen($this->value);
        	}

         
	        /*
	         * @param $intChar
	         * Deja en cadeja el número de caracteres solicitados.
	         */
	        public function setLength($intChar){
			$this->value = substr($this->value, 0, $intChar);
        	}
        
 
	        /*
	         * @param $start, $end
	         * @return cadena cortada
	         * Según inicio y ingresados.
	         */
	        public function substring($start, $end){
			return substr($this->value, $start, $end);
        	}
        
 
	        /*
	         * @param posición, string
	         * Inserta caracteres ingresados según posición.
	         */
	        public function insert($posicion, $st){
			$maxlength = $this->length();

			if($posicion > ($maxlength-1)){
		                throw new Exception("Error! posición excede cadena");
			}else{
		                $stInicio   = substr($this->value, 0, $posicion);
		                $st   = substr($this->value, $posicion, $maxlength);
        	        	$this->value= $stInicio;
        	        	$this->value.= $st;
        	        	$this->value.= $stFinal;
			}
        	}

         
	        /*
	         * Invierte la cadena $value.
	         */
	        public function reverse(){
			$maxlength  = $this->length();
			$reverse    = NULL;

			for($i = $maxlength; $i > 0; $i--){
				$reverse.= substr($this->value, ($i - 1), 1);
			}

			$this->value = $reverse;
        	}

         
        	/*
        	 * @return caracter según número.
        	 */
        	public function charAt($int){
			$largo = $this->length();
		
			if($int > ($largo - 1)){
                		throw new Exception("Error! valor es más grande que la cadena: ".$largo);
			}else{
                		return substr((substr($this->value, $int)), 0, 1);  
            		}
        	}

         
	        /*
	         * @return valor de posición en cadena
	         */
	        public function indexOf($st){
			if($st == null || $st == ""){
				throw new Exception("Error! valor a buscar es nulo o vacío");
			}else{
				return strpos($this->value, $st);
			}
		}

         
        	/*
        	 * @return cadena
        	 */
        	public function toString(){
			return $this->value;
		}

         
	        /*
	         * Limpia $value
	         */
	        public function setReset(){
			$this->value = NULL;
		}

	}
 
?>

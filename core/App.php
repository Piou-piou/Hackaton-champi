<?php
	namespace core;
	
	
	class App {
		private static $database;
		
		//-------------------------- BUILDER ----------------------------------------------------------------------------//
		//-------------------------- END BUILDER ----------------------------------------------------------------------------//
		
		
		//-------------------------- GETTER ----------------------------------------------------------------------------//
		/**
		 * @return Database
		 * renvoi une instance de la classe Database
		 */
		public static function getDb() {
			if (self::$database == null) {
				self::$database = new Database(DB_TYPE, DB_NAME, DB_USER, DB_PASS, DB_HOST);
			}
			return self::$database;
		}
		//-------------------------- END GETTER ----------------------------------------------------------------------------//
		
		
		//-------------------------- SETTER ----------------------------------------------------------------------------//
		//-------------------------- END SETTER ----------------------------------------------------------------------------//    
	}
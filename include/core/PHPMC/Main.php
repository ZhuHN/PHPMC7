<?php
define("PHPMC_VERSION", "7.2.1926-Beta"); // Don't Change This!
include(ROOT . "/include/core/PHPMC/Event.php");
include(ROOT . "/include/core/PHPMC/User.php");
include(ROOT . "/include/core/PHPMC/Utils.php");
include(ROOT . "/include/core/PHPMC/WebError.php");
include(ROOT . "/include/core/PHPMC/Profile.php");
include(ROOT . "/include/core/PHPMC/Daemon.php");
include(ROOT . "/include/core/PHPMC/Server.php");
include(ROOT . "/include/core/PHPMC/System.php");
include(ROOT . "/include/core/PHPMC/Http.php");
include(ROOT . "/include/core/PHPMC/Option.php");
include(ROOT . "/include/core/PHPMC/Permission.php");
class PHPMC {
	public static function Event() {
		return new Event();
	}
	
	public static function User() {
		return new User();
	}
	
	public static function Daemon() {
		return new Daemon();
	}
	
	public static function Server() {
		return new Server();
	}
	
	public static function System() {
		return new System();
	}
	
	public static function Http() {
		return new Http();
	}
	
	public static function Option() {
		return new Option();
	}
	
	public static function Permission() {
		return new Permission();
	}
	
	public static function Error() {
		return new WebError();
	}
}
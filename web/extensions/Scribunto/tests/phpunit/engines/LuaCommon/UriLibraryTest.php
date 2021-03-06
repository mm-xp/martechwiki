<?php

class Scribunto_LuaUriLibraryTest extends Scribunto_LuaEngineTestBase {
	protected static $moduleName = 'UriLibraryTests';

	protected function setUp() {
		parent::setUp();

		$this->setMwGlobals( [
			'wgServer' => '//wiki.local',
			'wgCanonicalServer' => 'http://wiki.local',
			'wgUsePathInfo' => true,
			'wgActionPaths' => [],
			'wgScript' => '/w/index.php',
			'wgScriptPath' => '/w',
			'wgArticlePath' => '/wiki/$1',
		] );
	}

	protected function getTestModules() {
		return parent::getTestModules() + [
			'UriLibraryTests' => __DIR__ . '/UriLibraryTests.lua',
		];
	}
}

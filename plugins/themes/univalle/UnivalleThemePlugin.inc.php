<?php

import('lib.pkp.classes.plugins.ThemePlugin');

class UnivalleThemePlugin extends ThemePlugin {
/**
	 * Initialize the theme's styles, scripts and hooks. This is only run for
	 * the currently active theme.
	 *
	 * @return null
	 */
	public function init() {
		$this->setParent('defaultthemeplugin');
		$this->modifyStyle('stylesheet', array('addLess' => array('styles/index.less')));
	}

	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	function getDisplayName() {
		return 'Tema Univalle';
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return 'Tema customizado por la Universidad del Valle, partiendo de el tema por defecto';
	}
}

?>


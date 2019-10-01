/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	// config.allowedContent = false;
	// config.allowedContent ='*(*)';
	config.removePlugins = 'image';
	config.extraPlugins = 'image2';
	config.extraPlugins = 'dialog';
	config.extraPlugins = 'widget';
	config.extraPlugins = 'lineutils';
	config.extraPlugins = 'clipboard';
	config.extraPlugins = 'widgetselection';
	// config.allowedContent ='*(*)';
	config.height = '500px';
	config.width = 'auto';
	config.height = '500px';
	config.width = 'auto';
	// config.removePlugins = 'image';
	// config.extraPlugins = 'image2,uploadimage,easyimage';
};

/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	
	
	//�Զ�������
	//config.������ = ֵ
	config.width = 500;
	config.height = 300;
	config.uiColor = "#aabbcc";

	//�ļ����ϴ�����������CKfinder
	config.filebrowserBrowseUrl =	'/Public/Admin/ckfinder/ckfinder.html';	
	config.filebrowserImageBrowseUrl = '/Public/Admin/ckfinder/ckfinder.html?Type=Images';	
	config.filebrowserFlashBrowseUrl = '/Public/Admin/ckfinder/ckfinder.html?Type=Flash';	
	config.filebrowserUploadUrl = '/Public/Admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';	
	config.filebrowserImageUploadUrl = '/Public/Admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';	
	config.filebrowserFlashUploadUrl = '/Public/Admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

};
﻿<?php
	/**
	 * language pack
	 * @author Logan Cai (cailongqun [at] yahoo [dot] com [dot] cn)
	 * @link www.phpletter.com
	 * @since 22/April/2007
	 *
	 */
	define('DATE_TIME_FORMAT', 'd/M/Y H:i:s');
	//Common
	//Menu
	
	
	
	
	define('MENU_SELECT', 'Select');
	define('MENU_DOWNLOAD', 'Download');
	define('MENU_PREVIEW', 'Vorschau');
	define('MENU_RENAME', 'Umbenenen');
	define('MENU_EDIT', 'Bearbeiten');
	define('MENU_CUT', 'Ausschneiden');
	define('MENU_COPY', 'Kopieren');
	define('MENU_DELETE', 'Löschen');
	define('MENU_PLAY', 'Apspielen');
	define('MENU_PASTE', 'Einfügen');
	
	//Label
		//Top Action
		define('LBL_ACTION_REFRESH', 'Aktualisieren');
		define('LBL_ACTION_DELETE', 'Löschen');
		define('LBL_ACTION_CUT', 'Ausschneiden');
		define('LBL_ACTION_COPY', 'Kopieren');
		define('LBL_ACTION_PASTE', 'Einfügen');
		define('LBL_ACTION_CLOSE', 'Schließen');
		define('LBL_ACTION_SELECT_ALL', 'Alles auswählen');
		//File Listing
	define('LBL_NAME', 'Name');
	define('LBL_SIZE', 'Größe');
	define('LBL_MODIFIED', 'Verändert am');
		//File Information
	define('LBL_FILE_INFO', 'Datei Informationen:');
	define('LBL_FILE_NAME', 'Name:');	
	define('LBL_FILE_CREATED', 'Erstellt:');
	define('LBL_FILE_MODIFIED', 'Verändert:');
	define('LBL_FILE_SIZE', 'Datei Größe:');
	define('LBL_FILE_TYPE', 'Datei Typ:');
	define('LBL_FILE_WRITABLE', 'Beschreiber?');
	define('LBL_FILE_READABLE', 'Lesbar?');
		//Folder Information
	define('LBL_FOLDER_INFO', 'Verzeichnis Information');
	define('LBL_FOLDER_PATH', 'Verzeichnis:');
	define('LBL_CURRENT_FOLDER_PATH', 'Sie befinden sich hier:');
	define('LBL_FOLDER_CREATED', 'Erstellt:');
	define('LBL_FOLDER_MODIFIED', 'Verändert:');
	define('LBL_FOLDER_SUDDIR', 'Unterverz.:');
	define('LBL_FOLDER_FIELS', 'Dateien:');
	define('LBL_FOLDER_WRITABLE', 'Beschreiber?');
	define('LBL_FOLDER_READABLE', 'Lesbar?');
	define('LBL_FOLDER_ROOT', 'Root Verzeichnis');
		//Preview
	define('LBL_PREVIEW', 'Vorschau');
	define('LBL_CLICK_PREVIEW', 'Click here to preview it.');
	//Buttons
	define('LBL_BTN_SELECT', 'Auswählen');
	define('LBL_BTN_CANCEL', 'Abbruch');
	define('LBL_BTN_UPLOAD', 'Hochladen');
	define('LBL_BTN_CREATE', 'Erstellen');
	define('LBL_BTN_CLOSE', 'Schließen');
	define('LBL_BTN_NEW_FOLDER', 'Neues Verzeichnis');
	define('LBL_BTN_NEW_FILE', 'Neu Datei');
	define('LBL_BTN_EDIT_IMAGE', 'Bearbeiten');
	define('LBL_BTN_VIEW', 'Select View');
	define('LBL_BTN_VIEW_TEXT', 'Text');
	define('LBL_BTN_VIEW_DETAILS', 'Details');
	define('LBL_BTN_VIEW_THUMBNAIL', 'Miniatüransicht');
	define('LBL_BTN_VIEW_OPTIONS', 'Zeigen als:');
	//pagination
	define('PAGINATION_NEXT', 'Nexte');
	define('PAGINATION_PREVIOUS', 'Vorrige');
	define('PAGINATION_LAST', 'Letzes');
	define('PAGINATION_FIRST', 'Erstes');
	define('PAGINATION_ITEMS_PER_PAGE', 'Zeige %s Inhalte pro Seite');
	define('PAGINATION_GO_PARENT', 'hach oben');
	//System
	define('SYS_DISABLED', 'Permission denied: The system is disabled.');
	
	//Cut
	define('ERR_NOT_DOC_SELECTED_FOR_CUT', 'Kein(e) Dokument(en) ausgewählt zum ausschneiden.');
	//Copy
	define('ERR_NOT_DOC_SELECTED_FOR_COPY', 'Kein(e) Dokument(en) ausgewählt zum kopieren.');
	//Paste
	define('ERR_NOT_DOC_SELECTED_FOR_PASTE', 'Kein(e) Dokument(en) ausgewählt zum einfügen.');
	define('WARNING_CUT_PASTE', 'Are you sure to move selected documents to current folder?');
	define('WARNING_COPY_PASTE', 'Are you sure to copy selected documents to current folder?');
	define('ERR_NOT_DEST_FOLDER_SPECIFIED', 'No destination folder specified.');
	define('ERR_DEST_FOLDER_NOT_FOUND', 'Destination folder not found.');
	define('ERR_DEST_FOLDER_NOT_ALLOWED', 'You are not allowed to move files to this folder');
	define('ERR_UNABLE_TO_MOVE_TO_SAME_DEST', 'Failed to move this file (%s): Original path is same as destination path.');
	define('ERR_UNABLE_TO_MOVE_NOT_FOUND', 'Failed to move this file (%s): Original file does not exist.');
	define('ERR_UNABLE_TO_MOVE_NOT_ALLOWED', 'Failed to move this file (%s): Original file access denied.');
 
	define('ERR_NOT_FILES_PASTED', 'Keine Datei(en) has been pasted.');

	//Search
	define('LBL_SEARCH', 'Suchen');
	define('LBL_SEARCH_NAME', 'Volle/Teils Dateiname:');
	define('LBL_SEARCH_FOLDER', 'Schauen in:');
	define('LBL_SEARCH_QUICK', 'Schnelle Search');
	define('LBL_SEARCH_MTIME', 'Datei Verändert Time(Range):');
	define('LBL_SEARCH_SIZE', 'Datei Größe:');
	define('LBL_SEARCH_ADV_OPTIONS', 'Erweitete Optionen');
	define('LBL_SEARCH_FILE_TYPES', 'Datei Type:');
	define('SEARCH_TYPE_EXE', 'Anwendung');
	
	define('SEARCH_TYPE_IMG', 'Bild');
	define('SEARCH_TYPE_ARCHIVE', 'Archiv');
	define('SEARCH_TYPE_HTML', 'HTML');
	define('SEARCH_TYPE_VIDEO', 'Video');
	define('SEARCH_TYPE_MOVIE', 'Movie');
	define('SEARCH_TYPE_MUSIC', 'Musik');
	define('SEARCH_TYPE_FLASH', 'Flash');
	define('SEARCH_TYPE_PPT', 'PowerPoint');
	define('SEARCH_TYPE_DOC', 'Dokument');
	define('SEARCH_TYPE_WORD', 'Word');
	define('SEARCH_TYPE_PDF', 'PDF');
	define('SEARCH_TYPE_EXCEL', 'Excel');
	define('SEARCH_TYPE_TEXT', 'Text');
	define('SEARCH_TYPE_UNKNOWN', 'Unbekant');
	define('SEARCH_TYPE_XML', 'XML');
	define('SEARCH_ALL_FILE_TYPES', 'Alle Datei Typen');
	define('LBL_SEARCH_RECURSIVELY', 'Rekursive Suche:');
	define('LBL_RECURSIVELY_YES', 'Ja');
	define('LBL_RECURSIVELY_NO', 'Nein');
	define('BTN_SEARCH', 'neu Suchen');
	//thickbox
	define('THICKBOX_NEXT', 'Next&gt;');
	define('THICKBOX_PREVIOUS', '&lt;Prev');
	define('THICKBOX_CLOSE', 'Schließen');
	//Calendar
	define('CALENDAR_CLOSE', 'Schließen');
	define('CALENDAR_CLEAR', 'Leer');
	define('CALENDAR_PREVIOUS', '&lt;Rück');
	define('CALENDAR_NEXT', 'Vor&gt;');
	define('CALENDAR_CURRENT', 'Heute');
	define('CALENDAR_MON', 'Mon');
	define('CALENDAR_TUE', 'Die');
	define('CALENDAR_WED', 'Mit');
	define('CALENDAR_THU', 'Don');
	define('CALENDAR_FRI', 'Fre');
	define('CALENDAR_SAT', 'Sam');
	define('CALENDAR_SUN', 'Son');
	define('CALENDAR_JAN', 'Jan');
	define('CALENDAR_FEB', 'Feb');
	define('CALENDAR_MAR', 'Mär');
	define('CALENDAR_APR', 'Apr');
	define('CALENDAR_MAY', 'Mai');
	define('CALENDAR_JUN', 'Jun');
	define('CALENDAR_JUL', 'Jul');
	define('CALENDAR_AUG', 'Aug');
	define('CALENDAR_SEP', 'Sep');
	define('CALENDAR_OCT', 'Okt');
	define('CALENDAR_NOV', 'Nov');
	define('CALENDAR_DEC', 'Dez');
	//ERROR MESSAGES
		//deletion
	define('ERR_NOT_FILE_SELECTED', 'Bitte eine Datei wählen.');
	define('ERR_NOT_DOC_SELECTED', 'No document(s) selected for deletion.');
	define('ERR_DELTED_FAILED', 'Unable to delete selected document(s).');
	define('ERR_FOLDER_PATH_NOT_ALLOWED', 'The folder path is not allowed.');
		//class manager
	define('ERR_FOLDER_NOT_FOUND', 'Unable to locate the specific folder: ');
		//rename
	define('ERR_RENAME_FORMAT', 'Please give it a name which only contain letters, digits, space, hyphen and underscore.');
	define('ERR_RENAME_EXISTS', 'Please give it a name which is unique under the folder.');
	define('ERR_RENAME_FILE_NOT_EXISTS', 'The file/folder does not exist.');
	define('ERR_RENAME_FAILED', 'Unable to rename it, please try again.');
	define('ERR_RENAME_EMPTY', 'Please give it a name.');
	define('ERR_NO_CHANGES_MADE', 'No changes has been made.');
	define('ERR_RENAME_FILE_TYPE_NOT_PERMITED', 'You are not permitted to change the file to such extension.');
		//folder creation
	define('ERR_FOLDER_FORMAT', 'Please give it a name which only contain letters, digits, space, hyphen and underscore.');
	define('ERR_FOLDER_EXISTS', 'Please give it a name which is unique under the folder.');
	define('ERR_FOLDER_CREATION_FAILED', 'Unable to create a folder, please try again.');
	define('ERR_FOLDER_NAME_EMPTY', 'Please give it  a name.');
	define('FOLDER_FORM_TITLE', 'Neues Verzeichnis');
	define('FOLDER_LBL_TITLE', 'Bezeichnung:');
	define('FOLDER_LBL_CREATE', 'Erstellen');
	//New File
	define('NEW_FILE_FORM_TITLE', 'Neue Datei Form');
	define('NEW_FILE_LBL_TITLE', 'Datei Name:');
	define('NEW_FILE_CREATE', 'Datei erstellen');
		//file upload
	define('ERR_FILE_NAME_FORMAT', 'Please give it a name which only contain letters, digits, space, hyphen and underscore.');
	define('ERR_FILE_NOT_UPLOADED', 'No file has been selected for uploading.');
	define('ERR_FILE_TYPE_NOT_ALLOWED', 'You are not allowed to upload such file type.');
	define('ERR_FILE_MOVE_FAILED', 'Failed to move the file.');
	define('ERR_FILE_NOT_AVAILABLE', 'The file is unavailable.');
	define('ERROR_FILE_TOO_BID', 'File too large. (max: %s)');
	define('FILE_FORM_TITLE', 'Weitere Datei/en Hochladen');
	define('FILE_LABEL_SELECT', 'Wadei wählen');
	define('FILE_LBL_MORE', 'Weiteres Uploader zufügen');
	define('FILE_CANCEL_UPLOAD', 'Abbruch');
	define('FILE_LBL_UPLOAD', 'Hochladen');
	//file download
	define('ERR_DOWNLOAD_FILE_NOT_FOUND', 'No files selected for download.');
	//Rename
	define('RENAME_FORM_TITLE', 'Umbenenen');
	define('RENAME_NEW_NAME', 'Neue Name');
	define('RENAME_LBL_RENAME', 'Umbenenen');

	//Tips
	define('TIP_FOLDER_GO_DOWN', 'Single Click to get to this folder...');
	define('TIP_DOC_RENAME', 'Double Click to edit...');
	define('TIP_FOLDER_GO_UP', 'Single Click to get to the parent folder...');
	define('TIP_SELECT_ALL', 'Alle auswählen');
	define('TIP_UNSELECT_ALL', 'Auswahl zurück setzen');
	//WARNING
	define('WARNING_DELETE', 'Are you sure to delete selected document(s).');
	define('WARNING_IMAGE_EDIT', 'Please select an image for edit.');
	define('WARNING_NOT_FILE_EDIT', 'Please select a file for edit.');
	define('WARING_WINDOW_CLOSE', 'Are you sure to close the window?');
	//Preview
	define('PREVIEW_NOT_PREVIEW', 'No preview available.');
	define('PREVIEW_OPEN_FAILED', 'Unable to open the file.');
	define('PREVIEW_IMAGE_LOAD_FAILED', 'Unable to load the image');

	//Login
	define('LOGIN_PAGE_TITLE', 'Ajax File Manager Login Form');
	define('LOGIN_FORM_TITLE', 'Anmeldung');
	define('LOGIN_USERNAME', 'Benutzername:');
	define('LOGIN_PASSWORD', 'Passwort:');
	define('LOGIN_FAILED', 'Falsche Benutzername/Passwort.');
	
	
	//88888888888   Below for Image Editor   888888888888888888888
		//Warning 
		define('IMG_WARNING_NO_CHANGE_BEFORE_SAVE', 'You have not made any changes to the images.');
		
		//General
		define('IMG_GEN_IMG_NOT_EXISTS', 'Image does not exist');
		define('IMG_WARNING_LOST_CHANAGES', 'All unsaved changes made to the image will lost, are you sure you wish to continue?');
		define('IMG_WARNING_REST', 'All unsaved changes made to the image will be lost, are you sure to reset?');
		define('IMG_WARNING_EMPTY_RESET', 'No changes has been made to the image so far');
		define('IMG_WARING_WIN_CLOSE', 'Are you sure to close the window?');
		define('IMG_WARNING_UNDO', 'Are you sure to restore the image to previous state?');
		define('IMG_WARING_FLIP_H', 'Are you sure to flip the image horizotally?');
		define('IMG_WARING_FLIP_V', 'Are you sure to flip the image vertically');
		define('IMG_INFO', 'Image Information');
		
		//Mode
			define('IMG_MODE_RESIZE', 'Resize:');
			define('IMG_MODE_CROP', 'Crop:');
			define('IMG_MODE_ROTATE', 'Rotate:');
			define('IMG_MODE_FLIP', 'Flip:');		
		//Button
		
			define('IMG_BTN_ROTATE_LEFT', '90&deg;CCW');
			define('IMG_BTN_ROTATE_RIGHT', '90&deg;CW');
			define('IMG_BTN_FLIP_H', 'Flip Horizontal');
			define('IMG_BTN_FLIP_V', 'Flip Vertical');
			define('IMG_BTN_RESET', 'Reset');
			define('IMG_BTN_UNDO', 'Undo');
			define('IMG_BTN_SAVE', 'Save');
			define('IMG_BTN_CLOSE', 'Close');
			define('IMG_BTN_SAVE_AS', 'Save As');
			define('IMG_BTN_CANCEL', 'Cancel');
		//Checkbox
			define('IMG_CHECKBOX_CONSTRAINT', 'Constraint?');
		//Label
			define('IMG_LBL_WIDTH', 'Width:');
			define('IMG_LBL_HEIGHT', 'Height:');
			define('IMG_LBL_X', 'X:');
			define('IMG_LBL_Y', 'Y:');
			define('IMG_LBL_RATIO', 'Ratio:');
			define('IMG_LBL_ANGLE', 'Angle:');
			define('IMG_LBL_NEW_NAME', 'New Name:');
			define('IMG_LBL_SAVE_AS', 'Save As Form');
			define('IMG_LBL_SAVE_TO', 'Save To:');
			define('IMG_LBL_ROOT_FOLDER', 'Root Folder');
		//Editor
		//Save as 
		define('IMG_NEW_NAME_COMMENTS', 'Please do not contain the image extension.');
		define('IMG_SAVE_AS_ERR_NAME_INVALID', 'Please give it a name which only contain letters, digits, space, hyphen and underscore.');
		define('IMG_SAVE_AS_NOT_FOLDER_SELECTED', 'No distination folder selected.');	
		define('IMG_SAVE_AS_FOLDER_NOT_FOUND', 'The destination folder doest not exist.');
		define('IMG_SAVE_AS_NEW_IMAGE_EXISTS', 'There exists an image with same name.');

		//Save
		define('IMG_SAVE_EMPTY_PATH', 'Empty image path.');
		define('IMG_SAVE_NOT_EXISTS', 'Image does not exist.');
		define('IMG_SAVE_PATH_DISALLOWED', 'You are not allowed to access this file.');
		define('IMG_SAVE_UNKNOWN_MODE', 'Unexpected Image Operation Mode');
		define('IMG_SAVE_RESIZE_FAILED', 'Failed to resize the image.');
		define('IMG_SAVE_CROP_FAILED', 'Failed to crop the image.');
		define('IMG_SAVE_FAILED', 'Failed to save the image.');
		define('IMG_SAVE_BACKUP_FAILED', 'Unable to backup the original image.');
		define('IMG_SAVE_ROTATE_FAILED', 'Unable to rotate the image.');
		define('IMG_SAVE_FLIP_FAILED', 'Unable to flip the image.');
		define('IMG_SAVE_SESSION_IMG_OPEN_FAILED', 'Unable to open image from session.');
		define('IMG_SAVE_IMG_OPEN_FAILED', 'Unable to open image');
		
		
		//UNDO
		define('IMG_UNDO_NO_HISTORY_AVAIALBE', 'No history avaiable for undo.');
		define('IMG_UNDO_COPY_FAILED', 'Unable to restore the image.');
		define('IMG_UNDO_DEL_FAILED', 'Unable to delete the session image');
	
	//88888888888   Above for Image Editor   888888888888888888888
	
	//88888888888   Session   888888888888888888888
		define('SESSION_PERSONAL_DIR_NOT_FOUND', 'Unable to find the dedicated folder which should have been created under session folder');
		define('SESSION_COUNTER_FILE_CREATE_FAILED', 'Unable to open the session counter file.');
		define('SESSION_COUNTER_FILE_WRITE_FAILED', 'Unable to write the session counter file.');
	//88888888888   Session   888888888888888888888
	
	//88888888888   Below for Text Editor   888888888888888888888
		define('TXT_FILE_NOT_FOUND', 'File is not found.');
		define('TXT_EXT_NOT_SELECTED', 'Please select file extension');
		define('TXT_DEST_FOLDER_NOT_SELECTED', 'Please select destination folder');
		define('TXT_UNKNOWN_REQUEST', 'Unknown Request.');
		define('TXT_DISALLOWED_EXT', 'You are allowed to edit/add such file type.');
		define('TXT_FILE_EXIST', 'Such file already exits.');
		define('TXT_FILE_NOT_EXIST', 'No such found.');
		define('TXT_CREATE_FAILED', 'Failed to create a new file.');
		define('TXT_CONTENT_WRITE_FAILED', 'Failed to write content to the file.');
		define('TXT_FILE_OPEN_FAILED', 'Failed to open the file.');
		define('TXT_CONTENT_UPDATE_FAILED', 'Failed to update content to the file.');
		define('TXT_SAVE_AS_ERR_NAME_INVALID', 'Please give it a name which only contain letters, digits, space, hyphen and underscore.');
	//88888888888   Above for Text Editor   888888888888888888888
	
	
?>
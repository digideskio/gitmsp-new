(function() {
	tinymce.create('tinymce.plugins.popup', {
		init : function(ed, url) {
			// Register commands
			ed.addCommand('mcepopup', function() {
				ed.windowManager.open({
					file : url + '/popup.php', // file that contains HTML for our modal window
					width : 700 + parseInt(ed.getLang('button.delta_width', 0)), // size of our window
					height : 700 + parseInt(ed.getLang('button.delta_height', 0)), // size of our window
					inline : 1
				}, {
					plugin_url : url
				});
			});
			 
			// Register buttons
			ed.addButton('popup', {title : 'Insert Columns', cmd : 'mcepopup', image: url + '/images/button.png' });
		}
		
	});
	 
	// Register plugin
	// first parameter is the button ID and must match ID elsewhere
	// second parameter must match the first parameter of the tinymce.create() function above
	tinymce.PluginManager.add('popup', tinymce.plugins.popup);

})();
!function(a,b,c,d){var e=!1;a(b).on("mouseenter","#wp-admin-bar-imagify",function(){var b,d;!0!==e&&(e=!0,b=a("#wp-admin-bar-imagify-profile-content"),b.is(":empty")&&(d=c.ajaxurl?c.ajaxurl:c.imagifyAdminBar.ajaxurl,d+=d.indexOf("?")>0?"&":"?",a.get(d+"action=imagify_get_admin_bar_profile&imagifygetadminbarprofilenonce="+a("#imagifygetadminbarprofilenonce").val()).done(function(c){b.html(c.data),a("#wp-admin-bar-imagify-profile-loading").remove(),e=!1})))})}(jQuery,document,window);
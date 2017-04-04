$(document).ready(function(){
	$("#jquery_jplayer_1").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				title: "The Flame",
				m4a: "../audio/the_flame.m4a",
			});
		},
		cssSelectorAncestor: "#jp_container_1",
		swfPath: "../swf/",
		supplied: "m4a",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true,
		remainingDuration: true,
		toggleDuration: true
	});
});

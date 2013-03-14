var images = new Array()
	function preload() {
		for (i = 0; i < preload.arguments.length; i++) {
			images[i] = new Image()
			images[i].src = preload.arguments[i]
		}
	}
        
	preload(
		"../images/black_pattern.png",
		"../images/white_pattern.jpg",
		"../images/rainbow.png",
		"../images/Karen_logo.png",
		"../images/aboutme.png",
		"../img/okashii.jpeg",
		"../img/okashii01.jpeg",
		"../img/snow.jpeg",
		"../img/snow01.jpeg",
		"../img/taiko.jpeg",
		"../img/taiko01.jpeg",
		"../img/tree.jpeg",
		"../img/tree01.jpeg"
	)
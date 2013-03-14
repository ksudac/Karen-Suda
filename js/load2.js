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
		"../img/okashii02.jpeg",
		"../img/okashii03.jpeg",
		"../img/okashii04.jpeg",
		"../img/snow.jpeg",
		"../img/snow01.jpeg",
		"../img/snow02.jpeg",
		"../img/snow03.jpeg",
		"../img/snow04.jpeg",
		"../img/taiko.jpeg",
		"../img/taiko01.jpeg",
		"../img/taiko02.jpeg",
		"../img/tree.jpeg",
		"../img/tree01.jpeg",
		"../img/tree02.jpeg",
		"../img/tree03.jpeg",
		"../images/facebook.png",
		"../images/flash.png",
		"../images/gmail.png",
		"../images/java.png",
		"../images/javascript.png",
		"../images/linkedin.png",
		"../images/lunch.png",
		"../images/phone.png",
		"../images/php.png",
		"../images/poll.gif",
		"../images/small_drawing.jpg"
	)
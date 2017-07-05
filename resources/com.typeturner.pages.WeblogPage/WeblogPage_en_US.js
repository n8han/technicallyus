function initTypeturner() {
	initScrollPosition();
}

function initScrollPosition() {
	var matches = /#([^#].+)$/.exec(document.URL);
	if (matches && getPosition() == 0) {
		scrollToId(matches[1]);
	}
}

/* this function from http://www.quirksmode.org/js/findpos.html */
function findPos(obj) {
	var curleft = curtop = 0;
	if (obj.offsetParent) {
		curleft = obj.offsetLeft
		curtop = obj.offsetTop
		while (obj = obj.offsetParent) {
			curleft += obj.offsetLeft
			curtop += obj.offsetTop
		}
	}
	return [curleft,curtop];
}

/* this function based on http://www.quirksmode.org/viewport/compatibility.html */
function getPosition() {
	var y;
	if (self.pageYOffset) // all except Explorer
		y = self.pageYOffset;
	else if (document.documentElement && document.documentElement.scrollTop)
		// Explorer 6 Strict
		y = document.documentElement.scrollTop;
	else if (document.body) // all other Explorers
		y = document.body.scrollTop;
	
	return y;
}

function scrollToPosition(y) {
	cur = getPosition();
	dy = Math.ceil((y - cur) / 4);
	window.scrollBy(0, dy);
	if (cur != getPosition())
		setTimeout(function() { scrollToPosition(y); }, 50);
}

function scrollToId(id, render) {
	if (render == null)
		setTimeout(function() { scrollToId(id, true); }, 100);
	else {
		elem = document.getElementById(id);
		pos = findPos(elem);
		scrollToPosition(Math.max(0, pos[1] - 10));
	}
}
function highlightTarget() {
	var matches = /#(item-.+)$/.exec(document.URL);
	if (matches) {
		var targetId = matches[1];
		var entries = getElementsByClass("entry", document.getElementById("calendar"));
		var nodes = new Array();
		for (var i=0; i<entries.length; i++) 
			if (entries[i].id != targetId) {
				nodes.push(entries[i]);
				var anchors = entries[i].getElementsByTagName('a');
				for (var j=0; j<anchors.length; j++) 
					nodes.push(anchors[j]);
			}
		titles = getElementsByClass("title", document.getElementById("calendar"));
		for (var i=0; i<titles.length; i++) 
			nodes.push(titles[i]);
		hd = new Animator({
			duration: 750
		}).addSubject(new CSSStyleSubject(nodes, 'normal', 'invisible'));
		shw = new Animator({
			duration: 14000,
			interval: 500,
			transition: Animator.makeEaseIn(1.5)
		}).addSubject(new CSSStyleSubject(nodes, 'invisible', 'normal'));
		new AnimatorChain([hd, shw]).play();
	}
}

// http://www.dustindiaz.com/getelementsbyclass/
function getElementsByClass(searchClass,node,tag) {
	var classElements = new Array();
	if ( node == null )
		node = document;
	if ( tag == null )
		tag = '*';
	var els = node.getElementsByTagName(tag);
	var elsLen = els.length;
	var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
	for (i = 0, j = 0; i < elsLen; i++) {
		if ( pattern.test(els[i].className) ) {
			classElements[j] = els[i];
			j++;
		}
	}
	return classElements;
}

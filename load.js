window.onload = event => {
	const svg    = document.querySelector('svg'),
	      canvas = document.querySelector('canvas'),
	      a      = document.querySelector('a'),
	      img    = document.querySelector('img'),
	      button = document.querySelector('button'),
	      image  = document.querySelector('image'),
	      svgString = new XMLSerializer().serializeToString(svg);

	button.onclick = event => {
		console.log('Button click');
		const xhr = new XMLHttpRequest();
		xhr.open("POST", "/");
		xhr.responseType = 'json';
		xhr.setRequestHeader("Content-Type", "image/svg+xml;charset=UTF-8");
		xhr.onload = e => {
			switch (xhr.status) {
				case 200:
					console.log('Ajax OK');
					console.log(xhr.response);
					if (xhr.response.downloadLink) {
						a  .setAttribute('href', xhr.response.downloadLink);
						img.setAttribute('src' , xhr.response.downloadLink);
					} else {
						console.log('No download link sent back by AJAX');
					}
					break;
				default:
					
					throw 'Ajax wrong';
			}
		};	
		xhr.send(svgString);
	};
};

let bars = document.getElementsByClassName('progress');
for(let i  = 0 ; i < bars.length ; i++){
	let percentage = bars[i].dataset.percentage;
	let degrees = (360/100)*percentage;
	let right = bars[i].getElementsByClassName('progress-right')[0].getElementsByClassName('progress-bar');
	let left = bars[i].getElementsByClassName('progress-left')[0].getElementsByClassName('progress-bar');
	if(percentage <= 50 ){
		right[0].style.transform = 'rotate('+degrees+'deg)'
		left[0].style.transform = 'rotate(0deg)'
	} else {
		right[0].style.transform = 'rotate(180deg)'
		left[0].style.transform = 'rotate('+degrees/2+'deg)'
	}
}
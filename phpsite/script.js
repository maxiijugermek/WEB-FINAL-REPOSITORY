//var mainImage = document.getElementsByTagName("body");
var imageArray=["sunrisecity.jpg","eu.jpg","icarly.jpg","sdu.jpg","mybro.jpg"];
var imageIndex=0;
function changeImage(){
	document.body.style.backgroundImage = "url('"+imageArray[imageIndex]+"')";//("src", imageArray[imageIndex]);
	imageIndex++;
	if (imageIndex>=imageArray.length){
		imageIndex=0;
	}
}
var rotateAction = setInterval(changeImage, 5000)